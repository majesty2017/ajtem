@if(Session::has('info'))
<div class="alert alert-info alert-dismissible fade show w-50 offset-3" role="alert">
        {{ Session::get('info') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
