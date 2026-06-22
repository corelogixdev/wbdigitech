<x-app-layout>
    <x-slot name="header">
        <x-admin.page-header title="Manage Blogs" />
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
                    <th width="80">#</th>
                    <th width="100">Image</th>
                    <th>Title</th>
                    <th width="150">Created At</th>
                    <th width="120" class="text-end">Actions</th>
                </x-slot>

                @forelse($blogs as $blog)
                    <tr>
                        <td class="fw-semibold text-muted">{{ $blog->id }}</td>
                        <td>
                            @if($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="Image" style="width: 50px; height: 50px; object-fit: cover;" class="rounded-3 shadow-sm">
                            @else
                                <div class="bg-light text-muted rounded-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;"><i class="bi bi-image fs-4"></i></div>
                            @endif
                        </td>
                        <td class="fw-bold">{{ $blog->title }}</td>
                        <td class="text-muted small"><i class="bi bi-calendar3 me-1"></i>{{ $blog->created_at->format('M d, Y') }}</td>
                        <td class="text-end">
                            <div class="btn-group shadow-sm rounded-pill">
                                <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-sm btn-light border" title="Edit">
                                    <i class="bi bi-pencil text-primary"></i>
                                </a>
                                <button type="button" class="btn btn-sm btn-light border" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $blog->id }}">
                                    <i class="bi bi-trash text-danger"></i>
                                </button>
                            </div>
                            
                            <!-- Delete Modal -->
                            <x-admin.modal id="deleteModal{{ $blog->id }}" title="Delete Blog" formAction="{{ route('blogs.destroy', $blog) }}" formMethod="DELETE">
                                <p class="mb-0">Are you sure you want to delete the blog <strong class="text-dark">{{ $blog->title }}</strong>? This action cannot be undone.</p>
                            </x-admin.modal>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center text-muted py-5"><i class="bi bi-inbox fs-1 d-block mb-2"></i> No blogs found.</td></tr>
                @endforelse
            </x-admin.datatable>
        </div>

        <!-- Grid View -->
        <div x-show="viewMode === 'grid'" style="display: none;">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mb-4">
                @forelse($blogs as $blog)
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative">
                            @if($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" style="height: 180px; object-fit: cover;">
                            @else
                                <div class="bg-light d-flex align-items-center justify-content-center" style="height: 180px;">
                                    <i class="bi bi-image text-muted" style="font-size: 3rem;"></i>
                                </div>
                            @endif
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold mb-2">{{ $blog->title }}</h5>
                                <p class="text-muted small mb-3"><i class="bi bi-calendar3 me-1"></i>{{ $blog->created_at->format('M d, Y') }}</p>
                                <div class="mt-auto d-flex justify-content-between align-items-center">
                                    <div class="btn-group shadow-sm rounded-pill w-100">
                                        <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-sm btn-light border w-50" title="Edit">
                                            <i class="bi bi-pencil text-primary"></i> Edit
                                        </a>
                                        <button type="button" class="btn btn-sm btn-light border w-50" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModalGrid{{ $blog->id }}">
                                            <i class="bi bi-trash text-danger"></i> Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Delete Modal (Grid) -->
                        <x-admin.modal id="deleteModalGrid{{ $blog->id }}" title="Delete Blog" formAction="{{ route('blogs.destroy', $blog) }}" formMethod="DELETE">
                            <p class="mb-0">Are you sure you want to delete the blog <strong class="text-dark">{{ $blog->title }}</strong>? This action cannot be undone.</p>
                        </x-admin.modal>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center text-muted py-5 bg-white rounded-4 shadow-sm"><i class="bi bi-inbox fs-1 d-block mb-2"></i> No blogs found.</div>
                    </div>
                @endforelse
            </div>
        </div>

        <x-admin.pagination :records="$blogs" />

        <x-admin.fab url="{{ route('blogs.create') }}" />
    </div>
</x-app-layout>
