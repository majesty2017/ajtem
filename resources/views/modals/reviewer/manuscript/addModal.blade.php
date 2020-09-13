<!-- Modal -->
<div class="modal fade" id="sendManuscriptModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Re-Send Manuscript</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body bg-dark">
                    <form action="{{ route('manuscript.resend') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Add Note (Optional)</label>
                            <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Click to Upload File</label>
                            <input type="file" class="form-control-file @error('upload_file') is-invalid @enderror" id="exampleFormControlFile1" name="upload_file">
                            @error('upload_file')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Send Manuscript</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
