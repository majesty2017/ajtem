@include('layouts.includes.slider')
<!-- ##### Mag Posts Area Start ##### -->
<section class="mag-posts-area d-flex flex-wrap">

    <!-- >>>>>>>>>>>>>>>>>>>>
     Post Left Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
        <!-- Sidebar Widget -->
        @if(Auth::user()->role == 1)
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Your Article Under Review</h5>
            </div>
                @foreach($articles as $key => $article)
                    @if($article->is_published == 0)
                    <!-- Single Blog Post -->
                    <div class="single-blog-post d-flex">
                        <div class="post-thumbnail">
                            <img src="{{ URL::to('assets/img/bg-img/4.jpg') }}" alt="">
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">{{ $article->admin->name ?? $article->author->name }}</a>
                            <a href="#" class="post-title">{{ $article->title }}</a>
                            <div class="post-meta d-flex justify-content-between">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    <p class="alert alert-info">Your article is not under review yet.</p>
                @endforeach
        </div>
    @endif

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget">
            <a href="#" class="add-img"><img src="{{ URL::to('assets/img/bg-img/add.png') }}" alt=""></a>
        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Latest Articles</h5>
            </div>
                @foreach($published_articles as $key => $published)
                    @if($published->is_published == 1)
                    <!-- Single Blog Post -->
                    <div class="single-blog-post d-flex">
                        <div class="post-thumbnail">
                            <a href="{{ route('article.view', [$published->id]) }}">
                                <img src="{{ asset('uploads/articles/covers/' . $published->upload_image) }}" alt="Uploaded Files">
                            </a>
                        </div>
                        <div class="post-content">
                            <a href="{{ route('article.view', [$published->id]) }}" class="post-title">{{ $published->title }}</a>
                            <div class="post-meta d-flex justify-content-between">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                            </div>
                        </div>
                    </div>
                        @else
                        <p class="alert alert-info">No latest article yet</p>
                    @endif
                @endforeach
        </div>
    </div>

    <!-- >>>>>>>>>>>>>>>>>>>>
         Main Posts Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
        <!-- Trending Now Posts Area -->
        <div class="trending-now-posts mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>TOP TRENDING ARTICLES NOW</h5>
            </div>

            <div class="trending-post-slides owl-carousel">
            @foreach($published_articles as $key => $article)
                <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <a href="{{ route('article.view', [$article->id]) }}">
                            <img src="{{ asset('uploads/articles/covers/' . $article->upload_image) }}" style="width: 100%; height: 380px">
                        </a>
                        <div class="post-content">
                            <a href="{{ route('article.view', [$article->id]) }}" class="post-cata text-center">{{ $article->title }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Feature Video Posts Area -->
        <div class="feature-video-posts mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Featured Article</h5>
            </div>

            @foreach($specials as $special)
                <div class="featured-video-posts">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <!-- Single Featured Post -->
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50">
                                    <img src="{{ asset('uploads/articles/covers/' . $special->upload_image) }}" alt="">
                                    <a href="{{ route('article.view', [$special->id]) }}" class="video-play"><i class="fa fa-phone"></i></a>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">{{ $special->created_at->format('M d, Y') }}</a>
                                        <a href="#">{{ $special->category->name ?? '' }}</a>
                                    </div>
                                    <a href="#" class="post-title">{{ $special->title }}</a>
                                    <p>{{ Str::limit($special->abstract, 500) }}</p>
                                    <a class="btn btn-danger" href="{{ route('article.view', [$special->id]) }}">Read More...</a>
                                </div>
                                <!-- Post Share Area -->
                                <div class="post-share-area d-flex align-items-center justify-content-between">
                                    <!-- Post Meta -->
                                    <div class="post-meta pl-3">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                    <!-- Share Info -->
                                    <div class="share-info">
                                        <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                        <!-- All Share Buttons -->
                                        <div class="all-share-btn d-flex">
                                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
                            <!-- Featured Video Posts Slide -->
                            <div class="featured-video-posts-slide owl-carousel">
                                @foreach($published_articles as $value)
                                    <div class="single--slide">
                                    @foreach($published_articles as $key => $article)
                                        <!-- Single Blog Post -->
                                            <div class="single-blog-post d-flex style-3">
                                                <div class="post-thumbnail">
                                                    <a href="{{ route('article.view', [$article->id]) }}">
                                                        <img src="{{ asset('uploads/articles/covers/' . $article->upload_image) }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content">
                                                    <a href="{{ route('article.view', [$article->id]) }}" class="post-title">{{ $article->title }}</a>
                                                    <div class="post-meta d-flex">
                                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Most Viewed Videos -->
        <div class="most-viewed-videos mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Most Viewed Articles</h5>
            </div>

            <div class="most-viewed-videos-slide owl-carousel">

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="{{ URL::to('assets/img/bg-img/28.jpg') }}" alt="">
                        <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">A Guide To Rocky Mountain Vacations</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="{{ URL::to('assets/img/bg-img/29.jpg') }}" alt="">
                        <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">Dentists Are Smiling Over Painless Veneer Alternative</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="{{ URL::to('assets/img/bg-img/30.jpg') }}" alt="">
                        <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">Become A Travel Pro In One Easy Lesson</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="{{ URL::to('assets/img/bg-img/28.jpg') }}" alt="">
                        <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">A Guide To Rocky Mountain Vacations</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="{{ URL::to('assets/img/bg-img/29.jpg') }}" alt="">
                        <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">Dentists Are Smiling Over Painless Veneer Alternative</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="{{ URL::to('assets/img/bg-img/30.jpg') }}" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">Become A Travel Pro In One Easy Lesson</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Sports Videos -->
        <div class="sports-videos-area">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Sports Articles</h5>
            </div>

            <div class="sports-videos-slides owl-carousel mb-30">
                <!-- Single Featured Post -->
                <div class="single-featured-post">
                    <!-- Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <img src="{{ URL::to('assets/img/bg-img/22.jpg') }}" alt="">
                        <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                    </div>
                    <!-- Post Contetnt -->
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#">MAY 8, 2018</a>
                            <a href="archive.html">lifestyle</a>
                        </div>
                        <a href="video-post.html" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                    </div>
                    <!-- Post Share Area -->
                    <div class="post-share-area d-flex align-items-center justify-content-between">
                        <!-- Post Meta -->
                        <div class="post-meta pl-3">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                        <!-- Share Info -->
                        <div class="share-info">
                            <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            <!-- All Share Buttons -->
                            <div class="all-share-btn d-flex">
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Post -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-post d-flex style-3 mb-30">
                        <div class="post-thumbnail">
                            <img src="{{ URL::to('assets/img/bg-img/31.jpg') }}" alt="">
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-post d-flex style-3 mb-30">
                        <div class="post-thumbnail">
                            <img src="{{ URL::to('assets/img/bg-img/32.jpg') }}" alt="">
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-post d-flex style-3 mb-30">
                        <div class="post-thumbnail">
                            <img src="{{ URL::to('assets/img/bg-img/33.jpg') }}" alt="">
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-post d-flex style-3 mb-30">
                        <div class="post-thumbnail">
                            <img src="{{ URL::to('assets/img/bg-img/34.jpg') }}" alt="">
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
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
    </div>

    <!-- >>>>>>>>>>>>>>>>>>>>
     Post Right Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
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
                <p>Subscribe our newsletter to get notification about new updates, information discount, etc.</p>
                <form action="#" method="get">
                    <input type="search" name="widget-search" placeholder="Enter your email">
                    <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                </form>
            </div>

        </div>
    </div>
</section>
