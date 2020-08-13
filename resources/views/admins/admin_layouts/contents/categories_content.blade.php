@include('modals.categories.addModal')
@include('modals.categories.editModal')
@include('modals.categories.deleteModal')
<div class="card">
    <div class="card-header">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategoriesModal">
            <i class="fa fa-plus-circle"> Add Categories</i>
        </button>
    </div>
        <div class="card-title">
            <div class="card-body">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item active">{{ __('Categories Table') }}</li>
                </ol>
            </div>
        </div>

    @include('partials.alerts')

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Categories Details</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-dark table-hover" id="dataTables" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Categories</th>
                            <th>Created on</th>
                            <th>Updated</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#ID</th>
                            <th>Categories</th>
                            <th>Created On</th>
                            <th>Updated</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($categories as $key => $category)
                        <tr>
                            <td id="td">{{ $category->id }}</td>
                            <td id="td">{{ $category->name }}</td>
                            <td id="td">{{ $category->created_at }}</td>
                            <td id="td">{{ $category->updated_at->diffForHumans() }}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm editCategoryModal"><i class="fa fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-danger btn-sm deleteCategoryModal"><i class="fas fa-minus-circle"></i></button>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
{{--                <div class="card-footer small text-muted">Updated {{ $category->updated_at->diffForHumans() }}</div>--}}
        </div>
    </div>
</div>
