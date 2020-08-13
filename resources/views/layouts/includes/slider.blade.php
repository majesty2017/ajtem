@if($sliders)
<div class="hero-area owl-carousel">
    @foreach($sliders as $key => $slider)
        <div class="hero-blog-post bg-img bg-overlay"
             style="background-image: url({{ asset('uploads/articles/slider/' . $slider->image) }}); width: 1920px; height: 280px">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">{{ $slider->article->created_at->format('M d, Y') ?? '' }}</a>
                                <a href="">{{ $slider->article->category->name ?? '' }}</a>
                            </div>
                            <a href="" class="post-title" data-animation="fadeInUp" data-delay="300ms">{{ $slider->article->title }}</a>
                            <a href="" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-readme"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endif

<div class="hero-area owl-carousel">
    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url({{ URL::to('assets/img/bg-img/1.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                            <a href="#">MAY 8, 2018</a>
                            <a href="">lifestyle</a>
                        </div>
                        <a href="" class="post-title" data-animation="fadeInUp" data-delay="300ms">African Journal For Technical Education & Management</a>
                        <a href="" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url({{ URL::to('assets/img/bg-img/2.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                            <a href="#">MAY 8, 2018</a>
                            <a href="">Science</a>
                        </div>
                        <a href="" class="post-title" data-animation="fadeInUp" data-delay="300ms">African Journal For Technical  Education & Management</a>
                        <a href="" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url({{ URL::to('assets/img/bg-img/3.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                            <a href="#">MAY 8, 2018</a>
                            <a href="">Education</a>
                        </div>
                        <a href="" class="post-title" data-animation="fadeInUp" data-delay="300ms">African Journal For Technical  Education & Management</a>
                        <a href="" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Hero Area End ##### -->
