<!-- Modal -->
<div class="modal fade" id="editManuscriptModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Send Manuscript</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body bg-dark">
                    <form action="{{ route('manuscript.sendManuscript') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" id="id">

                        <div class="form-group">
                            <label>Select Reviewer</label>
                            <select class="form-control bg-dark" name="reviewer_id">
                                <option class="text-black">-- Select --</option>
                                @foreach($reviewers as $reviwer)
                                    <option class="text-black" value="{{ $reviwer->id }}">{{ $reviwer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="upload_file" id="upload_file">
                        <span id="store_image"></span>
                        <button type="submit" class="btn btn-primary">Send Manuscript</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
