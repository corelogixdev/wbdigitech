<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Add Career</h2>
    </x-slot>

    <div class="py-6 container">
        <form method="POST" action="{{ route('careers.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
</x-app-layout>
