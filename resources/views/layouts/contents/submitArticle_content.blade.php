<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url({{ URL::to('assets/img/bg-img/40.jpg') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Submit Manuscript</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
{{--                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>--}}
                        <li class="breadcrumb-item active" aria-current="page">Submit Manuscript</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Video Submit Area Start ##### -->
<div class="video-submit-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Video Submit Content -->
                <div class="video-submit-content mb-50 p-30 bg-white box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Submit your manuscript</h5>
                    </div>

                    <div class="video-info mt-30">
                        @include('partials.alerts')
                        <form action="{{ route('article.post') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Manuscript Category<span class="required-label">*</span></label>
                                <select name="category_name" class="form-control">
                                    <option>-- Select -- </option>
                                    @foreach($categories as $key => $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group @error('title') is-invalid @enderror">
                                <label>Title<span class="required-label">*</span></label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="{{ __('Enter title') }}" value="{{ old('title') }}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group @error('author') is-invalid @enderror">
                                <label>Author(s)</label>
                                <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" placeholder="{{ __('Enter Author(s)') }}" value="{{ old('author') }}">
                                @error('author')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group @error('year') is-invalid @enderror">
                                <label>Email<span class="required-label">*</span></label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __('Enter Email') }}" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group @error('abstract') is-invalid @enderror">
                                <label>Abstract<span class="required-label">*</span></label>
                                <textarea name="abstract" class="form-control @error('abstract') is-invalid @enderror" cols="30" rows="10"></textarea>
                                @error('abstract')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group @error('tags') is-invalid @enderror">
                                <label>Tags / Keywords</label>
                                <input type="text" class="form-control @error('tags') is-invalid @enderror" name="tags" placeholder="{{ __('Enter tags /keywords') }}" value="{{ old('tags') }}">
                                @error('tags')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group @error('uploadFile') is-invalid @enderror">
                                <label>Upload Your Manuscript<span class="required-label">*</span></label>
                                <input type="file" class="form-control-file @error('uploadFile') is-invalid @enderror" name="uploadFile" id="upload-file">
                                    @error('uploadFile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <button type="submit" class="btn mag-btn mt-30"><i class="fa fa-cloud-upload"></i> {{ __('Upload your manuscript') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Article Submit Area End ##### -->
