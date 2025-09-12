<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Edit Service</h2>
    </x-slot>

    <div class="p-6">
        <form action="{{ route('services.update', $service) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="mb-4">
                <label class="block">Title</label>
                <input type="text" name="title" value="{{ old('title', $service->title) }}" class="w-full border rounded p-2" required>
            </div>

            <div class="mb-4">
                <label class="block">Short Description</label>
                <textarea name="short_description" class="w-full border rounded p-2" rows="3" required>{{ old('short_description', $service->short_description) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block">Content</label>
                <textarea name="content" class="w-full border rounded p-2" rows="6">{{ old('content', $service->content) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block">Image</label>
                <input type="file" name="image" class="w-full border rounded p-2">
                @if($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" width="100" class="mt-2">
                @endif
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Service</button>
        </form>
    </div>
</x-app-layout>
