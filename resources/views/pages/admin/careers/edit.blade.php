<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Edit Career</h2>
    </x-slot>

    <div class="py-6 container">
        <form method="POST" action="{{ route('careers.update', $career) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input name="title" type="text" class="form-control"
                       value="{{ old('title', $career->title) }}" required>
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="5">{{ old('description', $career->description) }}</textarea>
                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('careers.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</x-app-layout>
