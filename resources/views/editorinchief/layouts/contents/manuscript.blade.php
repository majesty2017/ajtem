@include('modals.editorinchief.manuscript.addModal')
@include('modals.editorinchief.manuscript.deleteModal')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header card-header-primary">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary pull-right" data-toggle="modal" data-target="#sendManuscriptModal">
                            <i class="material-icons">add</i> Send Manuscript
                        </button>
                        <h4 class="card-title mt-0"> Reviewers Table</h4>
                        <p class="card-category"> This is reviewers table</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                <th>
                                    ID
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Title
                                </th>
                                <th>
                                    File
                                </th>
                                <th>
                                    Created At
                                </th>
                                <th>
                                    Updated At
                                </th>
                                <th>
                                    Action
                                </th>
                                </thead>
                                <tbody>
                                <?php $id = 1 ?>
                                @foreach($manuscripts as $manuscript)
                                <tr>
                                    <td id="td">{{ $id++ ?? $manuscript->id}}</td>
                                    <td id="td">{{ $manuscript->author ?? '' }}</td>
                                    <td id="td">{{ $manuscript->title }}</td>
                                    @if($manuscript->upload_image)
                                    <td>
                                        <a href="{{ route('manuscript.download', [$manuscript->upload_files]) }}"><img src="{{ asset('uploads/manuscripts/default/' . $manuscript->upload_image) }}" style="width: 70px; height: 70px" class="rounded"> Download</a>
                                    </td>
                                    @endif
                                    <td>{{ $manuscript->created_at->diffForHumans() }}</td>
                                    <td>{{ $manuscript->updated_at->diffForHumans() }}</td>
                                    <td class="td-actions">
{{--                                        <a href="{{ route('manuscript.show', $manuscript->id) }}" title="Send Manuscript" class="btn btn-white btn-link btn-sm">--}}
{{--                                            <i class="material-icons">edit</i>--}}
{{--                                        </a>--}}
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm deleteManuscriptModal">
                                            <i class="material-icons">close</i>
                                        </button>
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
    </div>
</div>
