<x-app-layout>
    <x-slot name="header">
        <x-admin.page-header title="Manage SEO Requests" />
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
                <th>Website</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th width="120">Date</th>
                <th width="120" class="text-end">Actions</th>
            </x-slot>

            @forelse($seoRequests as $req)
                <tr>
                    <td class="fw-semibold text-muted">{{ $req->id }}</td>
                    <td class="fw-bold text-primary">{{ $req->website_url }}</td>
                    <td>{{ $req->first_name }} {{ $req->last_name }}</td>
                    <td><a href="mailto:{{ $req->email }}" class="text-decoration-none">{{ $req->email }}</a></td>
                    <td>{{ $req->phone ?? '-' }}</td>
                    <td class="text-muted small"><i class="bi bi-calendar3 me-1"></i>{{ $req->created_at->format('M d, Y') }}</td>
                    <td class="text-end">
                        <div class="btn-group shadow-sm rounded-pill">
                            <a href="{{ route('seo-requests.show', $req) }}" class="btn btn-sm btn-light border" title="View Details">
                                <i class="bi bi-eye text-info"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-light border" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $req->id }}">
                                <i class="bi bi-trash text-danger"></i>
                            </button>
                        </div>
                        
                        <!-- Delete Modal -->
                        <x-admin.modal id="deleteModal{{ $req->id }}" title="Delete SEO Request" formAction="{{ route('seo-requests.destroy', $req) }}" formMethod="DELETE">
                            <p class="mb-0">Are you sure you want to delete the SEO request for <strong class="text-dark">{{ $req->website_url }}</strong>? This action cannot be undone.</p>
                        </x-admin.modal>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center text-muted py-5"><i class="bi bi-inbox fs-1 d-block mb-2"></i> No SEO requests found.</td></tr>
            @endforelse
        </x-admin.datatable>

        <x-admin.pagination :records="$seoRequests" />
    </div>
</x-app-layout>
