<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Overview') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="container-fluid px-4">
            <div class="row g-4">
                
                <!-- Blogs -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <a href="{{ route('blogs.index')}}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center p-4">
                                <div class="icon-box box-primary me-3">
                                    <i class="bi bi-journal-text fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1 text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Blogs</h6>
                                    <h3 class="fw-bolder text-dark mb-0">{{ $blogsCount ?? 0 }}</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Team -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <a href="{{route('team.index') }}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center p-4">
                                <div class="icon-box box-success me-3">
                                    <i class="bi bi-people fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1 text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Team Members</h6>
                                    <h3 class="fw-bolder text-dark mb-0">{{ $teamCount ?? 0 }}</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Customers -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <a href="{{ route('customers.index')}}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center p-4">
                                <div class="icon-box box-warning me-3">
                                    <i class="bi bi-building fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1 text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Customers</h6>
                                    <h3 class="fw-bolder text-dark mb-0">{{ $customersCount ?? 0 }}</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Services -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <a href="{{ route('services.index')}}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center p-4">
                                <div class="icon-box box-primary-alt me-3">
                                    <i class="bi bi-gear fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1 text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Services</h6>
                                    <h3 class="fw-bolder text-dark mb-0">{{ $servicesCount ?? 0 }}</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Industries -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <a href="{{ route('industries.index')}}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center p-4">
                                <div class="icon-box box-info me-3">
                                    <i class="bi bi-globe2 fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1 text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Industries</h6>
                                    <h3 class="fw-bolder text-dark mb-0">{{ $industriesCount ?? 0 }}</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Careers -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <a href="{{ route('careers.index')}}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center p-4">
                                <div class="icon-box box-purple me-3">
                                    <i class="bi bi-person-workspace fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1 text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Careers</h6>
                                    <h3 class="fw-bolder text-dark mb-0">{{ $careersCount ?? 0 }}</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                @if(auth()->check() && auth()->user()->role === 'superadmin')
                <!-- Users -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <a href="{{ route('users.index')}}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center p-4">
                                <div class="icon-box box-danger me-3">
                                    <i class="bi bi-person-gear fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1 text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">System Users</h6>
                                    <h3 class="fw-bolder text-dark mb-0">{{ $usersCount ?? 0 }}</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endif 

                <!-- Portfolio -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <a href="{{ route('portfolios.index')}}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center p-4">
                                <div class="icon-box box-primary me-3">
                                    <i class="bi bi-briefcase fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1 text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Portfolios</h6>
                                    <h3 class="fw-bolder text-dark mb-0">{{ $portfolioCount ?? 0 }}</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Contacts -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <a href="{{ route('contacts.index')}}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center p-4">
                                <div class="icon-box box-pink me-3">
                                    <i class="bi bi-envelope fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1 text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Contacts</h6>
                                    <h3 class="fw-bolder text-dark mb-0">{{ $contactsCount ?? 0 }}</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <!-- SEO Requests -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <a href="{{ route('seo-requests.index')}}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center p-4">
                                <div class="icon-box box-success-alt me-3">
                                    <i class="bi bi-search fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1 text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">SEO Requests</h6>
                                    <h3 class="fw-bolder text-dark mb-0">{{ $seoRequestsCount ?? 0 }}</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Future modules -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card bg-light">
                            <div class="card-body d-flex align-items-center p-4 opacity-75">
                                <div class="icon-box box-secondary me-3">
                                    <i class="bi bi-plus-circle fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1 text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">More Features</h6>
                                    <h5 class="fw-bolder text-secondary mb-0">Coming Soon</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Custom CSS -->
    <style>
        .hover-card {
            border-radius: 14px;
            transition: all 0.3s ease;
            background: #fff;
            border: 1px solid rgba(0,0,0,0.04) !important;
        }
        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.08) !important;
            border-color: rgba(13, 110, 253, 0.15) !important;
        }
        
        .icon-box {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Modern Premium Colors */
        .box-primary { background: rgba(13, 110, 253, 0.1); color: #0d6efd; }
        .box-success { background: rgba(25, 135, 84, 0.1); color: #198754; }
        .box-warning { background: rgba(253, 126, 20, 0.1); color: #fd7e14; }
        .box-primary-alt { background: rgba(102, 16, 242, 0.1); color: #6610f2; }
        .box-info { background: rgba(13, 202, 240, 0.1); color: #0dcaf0; }
        .box-purple { background: rgba(111, 66, 193, 0.1); color: #6f42c1; }
        .box-danger { background: rgba(220, 53, 69, 0.1); color: #dc3545; }
        .box-pink { background: rgba(214, 51, 132, 0.1); color: #d63384; }
        .box-success-alt { background: rgba(32, 201, 151, 0.1); color: #20c997; }
        .box-secondary { background: rgba(108, 117, 125, 0.1); color: #6c757d; }
    </style>
</x-app-layout>
