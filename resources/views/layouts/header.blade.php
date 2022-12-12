<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="" class="nav-link">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item dropdown">
            <a href="{{url('/logout')}}"><ion-icon size="large" name="log-out-outline"></ion-icon></a>
        </li>
        <!-- Notifications Dropdown Menu -->
    </ul>
</nav>
