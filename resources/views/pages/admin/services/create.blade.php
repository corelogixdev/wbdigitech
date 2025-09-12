<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Add New Service</h2>
    </x-slot>

    <div class="p-6">
        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block">Title</label>
                <input type="text" name="title" class="w-full border rounded p-2" required>
            </div>

            <div class="mb-4">
                <label class="block">Short Description</label>
                <textarea name="short_description" class="w-full border rounded p-2" rows="3" required></textarea>
            </div>

            <div class="mb-4">
                <label class="block">Content</label>
                <textarea name="content" class="w-full border rounded p-2" rows="6"></textarea>
            </div>

            <div class="mb-4">
                <label class="block">Image</label>
                <input type="file" name="image" class="w-full border rounded p-2">
            </div>

            <button type="submit" 
    class="inline-block bg-blue-500 hover:bg-blue-600 font-semibold px-5 py-2 rounded shadow">
    Save Service
</button>
        </form>
    </div>
</x-app-layout>
