<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Team Members
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white p-6 shadow rounded-lg">

                <div class="mb-4 text-right">
                    <a href="{{ route('team.create') }}" class="btn btn-primary">+ Add Team Member</a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="80">Image</th>
                            <th>Name</th>
                            <th>Speciality</th>
                            <th width="200">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($teams as $team)
                            <tr>
                                <td>
                                    @if($team->image)
                                        <img src="{{ asset('storage/'.$team->image) }}" width="60" height="60" class="rounded">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->speciality }}</td>
                                <td>
                                    <a href="{{ route('team.edit', $team->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                    <form action="{{ route('team.destroy', $team->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this member?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No team members found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="mt-3">
                    {{ $teams->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
