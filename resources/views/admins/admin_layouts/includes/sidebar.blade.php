<ul class="sidebar navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.categories') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Categories</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.articles') }}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>Articles</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.authors') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Authors</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('slider.index') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>Sliders</span></a>
    </li>
</ul>
