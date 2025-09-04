<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Team Member
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white p-6 shadow rounded-lg">
                <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-4">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" value="{{ old('name', $team->name) }}" class="form-control" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Speciality</label>
                        <input type="text" name="speciality" value="{{ old('speciality', $team->speciality) }}" class="form-control" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Current Image</label><br>
                        @if($team->image)
                            <img src="{{ asset('storage/'.$team->image) }}" alt="Team Image" width="120" class="mb-3">
                        @endif
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('team.index') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
