<x-app-layout>
    <x-slot name="header">
        <x-admin.page-header title="Manage Careers" />
    </x-slot>

    <div class="container-fluid py-4">
        @if(session('success'))
            <div class="alert alert-success border-0 shadow-sm rounded-4 mb-4">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
            </div>
        @endif

        <x-admin.datatable>
            <x-slot name="header">
                <th>Title</th>
                <th>Description (preview)</th>
                <th width="120" class="text-end">Actions</th>
            </x-slot>

            @forelse($careers as $career)
                <tr>
                    <td class="fw-bold">{{ $career->title }}</td>
                    <td class="text-muted">{{ \Illuminate\Support\Str::limit($career->description, 80) }}</td>
                    <td class="text-end">
                        <div class="btn-group shadow-sm rounded-pill">
                            <a href="{{ route('careers.edit', $career) }}" class="btn btn-sm btn-light border" title="Edit">
                                <i class="bi bi-pencil text-primary"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-light border" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $career->id }}">
                                <i class="bi bi-trash text-danger"></i>
                            </button>
                        </div>
                        
                        <!-- Delete Modal -->
                        <x-admin.modal id="deleteModal{{ $career->id }}" title="Delete Career" formAction="{{ route('careers.destroy', $career) }}" formMethod="DELETE">
                            <p class="mb-0">Are you sure you want to delete the career <strong class="text-dark">{{ $career->title }}</strong>? This action cannot be undone.</p>
                        </x-admin.modal>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3" class="text-center text-muted py-5"><i class="bi bi-inbox fs-1 d-block mb-2"></i> No careers found.</td></tr>
            @endforelse
        </x-admin.datatable>

        <x-admin.pagination :records="$careers" />

        <x-admin.fab url="{{ route('careers.create') }}" />
    </div>
</x-app-layout>
