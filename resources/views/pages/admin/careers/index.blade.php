<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Careers</h2>
    </x-slot>

    <div class="py-6 container">
        <a href="{{ route('careers.create') }}" class="btn btn-primary mb-3">Add Career</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description (preview)</th>
                    <th style="width: 180px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($careers as $career)
                    <tr>
                        <td>{{ $career->title }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($career->description, 80) }}</td>
                        <td>
                            <a href="{{ route('careers.edit', $career) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('careers.destroy', $career) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete this career?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="3">No careers found.</td></tr>
                @endforelse
            </tbody>
        </table>

        {{ $careers->links() }}
    </div>
</x-app-layout>
