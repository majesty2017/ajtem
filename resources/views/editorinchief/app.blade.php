@include('editorinchief.layouts.includes.header')
<div class="wrapper ">
    @include('editorinchief.layouts.includes.sidebar')
    <div class="main-panel">
        <!-- Navbar -->
    @include('editorinchief.layouts.includes.navbar')
        <!-- End Navbar -->
        <div class="content">
            @yield('content')
        </div>

@include('editorinchief.layouts.includes.footer')
