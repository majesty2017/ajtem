@include('editorialboard.layouts.includes.header')
<div class="wrapper ">
    @include('editorialboard.layouts.includes.sidebar')
    <div class="main-panel">
        <!-- Navbar -->
    @include('editorialboard.layouts.includes.navbar')
        <!-- End Navbar -->
        <div class="content">
            @yield('content')
        </div>

@include('editorialboard.layouts.includes.footer')
