<x-app-layout>
    <x-slot name="header">
        <x-admin.page-header title="Manage Customers" />
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
                    <th width="100">Logo</th>
                    <th>Name</th>
                    <th width="120" class="text-end">Actions</th>
                </x-slot>

                @forelse ($customers as $customer)
                    <tr>
                        <td>
                            @if($customer->logo)
                                <img src="{{ asset('storage/' . $customer->logo) }}" alt="Logo" style="width: 50px; height: 50px; object-fit: contain;" class="rounded-3 shadow-sm bg-white p-1">
                            @else
                                <div class="bg-light text-muted rounded-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;"><i class="bi bi-image fs-4"></i></div>
                            @endif
                        </td>
                        <td class="fw-bold">{{ $customer->name ?? 'N/A' }}</td>
                        <td class="text-end">
                            <div class="btn-group shadow-sm rounded-pill">
                                <button type="button" class="btn btn-sm btn-light border" title="Edit" data-bs-toggle="modal" data-bs-target="#editModal{{ $customer->id }}">
                                    <i class="bi bi-pencil text-primary"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-light border" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $customer->id }}">
                                    <i class="bi bi-trash text-danger"></i>
                                </button>
                            </div>
                            
                            <!-- Edit Modal -->
                            <x-admin.modal id="editModal{{ $customer->id }}" title="Edit Customer" formAction="{{ route('customers.update', $customer) }}" formMethod="PUT">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Customer Name</label>
                                    <input type="text" name="name" class="form-control rounded-3" value="{{ $customer->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Logo</label>
                                    <input type="file" name="logo" class="form-control rounded-3">
                                </div>
                            </x-admin.modal>
                            
                            <!-- Delete Modal -->
                            <x-admin.modal id="deleteModal{{ $customer->id }}" title="Delete Customer" formAction="{{ route('customers.destroy', $customer) }}" formMethod="DELETE">
                                <p class="mb-0">Are you sure you want to delete the customer <strong class="text-dark">{{ $customer->name }}</strong>? This action cannot be undone.</p>
                            </x-admin.modal>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="3" class="text-center text-muted py-5"><i class="bi bi-inbox fs-1 d-block mb-2"></i> No customers found.</td></tr>
                @endforelse
            </x-admin.datatable>
        </div>

        <!-- Grid View -->
        <div x-show="viewMode === 'grid'" style="display: none;">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-4 mb-4">
                @forelse($customers as $customer)
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative bg-white text-center p-3">
                            <div class="d-flex justify-content-center align-items-center mb-3" style="height: 120px;">
                                @if($customer->logo)
                                    <img src="{{ asset('storage/' . $customer->logo) }}" style="max-height: 100px; max-width: 100%; object-fit: contain;">
                                @else
                                    <i class="bi bi-building text-muted" style="font-size: 3rem;"></i>
                                @endif
                            </div>
                            <div class="card-body p-0 d-flex flex-column">
                                <h6 class="card-title fw-bold mb-3 mt-auto">{{ $customer->name ?? 'N/A' }}</h6>
                                <div class="mt-auto d-flex justify-content-center gap-2">
                                    <button type="button" class="btn btn-sm btn-light border rounded-pill px-3" title="Edit" data-bs-toggle="modal" data-bs-target="#editModalGrid{{ $customer->id }}">
                                        <i class="bi bi-pencil text-primary"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-light border rounded-pill px-3" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModalGrid{{ $customer->id }}">
                                        <i class="bi bi-trash text-danger"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Modal (Grid) -->
                        <x-admin.modal id="editModalGrid{{ $customer->id }}" title="Edit Customer" formAction="{{ route('customers.update', $customer) }}" formMethod="PUT">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Customer Name</label>
                                <input type="text" name="name" class="form-control rounded-3" value="{{ $customer->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Logo</label>
                                <input type="file" name="logo" class="form-control rounded-3">
                            </div>
                        </x-admin.modal>
                        
                        <!-- Delete Modal (Grid) -->
                        <x-admin.modal id="deleteModalGrid{{ $customer->id }}" title="Delete Customer" formAction="{{ route('customers.destroy', $customer) }}" formMethod="DELETE">
                            <p class="mb-0">Are you sure you want to delete the customer <strong class="text-dark">{{ $customer->name }}</strong>? This action cannot be undone.</p>
                        </x-admin.modal>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center text-muted py-5 bg-white rounded-4 shadow-sm"><i class="bi bi-inbox fs-1 d-block mb-2"></i> No customers found.</div>
                    </div>
                @endforelse
            </div>
        </div>

        <x-admin.pagination :records="$customers" />

        <x-admin.fab target="addCustomerModal" />

        <!-- Add Modal -->
        <x-admin.modal id="addCustomerModal" title="Add Customer" formAction="{{ route('customers.store') }}" formMethod="POST">
            <div class="mb-3">
                <label class="form-label fw-semibold">Customer Name</label>
                <input type="text" name="name" class="form-control rounded-3" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold">Logo</label>
                <input type="file" name="logo" class="form-control rounded-3" required>
            </div>
        </x-admin.modal>
    </div>
</x-app-layout>
