<!-- Modal -->
<div class="modal fade" id="addReviewerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Reviewer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('reviewer.create') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="inputCategory">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="inputCategory" placeholder="{{ __('Enter Name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="" placeholder="{{ __('Enter Phone') }}">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="" placeholder="{{ __('Enter Email') }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="" placeholder="{{ __('Enter Password') }}">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control @error('confirmation_password') is-invalid @enderror" name="confirmation_password" id="" placeholder="{{ __('Enter Confirm Password') }}">
                            @error('confirmation_password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
