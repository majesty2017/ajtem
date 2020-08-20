@include('modals.editorinchief.addModal')
@include('modals.editorinchief.editModal')
@include('modals.editorinchief.deleteModal')
<div class="card">
    <div class="card-header">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEditorInChiefModal">
            <i class="fa fa-plus-circle"> {{ __('Create Editor In Chief') }}</i>
        </button>
    </div>
    <div class="card-title">
        <div class="card-body">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item active">{{ __('Editor In Chief Table') }}</li>
            </ol>
        </div>
    </div>

@include('partials.alerts')

<!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            {{ __('Editor In Chief Details') }}</div>
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
                    @foreach($editorinchiefs as $key => $editorinchief)
                        <tr>
                            <td id="td">{{ $editorinchief->id }}</td>
                            <td id="td">{{ $editorinchief->name}}</td>
                            <td id="td">{{ $editorinchief->email}}</td>
                            <td>
                                <button type="button" class="btn btn-primary editEditorInChiefModal"><i class="fa fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-info publishEditorInChiefModal"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-danger deleteEditorInChiefModal"><i class="fas fa-minus-circle"></i></button>
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

