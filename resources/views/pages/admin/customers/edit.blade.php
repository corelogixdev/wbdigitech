<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Edit Customer</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('customers.update', $customer) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Name (optional)</label>
                <input type="text" name="name" class="form-control" value="{{ $customer->name }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Logo</label><br>
                <img src="{{ asset('storage/' . $customer->logo) }}" width="100" class="mb-2">
                <input type="file" name="logo" class="form-control">
            </div>
            <button class="btn btn-primary">Update</button>
        </form>
    </div>
</x-app-layout>
