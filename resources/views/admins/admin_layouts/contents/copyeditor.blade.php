@include('modals.copyeditor.addModal')
@include('modals.copyeditor.editModal')
@include('modals.copyeditor.viewModal')
@include('modals.copyeditor.deleteModal')
<div class="card">
    <div class="card-header">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCopyEditorModal">
            <i class="fa fa-plus-circle"> {{ __('Create Copy Editor') }}</i>
        </button>
    </div>
    <div class="card-title">
        <div class="card-body">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item active">{{ __('Copy Editor Table') }}</li>
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
                    @foreach($copyeditors as $key => $copyeditor)
                        <tr>
                            <td id="td">{{ $copyeditor->id }}</td>
                            <td id="td">{{ $copyeditor->name}}</td>
                            <td id="td">{{ $copyeditor->email}}</td>
                            <td>
                                <button type="button" class="btn btn-primary editCopyEditorModal"><i class="fa fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-info viewCopyEditorModal"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-danger deleteCopyEditorModal"><i class="fas fa-minus-circle"></i></button>
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

