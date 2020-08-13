<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url({{ asset('uploads/articles/covers/' . $article->upload_image) }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>{{ $article->title }}</h2>
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
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Features</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Article</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Post Details Area Start ##### -->
<section class="post-details-area">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-xl-8">
                <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                    <div class="blog-thumb mb-30">
                        <img src="{{ asset('uploads/articles/covers/' . $article->upload_image) }}"
                             style="width: 1200px; height: 721px">
                    </div>
                    <div class="blog-content">
                        <div class="post-meta">
                            <a href="#">{{ $article->created_at->format('M d, Y') }}</a>
                            <a href="#">{{ $article->category->name ?? '' }}</a>
                            <p>{{ $article->pages }} Pages | {{ $article->year }}</p>
                        </div>
                        <p>By: <a style="color: #ed3974" href="#">{{ $article->author }}</a></p>
                        <h4 class="post-title">{{ $article->title }}</h4>
                        <!-- Post Meta -->
                        <div class="post-meta-2">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>

                        <h4>Abstract</h4>
                        <p>{{ $article->abstract }}..</p>

                        <div class="like-dislike-share my-5">
                            <a href="#" class="facebook"><i class="fa fa-archive" aria-hidden="true"></i> Read More...</a>
                        </div>

                        <!-- Post Author -->
                        <div class="post-author d-flex align-items-center">
                            <div class="post-author-thumb">
                                <img src="{{ URL::to('assets/img/bg-img/52.jpg') }}" alt="">
                            </div>
                            <div class="post-author-desc pl-4">
                                <a href="#" class="author-name">{{ $article->author ?? '' }}</a>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Related Post Area -->
                <div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Related Post</h5>
                    </div>

                    <div class="row">
                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post style-4 mb-30">
                                <div class="post-thumbnail">
                                    <img src="{{ URL::to('assets/img/bg-img/29.jpg') }}" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Dentists Are Smiling Over Painless Veneer</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post style-4 mb-30">
                                <div class="post-thumbnail">
                                    <img src="{{ URL::to('assets/img/bg-img/30.jpg') }}" alt="">
                                    <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                                    <span class="video-duration">09:27</span>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Will The Democrats Be Able To Reverse</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post style-4 mb-30">
                                <div class="post-thumbnail">
                                    <img src="{{ URL::to('assets/img/bg-img/28.jpg') }}" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Comment Area Start -->
                <div class="comment_area clearfix bg-white mb-30 p-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>COMMENTS</h5>
                    </div>

                    <ol>
                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img src="{{ URL::to('assets/img/bg-img/53.jpg') }}" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <a href="#" class="comment-date">27 Aug 2019</a>
                                    <h6>Tomas Mandy</h6>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="like">like</a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                            </div>

                            <ol class="children">
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="{{ URL::to('assets/img/bg-img/54.jpg') }}" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="comment-date">27 Aug 2019</a>
                                            <h6>Britney Millner</h6>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="like">like</a>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </li>

                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img src="{{ URL::to('assets/img/bg-img/55.jpg') }}" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <a href="#" class="comment-date">27 Aug 2019</a>
                                    <h6>Simon Downey</h6>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="like">like</a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>

                <!-- Post A Comment Area -->
                <div class="post-a-comment-area bg-white mb-30 p-30 box-shadow clearfix">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>LEAVE A REPLY</h5>
                    </div>

                    <!-- Reply Form -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name*" required>
                                </div>
                                <div class="col-12 col-lg-6">
                                    @if(Auth::check())
                                    <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email ?? '' }}" readonly>
                                    @else
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*">
                                    @endif
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message*" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn mag-btn mt-30" type="submit">Submit Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Sidebar Widget -->
            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="sidebar-area bg-white mb-30 box-shadow">
                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Social Followers Info -->
                        <div class="social-followers-info">
                            <!-- Facebook -->
                            <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
                            <!-- Twitter -->
                            <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>Followers</span></a>
                            <!-- YouTube -->
                            <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span>Subscribers</span></a>
                            <!-- Google -->
                            <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>Followers</span></a>
                        </div>
                    </div>

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Categories</h5>
                        </div>

                        <!-- Catagory Widget -->
                        <ul class="catagory-widgets">
                            @foreach($categories as $key =>$category)
                                @if($category->name)
                                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $category->name }}</span> <span></span></a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget">
                        <a href="#" class="add-img"><img src="{{ URL::to('assets/img/bg-img/add2.png') }}" alt=""></a>
                    </div>

                    <!-- Sidebar Widget -->
                    @include('layouts.includes.sidebar-widget')

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Newsletter</h5>
                        </div>

                        <div class="newsletter-form">
                            <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                            <form action="#" method="get">
                                <input type="search" name="widget-search" placeholder="Enter your email">
                                <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Post Details Area End ##### -->
