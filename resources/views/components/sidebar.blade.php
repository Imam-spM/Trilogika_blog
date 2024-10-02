<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
        <img src="{{ asset('image/logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8; width: 40px; height: 40px;">
        <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <!-- Jumbotron -->
                <li class="nav-item">
                    <a href="{{ route('jumbotron.index') }}" class="nav-link {{ request()->is('jumbotron*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Jumbotron
                        </p>
                    </a>
                </li>

                <!-- Buat Artikel -->
                <li class="nav-item">
                    <a href="{{ route('artikel.index') }}" class="nav-link {{ request()->is('artikel*') ? 'active' : '' }}">
                        <i class="far fa-newspaper nav-icon"></i>
                        <p>Buat Artikel</p>
                    </a>
                </li>

                <!-- Alumni -->
                <li class="nav-item">
                    <a href="{{ route('alumni.index') }}" class="nav-link {{ request()->is('alumni*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Alumni
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Style enhancements for a more modern look -->
<style>
    /* Logo */
    .brand-link {
        background-color: #343a40;
        color: #ffffff;
        padding: 1rem;
    }

    /* Sidebar Links */
    .nav-link {
        transition: background-color 0.3s, color 0.3s;
    }

    /* Hover effect for links */
    .nav-link:hover {
        background-color: #007bff;
        color: #ffffff;
    }

    /* Active link */
    .nav-link.active {
        background-color: #007bff;
        color: #ffffff;
    }

    /* Brand logo adjustments */
    .brand-image {
        margin-right: 10px;
    }

    /* Sidebar responsiveness */
    @media (max-width: 768px) {
        .main-sidebar {
            position: fixed;
            width: 100%;
            height: auto;
            z-index: 1000;
        }

        .sidebar {
            width: 100%;
        }
    }
</style>
