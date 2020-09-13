<!-- Modal -->
<div class="modal fade" id="deleteManuscriptModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Manuscript</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body bg-dark">
                    <form action="{{ route('manuscript.destroy') }}" method="post">
                        @csrf

                        <p class="alert alert-info">Are your sure?</p>

                        <input type="hidden" name="id" id="id">

                        <button type="submit" class="btn btn-primary">Delete</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
