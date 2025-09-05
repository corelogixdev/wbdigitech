<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Contact Detail
        </h2>
    </x-slot>

    <div class="container py-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="mb-3">Message from {{ $contact->name }}</h4>
                <p><strong>Email:</strong> {{ $contact->email }}</p>
                <p><strong>Date:</strong> {{ $contact->created_at->format('d M, Y h:i A') }}</p>
                <hr>
                <p>{{ $contact->message }}</p>

                <div class="mt-3">
                    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back</a>
                    <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Delete this message?')">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
