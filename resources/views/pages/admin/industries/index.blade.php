<x-app-layout>
    <x-slot name="header">
        <x-admin.page-header title="Manage Industries" />
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
                    <th>Name</th>
                    <th width="120" class="text-end">Actions</th>
                </x-slot>

                @forelse($industries as $industry)
                    <tr>
                        <td>
                            @if($industry->image)
                                <img src="{{ asset('storage/' . $industry->image) }}" alt="Image" style="width: 50px; height: 50px; object-fit: cover;" class="rounded-3 shadow-sm">
                            @else
                                <div class="bg-light text-muted rounded-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;"><i class="bi bi-image fs-4"></i></div>
                            @endif
                        </td>
                        <td class="fw-bold">{{ $industry->name }}</td>
                        <td class="text-end">
                            <div class="btn-group shadow-sm rounded-pill">
                                <!-- Edit Modal Trigger -->
                                <button type="button" class="btn btn-sm btn-light border" title="Edit" data-bs-toggle="modal" data-bs-target="#editModal{{ $industry->id }}">
                                    <i class="bi bi-pencil text-primary"></i>
                                </button>
                                <!-- Delete Modal Trigger -->
                                <button type="button" class="btn btn-sm btn-light border" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $industry->id }}">
                                    <i class="bi bi-trash text-danger"></i>
                                </button>
                            </div>
                            
                            <!-- Edit Modal -->
                            <x-admin.modal id="editModal{{ $industry->id }}" title="Edit Industry" formAction="{{ route('industries.update', $industry) }}" formMethod="PUT">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Industry Name</label>
                                    <input type="text" name="name" class="form-control rounded-3" value="{{ $industry->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Image</label>
                                    <input type="file" name="image" class="form-control rounded-3">
                                    <small class="text-muted d-block mt-1">Leave empty to keep current image</small>
                                </div>
                            </x-admin.modal>
                            
                            <!-- Delete Modal -->
                            <x-admin.modal id="deleteModal{{ $industry->id }}" title="Delete Industry" formAction="{{ route('industries.destroy', $industry) }}" formMethod="DELETE">
                                <p class="mb-0">Are you sure you want to delete the industry <strong class="text-dark">{{ $industry->name }}</strong>? This action cannot be undone.</p>
                            </x-admin.modal>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="3" class="text-center text-muted py-5"><i class="bi bi-inbox fs-1 d-block mb-2"></i> No industries available.</td></tr>
                @endforelse
            </x-admin.datatable>
        </div>

        <!-- Grid View -->
        <div x-show="viewMode === 'grid'" style="display: none;">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mb-4">
                @forelse($industries as $industry)
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative">
                            @if($industry->image)
                                <img src="{{ asset('storage/' . $industry->image) }}" class="card-img-top" style="height: 180px; object-fit: cover;">
                            @else
                                <div class="bg-light d-flex align-items-center justify-content-center" style="height: 180px;">
                                    <i class="bi bi-building text-muted" style="font-size: 3rem;"></i>
                                </div>
                            @endif
                            <div class="card-body text-center d-flex flex-column">
                                <h5 class="card-title fw-bold mb-3 mt-auto">{{ $industry->name }}</h5>
                                <div class="mt-auto d-flex justify-content-center gap-2">
                                    <button type="button" class="btn btn-sm btn-light border rounded-pill px-3" title="Edit" data-bs-toggle="modal" data-bs-target="#editModalGrid{{ $industry->id }}">
                                        <i class="bi bi-pencil text-primary"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-light border rounded-pill px-3" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModalGrid{{ $industry->id }}">
                                        <i class="bi bi-trash text-danger"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Modal (Grid) -->
                        <x-admin.modal id="editModalGrid{{ $industry->id }}" title="Edit Industry" formAction="{{ route('industries.update', $industry) }}" formMethod="PUT">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Industry Name</label>
                                <input type="text" name="name" class="form-control rounded-3" value="{{ $industry->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Image</label>
                                <input type="file" name="image" class="form-control rounded-3">
                                <small class="text-muted d-block mt-1">Leave empty to keep current image</small>
                            </div>
                        </x-admin.modal>
                        
                        <!-- Delete Modal (Grid) -->
                        <x-admin.modal id="deleteModalGrid{{ $industry->id }}" title="Delete Industry" formAction="{{ route('industries.destroy', $industry) }}" formMethod="DELETE">
                            <p class="mb-0">Are you sure you want to delete the industry <strong class="text-dark">{{ $industry->name }}</strong>? This action cannot be undone.</p>
                        </x-admin.modal>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center text-muted py-5 bg-white rounded-4 shadow-sm"><i class="bi bi-inbox fs-1 d-block mb-2"></i> No industries found.</div>
                    </div>
                @endforelse
            </div>
        </div>

        <x-admin.pagination :records="$industries" />

        <!-- Add Modal Triggered by FAB -->
        <x-admin.fab target="addIndustryModal" />

        <!-- Add Modal -->
        <x-admin.modal id="addIndustryModal" title="Add Industry" formAction="{{ route('industries.store') }}" formMethod="POST">
            <div class="mb-3">
                <label class="form-label fw-semibold">Industry Name</label>
                <input type="text" name="name" class="form-control rounded-3" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold">Image</label>
                <input type="file" name="image" class="form-control rounded-3" required>
            </div>
        </x-admin.modal>
    </div>
</x-app-layout>
