<style>
    .admin-sidebar {
        width: 260px;
        min-width: 260px;
        max-width: 260px;
        height: 100vh;
        background: linear-gradient(135deg, #1166a3 0%, #31a8e8 100%);
        color: #fff;
        position: fixed;
        top: 0;
        left: 0; 
        z-index: 1040;
        transition: transform 0.25s ease-in-out;
        
        /* Smooth vertical internal scroll only if items exceed vertical viewport space */
        overflow-y: auto;
        scrollbar-width: none; /* Hides default scrollbar for Firefox */
    }

    /* Hides default scrollbars for Chrome, Safari, and Opera webkit engines */
    .admin-sidebar::-webkit-scrollbar {
        display: none;
    }

    /* Move sidebar off screen when explicitly deactivated via burger trigger toggle */
    body:not(.sidebar-is-open) .admin-sidebar {
        transform: translateX(-100%);
    }

    .admin-sidebar .nav-link {
        color: rgba(255, 255, 255, 0.85);
        padding: 12px 20px;
        font-weight: 500;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        border-radius: 4px;
        margin: 4px 12px;
    }

    .admin-sidebar .nav-link:hover {
        color: #fff;
        background-color: rgba(255, 255, 255, 0.15);
    }

    .admin-sidebar .nav-link.active {
        color: #fff;
        background-color: rgba(255, 255, 255, 0.25);
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .admin-sidebar .nav-link i {
        font-size: 1.2rem;
        width: 30px;
        text-align: center;
        margin-right: 10px;
    }

    .sidebar-heading {
        padding: 20px 20px 10px;
        font-size: 0.75rem;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.6);
        font-weight: bold;
        letter-spacing: 1px;
    }
</style>

<aside class="admin-sidebar shadow">
    <div class="d-flex align-items-center justify-content-center p-3 border-bottom border-light border-opacity-25 mb-3" style="height: 102px; min-height: 102px;">
        <div class="py-2 text-center w-100">
            <a href="{{ route('dashboard') }}" class="d-inline-block">
                @if(file_exists(public_path('css/new-assets/img/logo/logo.jpeg')))
                    <img src="{{ asset('css/new-assets/img/logo/logo.jpeg')}}" 
                         class="img-fluid" 
                         loading="eager"
                         decoding="async"
                         style="max-height: 70px; width: auto; min-width: 120px; min-height: 70px; object-fit: contain; filter: invert(1) brightness(2); mix-blend-mode: screen;">
                @else
                    <span class="fs-4 fw-bold text-white text-uppercase tracking-wider">
                        {{ config('app.name', 'Admin') }}
                    </span>
                @endif
            </a>
        </div>
    </div>

    <ul class="nav flex-column mb-auto pb-4">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <div class="sidebar-heading">Content Management</div>

        <li class="nav-item">
            <a href="{{ route('blogs.index') }}" class="nav-link {{ request()->routeIs('blogs.*') ? 'active' : '' }}">
                <i class="bi bi-journal-text"></i>
                <span>Blogs</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('services.index') }}" class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}">
                <i class="bi bi-gear"></i>
                <span>Services</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('industries.index') }}" class="nav-link {{ request()->routeIs('industries.*') ? 'active' : '' }}">
                <i class="bi bi-globe2"></i>
                <span>Industries</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('portfolios.index') }}" class="nav-link {{ request()->routeIs('portfolios.*') ? 'active' : '' }}">
                <i class="bi bi-briefcase"></i>
                <span>Portfolios</span>
            </a>
        </li>

        <div class="sidebar-heading">Business Data</div>

        <li class="nav-item">
            <a href="{{ route('customers.index') }}" class="nav-link {{ request()->routeIs('customers.*') ? 'active' : '' }}">
                <i class="bi bi-building"></i>
                <span>Customers</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('contacts.index') }}" class="nav-link {{ request()->routeIs('contacts.*') ? 'active' : '' }}">
                <i class="bi bi-envelope"></i>
                <span>Contacts</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('seo-requests.index') }}" class="nav-link {{ request()->routeIs('seo-requests.*') ? 'active' : '' }}">
                <i class="bi bi-search"></i>
                <span>SEO Requests</span>
            </a>
        </li>

        <div class="sidebar-heading">Company</div>

        <li class="nav-item">
            <a href="{{ route('team.index') }}" class="nav-link {{ request()->routeIs('team.*') ? 'active' : '' }}">
                <i class="bi bi-people"></i>
                <span>Team</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('careers.index') }}" class="nav-link {{ request()->routeIs('careers.*') ? 'active' : '' }}">
                <i class="bi bi-person-workspace"></i>
                <span>Careers</span>
            </a>
        </li>

        @if(auth()->check() && auth()->user()->role === 'superadmin')
            <div class="sidebar-heading">Administration</div>
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
                    <i class="bi bi-person-gear"></i>
                    <span>Users</span>
                </a>
            </li>
        @endif
    </ul>
</aside>

<div x-show="sidebarOpen" 
     @click="sidebarOpen = false" 
     class="position-fixed top-0 start-0 w-100 h-100 bg-dark opacity-50 d-lg-none" 
     style="z-index: 1030;"
     x-transition>
</div>