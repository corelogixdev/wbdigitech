<x-app-layout>
    <x-slot name="header">
        <x-admin.page-header title="Manage Users" />
    </x-slot>

    <div class="container-fluid py-4">
        @if(session('success'))
            <div class="alert alert-success border-0 shadow-sm rounded-4 mb-4">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
            </div>
        @endif

        <x-admin.datatable>
            <x-slot name="header">
                <th width="80">#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th width="120" class="text-end">Actions</th>
            </x-slot>

            @forelse($users as $user)
                <tr>
                    <td class="fw-semibold text-muted">{{ $loop->iteration }}</td>
                    <td class="fw-bold">{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <span class="badge {{ $user->role === 'superadmin' ? 'bg-danger' : 'bg-primary' }} rounded-pill px-3">{{ ucfirst($user->role) }}</span>
                    </td>
                    <td class="text-end">
                        <div class="btn-group shadow-sm rounded-pill">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-light border" title="Edit">
                                <i class="bi bi-pencil text-primary"></i>
                            </a>
                            
                            @if(auth()->user()->role === 'superadmin')
                                <button type="button" class="btn btn-sm btn-light border" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $user->id }}">
                                    <i class="bi bi-trash text-danger"></i>
                                </button>
                            @endif
                        </div>
                        
                        @if(auth()->user()->role === 'superadmin')
                            <!-- Delete Modal -->
                            <x-admin.modal id="deleteModal{{ $user->id }}" title="Delete User" formAction="{{ route('users.destroy', $user->id) }}" formMethod="DELETE">
                                <p class="mb-0">Are you sure you want to delete the user <strong class="text-dark">{{ $user->name }}</strong>? This action cannot be undone.</p>
                            </x-admin.modal>
                        @endif
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center text-muted py-5"><i class="bi bi-inbox fs-1 d-block mb-2"></i> No users found.</td></tr>
            @endforelse
        </x-admin.datatable>

        <x-admin.pagination :records="$users" />

        <x-admin.fab url="{{ route('users.create') }}" />
    </div>
</x-app-layout>
