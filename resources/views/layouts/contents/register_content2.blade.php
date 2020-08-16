<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url({{ URL::to('assets/img/bg-img/40.jpg') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Register</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Login Area Start ##### -->
<div class="mag-login-area py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="login-content bg-white p-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Register to have an account -> next!</h5>
                    </div>

                    <form action="{{ route('user.register.submit') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="{{ __('Phone Number') }}">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Fax</label>
                            <input type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" id="fax" placeholder="{{ __('Fax') }}">
                            @error('fax')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Researcher Id</label>
                            <input type="text" class="form-control @error('researcher_id') is-invalid @enderror" name="researcher_id" id="postal_code" placeholder="{{ __('Researcher Id') }}">
                            @error('researcher_id')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Gender<span class="required-label">*</span></label>
                            <select type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" id="postal_code">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Rather Not Say">Rather Not Say</option>
                                <option value="Other">Other</option>
                            </select>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>How Long have you being in Academia?<span class="required-label">*</span></label>
                            <input type="text" class="form-control @error('academia') is-invalid @enderror" name="academia" id="academia" placeholder="{{ __('How Long have you being in Academia?') }}">
                            @error('academia')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Area of expertise<span class="required-label">*</span></label>
                            <input type="text" class="form-control @error('area_of_expertise1') is-invalid @enderror" name="area_of_expertise1" id="area_of_expertise1" placeholder="{{ __('Area of expertise') }}">
                            @error('area_of_expertise1')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Area of expertise</label>
                            <input type="text" class="form-control @error('area_of_expertise2') is-invalid @enderror" name="area_of_expertise2" id="area_of_expertise2" placeholder="{{ __('Area of expertise') }}">
                            @error('area_of_expertise2')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Area of expertise</label>
                            <input type="text" class="form-control @error('area_of_expertise3') is-invalid @enderror" name="area_of_expertise3" id="area_of_expertise3" placeholder="{{ __('Area of expertise') }}">
                            @error('area_of_expertise3')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Area of expertise</label>
                            <input type="text" class="form-control @error('area_of_expertise4') is-invalid @enderror" name="area_of_expertise4" id="area_of_expertise4" placeholder="{{ __('Area of expertise') }}">
                            @error('area_of_expertise4')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Area of expertise</label>
                            <input type="text" class="form-control @error('area_of_expertise5') is-invalid @enderror" name="area_of_expertise5" id="area_of_expertise5" placeholder="{{ __('Area of expertise') }}">
                            @error('area_of_expertise5')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Job title</label>
                            <input type="text" class="form-control @error('job_title') is-invalid @enderror" name="job_title" id="job_title" placeholder="{{ __('Job title') }}">
                            @error('job_title')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn mag-btn mt-30">Register</button>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <span class="custom-control-label">Already have an account?</span>

                                <a class="" href="{{ route('user.login') }}">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Login Area End ##### -->
