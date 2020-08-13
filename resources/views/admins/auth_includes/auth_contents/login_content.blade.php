<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="container">
        <div class="signup-content">
            <form method="POST" id="signup-form" class="signup-form" action="{{ route('admin.login.submit') }}">
                @csrf
                <h2 class="form-title">Login to your account.</h2>
                <div class="form-group @error('email') is-invalid @enderror">
                    <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}"/>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group  @error('password') is-invalid @enderror">
                    <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" id="submit" class="form-submit">Sign In</button>
                </div>
            </form>
            <p class="loginhere">
                Don't hav an account ? <a href="{{ route('admin.register') }}" class="loginhere-link">Register here</a>
            </p>
        </div>
    </div>
</section>