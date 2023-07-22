<aside class="left-sidebar">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="/" class="text-nowrap logo-img">
            <img src="{{ asset('assets/admin/images/logos/logo-blue-dark.png') }}" width="200" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
        </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item {{ request()->is('/') ? 'selected' : '' }}">
                <a class="sidebar-link {{ request()->is('/') ? 'active' : '' }}" href="/" aria-expanded="false">
                    <span>
                    <i class="ti ti-layout-dashboard"></i>
                    </span>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li>
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">DATA MASTER</span>
            </li>
            <li class="sidebar-item {{ request()->is('user', 'user/*') ? 'selected' : '' }}">
                <a class="sidebar-link {{ request()->is('user', 'user/*') ? 'active' : '' }}" href="/user" aria-expanded="false">
                    <span>
                    <i class="ti ti-users"></i>
                    </span>
                    <span class="hide-menu">Users</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->is('city', 'city/*') ? 'selected' : '' }}">
            <a class="sidebar-link {{ request()->is('city', 'city/*') ? 'active' : '' }}" href="/city" aria-expanded="false">
                <span>
                <i class="ti ti-rocket"></i>
                </span>
                <span class="hide-menu">City</span>
            </a>
            </li>
            <li class="sidebar-item {{ request()->is('country', 'country/*') ? 'selected' : '' }}">
            <a class="sidebar-link {{ request()->is('country', 'country/*') ? 'active' : '' }}" href="/country" aria-expanded="false">
                <span>
                <i class="ti ti-map"></i>
                </span>
                <span class="hide-menu">Country</span>
            </a>
            </li>
            <li class="sidebar-item {{ request()->is('deal', 'deal/*') ? 'selected' : '' }}">
                <a class="sidebar-link {{ request()->is('deal', 'deal/*') ? 'active' : '' }}" href="/deal" aria-expanded="false">
                    <span>
                    <i class="ti ti-article"></i>
                    </span>
                    <span class="hide-menu">Deal</span>
                </a>
            </li>


            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">REPORTING</span>
            </li>
            <li class="sidebar-item {{ request()->is('reporting/reservation', 'reporting/reservation/*') ? 'selected' : '' }}">
                <a class="sidebar-link {{ request()->is('reporting/reservation', 'reporting/reservation/*') ? 'active' : '' }}" href="/reporting/reservation" aria-expanded="false">
                    <span>
                    <i class="ti ti-file-description"></i>
                    </span>
                    <span class="hide-menu">Reservation</span>
                </a>
            </li>
        </ul>
        </nav>
    </div>
</aside>