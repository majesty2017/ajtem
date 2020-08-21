<!-- Modal -->
<div class="modal fade" id="editEditorialBoardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Editorial Board Member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('editorialboard.update') }}" method="post">
                    @csrf

                    <input type="hidden" name="edit_id" id="edit_id">

                    <div class="form-group">
                        <label for="inputCategory">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="{{ __('Enter Name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="{{ __('Enter Email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="{{ __('Enter Password') }}">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control @error('confirmation_password') is-invalid @enderror" name="confirmation_password" id="confirmation_password" placeholder="{{ __('Enter Confirm Password') }}">
                        @error('confirmation_password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-lg">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
