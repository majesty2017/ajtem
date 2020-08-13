@if(Session::has('info'))
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-info" role="alert">
                {{ Session::get('info') }}
            </div>
        </div>
    </div>
@endif