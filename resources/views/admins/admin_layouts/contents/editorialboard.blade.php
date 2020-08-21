@include('modals.editorialboard.addModal')
@include('modals.editorialboard.editModal')
@include('modals.editorialboard.viewModal')
@include('modals.editorialboard.deleteModal')
<div class="card">
    <div class="card-header">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEditorialBoardModal">
            <i class="fa fa-plus-circle"> {{ __('Create Editorial Board') }}</i>
        </button>
    </div>
    <div class="card-title">
        <div class="card-body">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item active">{{ __('Editorial Board Table') }}</li>
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
                    @foreach($editorialboards as $key => $editorialboard)
                        <tr>
                            <td id="td">{{ $editorialboard->id }}</td>
                            <td id="td">{{ $editorialboard->name}}</td>
                            <td id="td">{{ $editorialboard->email}}</td>
                            <td>
                                <button type="button" class="btn btn-primary editEditorialBoardModal"><i class="fa fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-info viewEditorialBoardModal"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-danger deleteEditorialBoardModal"><i class="fas fa-minus-circle"></i></button>
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

