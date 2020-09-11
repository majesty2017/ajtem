<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Profile</h4>
                        <p class="card-category">Complete your profile</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('manuscript.add', $manuscript->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <select class="form-control bg-dark" name="reviewer">
                                    <option class="text-center">Select Reviewer</option>
                                    @foreach($reviewers as $reviewer)
                                    <option value="{{ $reviewer->id }}">{{ $reviewer->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="file" name="manuscript" value="{{ $manuscript->upload_files }}" style="display: none">
                            <button type="submit" class="btn btn-primary pull-right">Send Manuscript</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="{{ asset('uploads/manuscripts/default/' . $manuscript->upload_image) }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category"></h6>
                        <h4 class="card-title">{{ $manuscript->author }}</h4>
                        <p class="card-description">
                            {{ $manuscript->title }}
                        </p>
                        <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
