@include('modals.associateeditor.addModal')
@include('modals.associateeditor.editModal')
@include('modals.associateeditor.viewModal')
@include('modals.associateeditor.deleteModal')
<div class="card">
    <div class="card-header">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addAssociateEditorModal">
            <i class="fa fa-plus-circle"> {{ __('Create Associate Editor') }}</i>
        </button>
    </div>
    <div class="card-title">
        <div class="card-body">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item active">{{ __('Associate Editor Table') }}</li>
            </ol>
        </div>
    </div>

@include('partials.alerts')

<!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            {{ __('Authors Details') }}</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-dark table-hover" id="dataTables" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($associateeditors as $key => $associateeditor)
                        <tr>
                            <td id="td">{{ $associateeditor->id }}</td>
                            <td id="td">{{ $associateeditor->name}}</td>
                            <td id="td">{{ $associateeditor->email}}</td>
                            <td>
                                <button type="button" class="btn btn-outline-primary editAssociateEditorModal btn-sm"><i class="fa fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-outline-info viewAssociateEditorModal btn-sm"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-outline-danger deleteAssociateEditorModal btn-sm"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

