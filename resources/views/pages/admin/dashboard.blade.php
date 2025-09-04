<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="container">
            <div class="row g-4">
                <!-- Blogs -->
                <div class="col-sm-6 col-lg-3">
                    <a href="{{ route('blogs.index')}}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-journal-text text-primary fs-2 me-3"></i>
                                <div>
                                    <h6 class="text-muted mb-0">Blogs</h6>
                                    <h4 class="fw-bold text-dark mb-0">{{ $blogsCount ?? 0 }}</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Team -->
                <div class="col-sm-6 col-lg-3">
                    <a href="{{route('team.index') }}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-people text-success fs-2 me-3"></i>
                                <div>
                                    <h6 class="text-muted mb-0">Team</h6>
                                    <h4 class="fw-bold text-dark mb-0">{{ $teamCount ?? 0 }}</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Customers -->
                <div class="col-sm-6 col-lg-3">
                    <a href="{{ route('customers.index')}}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-building text-warning fs-2 me-3"></i>
                                <div>
                                    <h6 class="text-muted mb-0">Customers</h6>
                                    <h4 class="fw-bold text-dark mb-0">{{ $customersCount ?? 0 }}</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Industries -->
                <div class="col-sm-6 col-lg-3">
                    <a href="{{ route('industries.index')}}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-globe2 text-info fs-2 me-3"></i>
                                <div>
                                    <h6 class="text-muted mb-0">Industries</h6>
                                    <h4 class="fw-bold text-dark mb-0">{{ $industriesCount ?? 0 }}</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Careers -->
                <div class="col-sm-6 col-lg-3">
                    <a href="{{ route('careers.index')}}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-briefcase text-info fs-2 me-3"></i>
                                <div>
                                    <h6 class="text-muted mb-0">Careers</h6>
                                    <h4 class="fw-bold text-dark mb-0">{{ $careersCount ?? 0 }}</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Users -->
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-person-gear text-danger fs-2 me-3"></i>
                                <div>
                                    <h6 class="text-muted mb-0">Users</h6>
                                    <h4 class="fw-bold text-dark mb-0">{{ $usersCount ?? 0 }}</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Future modules -->
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card shadow-sm border-0 h-100 hover-card">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-plus-circle text-secondary fs-2 me-3"></i>
                                <div>
                                    <h6 class="text-muted mb-0">More</h6>
                                    <h4 class="fw-bold text-dark mb-0">Coming Soon</h4>
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
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }
    </style>
</x-app-layout>
