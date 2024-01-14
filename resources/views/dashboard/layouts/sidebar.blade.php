<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="tema/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ $pp->store_name }}</span>
        {{-- @if ($profilPenjual)
            <span class="brand-text font-weight-light">{{ $profilPenjual->store_name }}</span>
        @else
            <span class="brand-text font-weight-light">MyStyle</span>
        @endif --}}
        {{-- <a href="{{ url('/test') }}">test</a> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="tema/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview {{ Request::is('/') ? 'menu-open' : '' }}">
                    <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>


                <li class="nav-item {{ Request::is('carousel') ? 'menu-open' : '' }}">
                    <a href="{{ url('/carousel') }}" class="nav-link {{ Request::is('carousel') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Carousel
                        </p>
                    </a>
                </li>

                <li class="nav-item {{ Request::is('adminproduct') ? 'menu-open' : '' }}">
                    <a href="{{ url('/adminproduct') }}"
                        class="nav-link {{ Request::is('adminproduct') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Product
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview {{ Request::is('pages/forms*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('pages/forms*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Konfigurasi Website
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/konfigurasiumum') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Konfigurasi Umum</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/konfigurasilogo') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Konfigurasi Logo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/konfigurasiicon') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Konfigurasi Icon</p>
                            </a>
                        </li>
                    </ul>
                </li>

                @can('admin')
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Administrator</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/categories') ? 'active' : '' }}"
                                href="/dashboard/categories">
                                <i class="bi bi-card-list"></i>
                                &nbsp;Post Categories
                            </a>
                        </li>
                    </ul>
                @endcan
            </ul>
        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
