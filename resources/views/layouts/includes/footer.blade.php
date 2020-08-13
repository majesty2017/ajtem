<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <!-- Logo -->
                    <a href="#" class="foo-logo"><img src="{{ URL::asset('assets/img/core-img/logo2.png') }}" alt=""></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="footer-social-info">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Categories</h6>
                    <nav class="footer-widget-nav">
                        <ul>
                            @if(Auth::check())
                                @foreach($categories as $key =>$category)
                                    @if($category->name)
                                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $category->name }}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Sport Videos</h6>
                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-2 d-flex">
                        <div class="post-thumbnail">
                            <img src="{{ URL::asset('assets/img/bg-img/12.jpg') }}" alt="">
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Take A Romantic Break In A Boutique Hotel</a>
                            <div class="post-meta d-flex justify-content-between">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-2 d-flex">
                        <div class="post-thumbnail">
                            <img src="{{ URL::asset('assets/img/bg-img/13.jpg') }}" alt="">
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Travel Prudently Luggage And Carry On</a>
                            <div class="post-meta d-flex justify-content-between">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Tags</h6>
                    <ul class="footer-tags">
                        @if(Auth::check())
                            @foreach($articles as $key => $article)
                                @if($article->tags)
                                    <li><a href="#">{{ $article->tags }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class="copywrite-area">
        <div class="container">
            <div class="row">
                <!-- Copywrite Text -->
                <div class="col-12 col-sm-6">
                    <p class="copywrite-text">
                        {{ __('Copyright ') }} &copy; {{ __(' Ajtem 2019') }} - {{ date('Y') }}{{ __('. All rights reserved | Developed with') }} <i class="fa fa-heart-o" aria-hidden="true">

                        </i> by <a href="https://insightnet.voxgh.com" target="_blank">{{ __('Insight Networks & IT Solutions') }}</a>
                    </p>
                </div>
                <div class="col-12 col-sm-6">
                    <nav class="footer-nav">
                        <ul>
                            @if(Auth::check())
                                <li><a href="{{ route('home') }}">Home</a></li>
                            @else
                                <li><a href="{{ route('welcome') }}">Home</a></li>
                            @endif
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Advertisement</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{ URL::asset('assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ URL::asset('assets/js/bootstrap/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ URL::asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
<!-- All Plugins js -->
<script src="{{ URL::asset('assets/js/plugins/plugins.js') }}"></script>
<!-- Active js -->
<script src="{{ URL::asset('assets/js/active.js') }}"></script>
</body>

</html>
