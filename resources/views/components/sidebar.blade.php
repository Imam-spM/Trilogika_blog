<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
        <img src="{{ asset('image/logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8; max-width: 100%; height: auto;">
        <span class="brand-text font-weight-light">Trilogika Edutama</span>
    </a>


    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/jumbotron" class="nav-link {{ request()->is('jumbotron') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>Jumbotron</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/alumni" class="nav-link {{ request()->is('alumni') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Alumni</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/artikel" class="nav-link {{ request()->is('artikel') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Artikel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/statistik" class="nav-link {{ request()->is('statistik') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Statistik</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
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
