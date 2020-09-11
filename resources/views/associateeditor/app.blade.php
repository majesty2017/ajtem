@include('associateeditor.layouts.includes.header')
<div class="wrapper ">
    @include('associateeditor.layouts.includes.sidebar')
    <div class="main-panel">
        <!-- Navbar -->
    @include('associateeditor.layouts.includes.navbar')
        <!-- End Navbar -->
        <div class="content">
            @yield('content')
        </div>

@include('associateeditor.layouts.includes.footer')
