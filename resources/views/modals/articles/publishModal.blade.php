<!-- Modal -->
<div class="modal fade" id="publishArticlesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="alert alert-warning">Are you sure you want to publish this article?</h5>
                <form action="{{ route('admin.articles.publish') }}" method="POST">
                    @csrf
                    <input type="hidden" name="article_id" id="publish_article_id">

                    <button type="submit" class="btn btn-primary">{{ __('Publish Now') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
