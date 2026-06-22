<x-app-layout>
    <x-slot name="header">
        <x-admin.page-header title="Manage Services" />
    </x-slot>

    <div class="container-fluid py-4" x-data="{ viewMode: localStorage.getItem('adminViewMode') || 'list' }" x-effect="localStorage.setItem('adminViewMode', viewMode)">
        @if(session('success'))
            <div class="alert alert-success border-0 shadow-sm rounded-4 mb-4">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
            </div>
        @endif

        <!-- Toggle Buttons -->
        <div class="d-flex justify-content-end mb-3">
            <div class="btn-group shadow-sm rounded-3">
                <button @click="viewMode = 'list'" class="btn btn-sm border" :class="viewMode === 'list' ? 'btn-primary' : 'btn-light'">
                    <i class="bi bi-list-task me-1"></i> List
                </button>
                <button @click="viewMode = 'grid'" class="btn btn-sm border" :class="viewMode === 'grid' ? 'btn-primary' : 'btn-light'">
                    <i class="bi bi-grid me-1"></i> Grid
                </button>
            </div>
        </div>

        <!-- List View -->
        <div x-show="viewMode === 'list'">
            <x-admin.datatable>
                <x-slot name="header">
                    <th width="100">Image</th>
                    <th>Title</th>
                    <th>Short Description</th>
                    <th width="120" class="text-end">Actions</th>
                </x-slot>

                @forelse($services as $service)
                    <tr>
                        <td>
                            @if($service->image)
                                <img src="{{ asset('storage/' . $service->image) }}" alt="Image" style="width: 50px; height: 50px; object-fit: cover;" class="rounded-3 shadow-sm">
                            @else
                                <img src="{{ asset('images/default-service.png') }}" style="width: 50px; height: 50px; object-fit: cover;" class="rounded-3 shadow-sm">
                            @endif
                        </td>
                        <td class="fw-bold">{{ $service->title }}</td>
                        <td class="text-muted">{{ Str::limit($service->short_description, 60) }}</td>
                        <td class="text-end">
                            <div class="btn-group shadow-sm rounded-pill">
                                <a href="{{ route('services.edit', $service) }}" class="btn btn-sm btn-light border" title="Edit">
                                    <i class="bi bi-pencil text-primary"></i>
                                </a>
                                <button type="button" class="btn btn-sm btn-light border" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $service->id }}">
                                    <i class="bi bi-trash text-danger"></i>
                                </button>
                            </div>
                            
                            <!-- Delete Modal -->
                            <x-admin.modal id="deleteModal{{ $service->id }}" title="Delete Service" formAction="{{ route('services.destroy', $service) }}" formMethod="DELETE">
                                <p class="mb-0">Are you sure you want to delete the service <strong class="text-dark">{{ $service->title }}</strong>? This action cannot be undone.</p>
                            </x-admin.modal>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="text-center text-muted py-5"><i class="bi bi-inbox fs-1 d-block mb-2"></i> No services available.</td></tr>
                @endforelse
            </x-admin.datatable>
        </div>

        <!-- Grid View -->
        <div x-show="viewMode === 'grid'" style="display: none;">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mb-4">
                @forelse($services as $service)
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative">
                            @if($service->image)
                                <img src="{{ asset('storage/' . $service->image) }}" class="card-img-top" style="height: 180px; object-fit: cover;">
                            @else
                                <div class="bg-light d-flex align-items-center justify-content-center" style="height: 180px;">
                                    <img src="{{ asset('images/default-service.png') }}" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            @endif
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold mb-2">{{ $service->title }}</h5>
                                <p class="text-muted small mb-3">{{ Str::limit($service->short_description, 80) }}</p>
                                <div class="mt-auto d-flex justify-content-between align-items-center">
                                    <div class="btn-group shadow-sm rounded-pill w-100">
                                        <a href="{{ route('services.edit', $service) }}" class="btn btn-sm btn-light border w-50" title="Edit">
                                            <i class="bi bi-pencil text-primary"></i> Edit
                                        </a>
                                        <button type="button" class="btn btn-sm btn-light border w-50" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModalGrid{{ $service->id }}">
                                            <i class="bi bi-trash text-danger"></i> Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Delete Modal (Grid) -->
                        <x-admin.modal id="deleteModalGrid{{ $service->id }}" title="Delete Service" formAction="{{ route('services.destroy', $service) }}" formMethod="DELETE">
                            <p class="mb-0">Are you sure you want to delete the service <strong class="text-dark">{{ $service->title }}</strong>? This action cannot be undone.</p>
                        </x-admin.modal>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center text-muted py-5 bg-white rounded-4 shadow-sm"><i class="bi bi-inbox fs-1 d-block mb-2"></i> No services found.</div>
                    </div>
                @endforelse
            </div>
        </div>

        <x-admin.pagination :records="$services" />

        <x-admin.fab url="{{ route('services.create') }}" />
    </div>
</x-app-layout>
