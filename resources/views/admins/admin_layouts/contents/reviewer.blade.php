@include('modals.reviewer.addModal')
@include('modals.reviewer.editModal')
@include('modals.reviewer.viewModal')
@include('modals.reviewer.deleteModal')
<div class="card">
    <div class="card-header">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addReviewerModal">
            <i class="fa fa-plus-circle"> {{ __('Create Reviewer') }}</i>
        </button>
    </div>
    <div class="card-title">
        <div class="card-body">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item active">{{ __('Reviewer Table') }}</li>
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
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($reviewers as $key => $reviewer)
                        <tr>
                            <td id="td">{{ $reviewer->id }}</td>
                            <td id="td">{{ $reviewer->name}}</td>
                            <td id="td">{{ $reviewer->phone}}</td>
                            <td id="td">{{ $reviewer->email}}</td>
                            <td>
                                <button type="button" class="btn btn-primary editReviewerModal"><i class="fa fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-info viewReviewerModal"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-danger deleteReviewerModal"><i class="fas fa-minus-circle"></i></button>
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

