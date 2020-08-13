@include('admins.admin_layouts.includes.page_header')

@include('admins.admin_layouts.includes.navbar')

<div id="wrapper">

    <!-- Sidebar -->
    @include('admins.admin_layouts.includes.sidebar')

    <div id="content-wrapper">

        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
       @include('admins.admin_layouts.includes.admin_footer')