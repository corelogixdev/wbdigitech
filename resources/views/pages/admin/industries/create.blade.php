{{-- resources/views/admin/industries/create.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Add Industry</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('industries.store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label class="block">Name</label>
                <input type="text" name="name" class="border p-2 w-full" required>
            </div>
            <div class="mt-3">
                <label class="block">Image</label>
                <input type="file" name="image" class="border p-2 w-full">
            </div>
            <div class="mt-4">
                <button class="bg-blue-500 btn btn-success px-4 py-2 rounded">Save</button>
            </div>
        </form>
    </div>
</x-app-layout>
