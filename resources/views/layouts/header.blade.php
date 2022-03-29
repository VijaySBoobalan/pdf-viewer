<nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('img/user-160x160.png') . '?v=' . config('app.versionnumber') }}" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">{{ucfirst(Auth::user()->name)}}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <li class="user-header bg-primary">
                    <img src="{{ asset('img/user-160x160.png') . '?v=' . config('app.versionnumber') }}" class="img-circle elevation-2" alt="User Image">
                    <p>
                        {{ucfirst(Auth::user()->name)}}
                        <small>Member since {{ Auth::user()->created_at->format(config('app.defaultdateformatphp')) }}</small>
                    </p>
                </li>
                <li class="user-footer">
                    <a href="#" class="btn btn-default btn-flat">Change Password</a>
                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>