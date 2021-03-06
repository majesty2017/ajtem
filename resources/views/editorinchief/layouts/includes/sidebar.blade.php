<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('editorialboard/img/sidebar-2.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="{{ route('editorinchief.dashboard') }}" class="simple-text logo-normal">
           Welcome, {{ Auth::user()->name }}
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{ route('editorinchief.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('editorinchief.manuscript') }}">
                    <i class="material-icons">person</i>
                    <p>Manuscripts</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('manuscript.underreview') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Manuscript Under Review</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('manuscript.completed') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Reviewed Manuscript</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="">
                    <i class="material-icons">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>
            <!-- <li class="nav-item active-pro ">
                  <a class="nav-link" href="./upgrade.html">
                      <i class="material-icons">unarchive</i>
                      <p>Upgrade to PRO</p>
                  </a>
              </li> -->
        </ul>
    </div>
</div>
