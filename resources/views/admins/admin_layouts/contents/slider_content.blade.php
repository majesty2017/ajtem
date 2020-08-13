@include('modals.sliders.addModal')
@include('modals.sliders.editModal')
@include('modals.sliders.deleteModal')
<div class="card">
    <div class="card-header">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSliderModal">
            <i class="fa fa-plus-circle"> Create Slider</i>
        </button>
    </div>
        <div class="card-title">
            <div class="card-body">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item active">{{ __('Sliders Table') }}</li>
                </ol>
            </div>
        </div>

    @include('partials.alerts')

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Sliders Details</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-dark table-hover" id="dataTables" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Slider Image</th>
                            <th>Created on</th>
                            <th>Updated</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#ID</th>
                            <th>Slider Image</th>
                            <th>Created On</th>
                            <th>Updated</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($sliders as $key => $slider)
                        <tr>
                            <td id="td">{{ $slider->id }}</td>
                            <td id="td">{{ $slider->image }}</td>
                            <td id="td">{{ $slider->created_at }}</td>
                            <td id="td">{{ $slider->updated_at->diffForHumans() }}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm editSliderModal"><i class="fa fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-danger btn-sm deleteSliderModal"><i class="fas fa-minus-circle"></i></button>
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
