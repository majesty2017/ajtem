<header class="header-area">

    <!-- Navbar Area -->
    <div class="mag-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="magNav">

                <!-- Nav brand -->
                @if(Auth::check())
                <a href="{{ route('home') }}" class="nav-brand"><img src="{{ asset('assets/img/core-img/logo.jpeg') }}" alt=""></a>
                @else
                    <a href="{{ route('welcome') }}" class="nav-brand"><img src="{{ asset('assets/img/core-img/logo.jpeg') }}" alt=""></a>
                @endif
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Nav Content -->
                <div class="nav-content d-flex align-items-center">
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                @if(Auth::check())
                                    <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('aboutus') }}">About</a></li>
                                    <li><a href="{{ route('user.login') }}">Submit Article</a>
                                        <ul class="dropdown">
                                            @if(Auth::check())
                                                <li><a href="">Premium</a></li>
                                                <li><a href="{{ route('logout') }}">Logout</a></li>
                                                <li><a href="{{ route('aboutus') }}">About</a></li>
                                            @else
                                                <li><a href="">Premium</a></li>
                                                <li><a href="{{ route('user.login') }}">Login</a></li>
                                                <li><a href="{{ route('aboutus') }}">About</a></li>
                                            @endif
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('authorguideline') }}">Author Guidelines</a></li>
                                    <li><a href="{{ route('welcome') }}">Editorial Board</a></li>
{{--                                    <li><a href="{{ route('submit.article') }}">Submit Article</a></li>--}}
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                @else
                                    <li class="active"><a href="{{ route('welcome') }}">Home</a></li>
                                    <li><a href="{{ route('user.login') }}">Submit Article</a>
                                        <ul class="dropdown">
                                            @if(Auth::check())
                                                <li><a href="">Premium</a></li>
                                                <li><a href="{{ route('logout') }}">Logout</a></li>
                                                <li><a href="{{ route('aboutus') }}">About</a></li>
                                            @else
                                                <li><a href="">Premium</a></li>
                                                <li><a href="{{ route('user.login') }}">Login</a></li>
                                                <li><a href="{{ route('aboutus') }}">About</a></li>
                                            @endif
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('authorguideline') }}">Author Guidelines</a></li>
                                    <li><a href="{{ route('welcome') }}">Editorial Board</a></li>
{{--                                    <li><a href="{{ route('submit.article') }}">Submit Article</a></li>--}}
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                @endif
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                    <div class="top-meta-data d-flex align-items-center">
                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form action="{{ route('article.search') }}" method="get">
                                <input type="search" name="query" id="topSearch" placeholder="Search and hit enter...">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!-- Login -->
                        @if(Auth::check())
{{--                            <a href="{{ route('user.login') }}" class="login-btn"><i class="fa fa-shopping-cart" aria-hidden="true"> Premium</i></a>--}}
                            <a href="{{ route('user.logout') }}" class="login-btn" title="Logout"><i class="fa fa-lock" aria-hidden="true"></i></a>
                        @else
                            <a href="{{ route('user.login') }}" class="login-btn" title="Login"><i class="fa fa-user" aria-hidden="true"></i></a>
                        @endif
                        <!-- Submit Video -->
{{--                        @if(Auth::check())--}}
{{--                            <a href="{{ route('submit.article') }}" class="submit-video">--}}
{{--                                <span>--}}
{{--                                    <i class="fa fa-cloud-upload"></i>--}}
{{--                                </span>--}}
{{--                                <span class="video-text"><i class="fa fa-plus-circle"> {{ __(' Article') }}</i></span>--}}
{{--                            </a>--}}
{{--                        @endif--}}
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
