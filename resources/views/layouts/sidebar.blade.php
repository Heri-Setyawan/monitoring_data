<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <p href="{{route('home')}}" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="PT KPA" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PT KPA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('employee')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Daftar Staff
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('report.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>
                            Report
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- Sidebar Menu -->

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
