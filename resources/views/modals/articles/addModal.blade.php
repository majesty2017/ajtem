<!-- Modal -->
<div class="modal fade" id="addArticlesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.articles.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>{{ __('Research Paper Area') }}</label>

                        <select class="form-control @error('category_name') is-invalid @enderror" name="category_name">
                            <option>Others [All Other Research Areas]</option>
                            @foreach($categories as $key => $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                            @error('category_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Research/Case Study/Survey/Ex Version Paper Title') }}</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="{{ __('Enter Research/Case Study/Survey/Ex Version Paper Title') }}" value="{{ old('title') }}">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Email') }}</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __('Enter Email') }}" {{ old('email') }}>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Year') }}</label>
                        <input type="text" class="form-control @error('year') is-invalid @enderror" name="year" placeholder="{{ __('Enter Year') }}" {{ old('year') }}>
                        @error('year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Pages') }}</label>
                        <input type="text" class="form-control @error('pages') is-invalid @enderror" name="pages" placeholder="{{ __('Enter Pages') }}" {{ old('pages') }}>
                        @error('pages')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Volume') }}</label>
                        <input type="text" class="form-control @error('volume') is-invalid @enderror" name="volume" placeholder="{{ __('Enter Volume') }}" {{ old('volume') }}>
                        @error('volume')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Abstract') }}</label>
                        <textarea type="text" class="form-control @error('abstract') is-invalid @enderror" name="abstract" placeholder="{{ __('Enter Abstract') }}" {{ old('abstract') }} rows="2"></textarea>
                        @error('abstract')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Tags / Keywords (Optional)') }}</label>
                        <input type="text" class="form-control @error('tags') is-invalid @enderror" name="tags" placeholder="{{ __('Enter Tags (Optional)') }}" {{ old('tags') }}>
                        @error('tags')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Author(s)') }}</label>
                        <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" placeholder="{{ __('Enter Author (s)') }}" {{ old('author') }}>
                        @error('author')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Upload Cover Image') }}</label>
                        <input type="file" class="form-control @error('uploadImage') is-invalid @enderror" name="uploadImage">
                        @error('uploadImage')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Upload File') }}</label>
                        <input type="file" class="form-control @error('uploadFile') is-invalid @enderror" name="uploadFile">
                        @error('uploadFile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
