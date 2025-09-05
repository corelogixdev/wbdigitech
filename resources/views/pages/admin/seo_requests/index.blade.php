<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">SEO Requests</h2>
    </x-slot>

    <div class="container py-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Website</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Submitted</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($seoRequests as $req)
                        <tr>
                            <td>{{ $req->id }}</td>
                            <td>{{ $req->website_url }}</td>
                            <td>{{ $req->first_name }} {{ $req->last_name }}</td>
                            <td>{{ $req->email }}</td>
                            <td>{{ $req->phone ?? '-' }}</td>
                            <td>{{ $req->created_at->format('Y-m-d') }}</td>
                            <td class="text-end">
                                <a href="{{ route('seo-requests.show', $req) }}" class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <form action="{{ route('seo-requests.destroy', $req) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this request?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">No SEO requests found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $seoRequests->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
