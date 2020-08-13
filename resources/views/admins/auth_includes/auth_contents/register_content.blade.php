<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="container">
        <div class="signup-content">
            <form method="POST" id="signup-form" class="signup-form" action="{{ route('admin.register.submit') }}">
                @csrf
                <h2 class="form-title">Create account</h2>
                <div class="form-group @error('name') is-invalid @enderror">
                    <input type="text" class="form-input" name="name" id="name" placeholder="Your Full Name" value="{{ old('name') }}"/>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group @error('email') is-invalid @enderror">
                    <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}"/>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group @error('password') is-invalid @enderror">
                    <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>

                <div class="form-group @error('password_confirmation') is-invalid @enderror">
                    <input type="password" class="form-input" name="password_confirmation" id="re_password" placeholder="Repeat your password"/>
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                    <span toggle="#re_password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term">
                        <span>
                            <span></span>
                        </span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                </div>

                <div class="form-group">
                    <button type="submit" id="submit" class="form-submit">Sign Up</button>
                </div>
            </form>
            <p class="loginhere">
                Already have an account ? <a href="{{ route('admin.login') }}" class="loginhere-link">Login here</a>
            </p>
        </div>
    </div>
</section>
