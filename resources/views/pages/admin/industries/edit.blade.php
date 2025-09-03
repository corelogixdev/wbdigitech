{{-- resources/views/admin/industries/edit.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Edit Industry</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('industries.update', $industry) }}" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div>
                <label class="block">Name</label>
                <input type="text" name="name" value="{{ $industry->name }}" class="border p-2 w-full" required>
            </div>
            <div class="mt-3">
                <label class="block">Image</label>
                @if($industry->image)
                    <img src="{{ asset('storage/' . $industry->image) }}" width="80" class="mb-2">
                @endif
                <input type="file" name="image" class="border p-2 w-full">
            </div>
            <div class="mt-4">
                <button class="bg-blue-500 btn btn-warning px-4 py-2  rounded">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>
