<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Add Customer</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('customers.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name (optional)</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Logo</label>
                <input type="file" name="logo" class="form-control" required>
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
</x-app-layout>
