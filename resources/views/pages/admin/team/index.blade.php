<x-app-layout>
    <x-slot name="header">
        <x-admin.page-header title="Manage Team Members" />
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
                    <th>Speciality</th>
                    <th width="120" class="text-end">Actions</th>
                </x-slot>

                @forelse($teams as $team)
                    <tr>
                        <td>
                            @if($team->image)
                                <img src="{{ asset('storage/' . $team->image) }}" alt="Image" style="width: 50px; height: 50px; object-fit: cover;" class="rounded-3 shadow-sm">
                            @else
                                <div class="bg-light text-muted rounded-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;"><i class="bi bi-person fs-4"></i></div>
                            @endif
                        </td>
                        <td class="fw-bold">{{ $team->name }}</td>
                        <td class="text-muted">{{ $team->speciality }}</td>
                        <td class="text-end">
                            <div class="btn-group shadow-sm rounded-pill">
                                <button type="button" class="btn btn-sm btn-light border" title="Edit" data-bs-toggle="modal" data-bs-target="#editModal{{ $team->id }}">
                                    <i class="bi bi-pencil text-primary"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-light border" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $team->id }}">
                                    <i class="bi bi-trash text-danger"></i>
                                </button>
                            </div>
                            
                            <!-- Edit Modal -->
                            <x-admin.modal id="editModal{{ $team->id }}" title="Edit Team Member" formAction="{{ route('team.update', $team) }}" formMethod="PUT">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Name</label>
                                    <input type="text" name="name" class="form-control rounded-3" value="{{ $team->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Speciality</label>
                                    <input type="text" name="speciality" class="form-control rounded-3" value="{{ $team->speciality }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Image</label>
                                    <input type="file" name="image" class="form-control rounded-3">
                                </div>
                            </x-admin.modal>
                            
                            <!-- Delete Modal -->
                            <x-admin.modal id="deleteModal{{ $team->id }}" title="Delete Team Member" formAction="{{ route('team.destroy', $team) }}" formMethod="DELETE">
                                <p class="mb-0">Are you sure you want to delete <strong class="text-dark">{{ $team->name }}</strong>? This action cannot be undone.</p>
                            </x-admin.modal>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="text-center text-muted py-5"><i class="bi bi-inbox fs-1 d-block mb-2"></i> No team members found.</td></tr>
                @endforelse
            </x-admin.datatable>
        </div>

        <!-- Grid View -->
        <div x-show="viewMode === 'grid'" style="display: none;">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mb-4">
                @forelse($teams as $team)
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative text-center">
                            <div class="card-body p-4 d-flex flex-column align-items-center">
                                @if($team->image)
                                    <img src="{{ asset('storage/' . $team->image) }}" class="rounded-circle mb-3 shadow-sm" style="width: 120px; height: 120px; object-fit: cover;">
                                @else
                                    <div class="bg-light rounded-circle mb-3 d-flex align-items-center justify-content-center" style="width: 120px; height: 120px;">
                                        <i class="bi bi-person text-muted" style="font-size: 3rem;"></i>
                                    </div>
                                @endif
                                <h5 class="card-title fw-bold mb-1">{{ $team->name }}</h5>
                                <p class="text-muted small mb-4">{{ $team->speciality }}</p>
                                <div class="mt-auto d-flex justify-content-center gap-2 w-100">
                                    <button type="button" class="btn btn-sm btn-light border rounded-pill w-50" title="Edit" data-bs-toggle="modal" data-bs-target="#editModalGrid{{ $team->id }}">
                                        <i class="bi bi-pencil text-primary"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-light border rounded-pill w-50" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModalGrid{{ $team->id }}">
                                        <i class="bi bi-trash text-danger"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Modal (Grid) -->
                        <x-admin.modal id="editModalGrid{{ $team->id }}" title="Edit Team Member" formAction="{{ route('team.update', $team) }}" formMethod="PUT">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Name</label>
                                <input type="text" name="name" class="form-control rounded-3" value="{{ $team->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Speciality</label>
                                <input type="text" name="speciality" class="form-control rounded-3" value="{{ $team->speciality }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Image</label>
                                <input type="file" name="image" class="form-control rounded-3">
                            </div>
                        </x-admin.modal>
                        
                        <!-- Delete Modal (Grid) -->
                        <x-admin.modal id="deleteModalGrid{{ $team->id }}" title="Delete Team Member" formAction="{{ route('team.destroy', $team) }}" formMethod="DELETE">
                            <p class="mb-0">Are you sure you want to delete <strong class="text-dark">{{ $team->name }}</strong>? This action cannot be undone.</p>
                        </x-admin.modal>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center text-muted py-5 bg-white rounded-4 shadow-sm"><i class="bi bi-inbox fs-1 d-block mb-2"></i> No team members found.</div>
                    </div>
                @endforelse
            </div>
        </div>

        <x-admin.pagination :records="$teams" />

        <!-- Add Modal Triggered by FAB -->
        <x-admin.fab target="addTeamModal" />

        <!-- Add Modal -->
        <x-admin.modal id="addTeamModal" title="Add Team Member" formAction="{{ route('team.store') }}" formMethod="POST">
            <div class="mb-3">
                <label class="form-label fw-semibold">Name</label>
                <input type="text" name="name" class="form-control rounded-3" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold">Speciality</label>
                <input type="text" name="speciality" class="form-control rounded-3" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold">Image</label>
                <input type="file" name="image" class="form-control rounded-3" required>
            </div>
        </x-admin.modal>
    </div>
</x-app-layout>
