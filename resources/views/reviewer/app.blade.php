@include('reviewer.layouts.includes.header')
<div class="wrapper ">
    @include('reviewer.layouts.includes.sidebar')
    <div class="main-panel">
        <!-- Navbar -->
    @include('reviewer.layouts.includes.navbar')
        <!-- End Navbar -->
        <div class="content">
            @yield('content')
        </div>

@include('reviewer.layouts.includes.footer')
