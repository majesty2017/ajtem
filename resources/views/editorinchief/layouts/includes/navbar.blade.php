<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <button type="submit" class="btn btn-default btn-round btn-just-icon">
                        <i class="material-icons">search</i>
                        <div class="ripple-container"></div>
                    </button>
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">
                        <i class="material-icons">dashboard</i>
                        <p class="d-lg-none d-md-block">
                            Stats
                        </p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">notifications</i>
                        @if($manuscriptReceivedCount)
                            <span class="notification">{{ $manuscriptReceivedCount }}</span>
                        @endif
                        <p class="d-lg-none d-md-block">
                            Some Actions
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        @if($manuscriptReceivedFromReviewer)
                        @foreach($manuscriptReceivedFromReviewer as $value)
                            <a class="dropdown-item" href="{{ route('manuscript.notication', [$value->id]) }}">
                                <img src="{{ asset('uploads/manuscripts/default/default.jpg') }}" style="width: 40px; height: 40px; margin: 8px"> New manuscript received.</a>
                        @endforeach
                        @else
                            <p class="text-info">No new notification.</p>
                        @endif
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person</i>
                        <p class="d-lg-none d-md-block">
                            Account
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="javascript:void(0)">{{ Auth::user()->name ?? '' }}</a>
                        <a class="dropdown-item" href="javascript:void(0)">Member Since - {{ Auth::user()->created_at->format('M d, Y') ?? '' }}</a>
                        <a class="dropdown-item" href="{{ route('editorinchief.logout') }}">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
