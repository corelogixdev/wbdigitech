<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Services</h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('services.create') }}" 
           class="bg-blue-500 btn btn-primary px-4 py-2 rounded">
           + Add Service
        </a>

        <table class="min-w-full mt-4 bg-white">
            <thead>
                <tr>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Short Description</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($services as $service)
                <tr>
                    <td class="border px-4 py-2">
                        @if($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}" width="60">
                        @else
                            <img src="{{ asset('images/default-service.png') }}" width="60">
                        @endif
                    </td>
                    <td class="border px-4 py-2">{{ $service->title }}</td>
                    <td class="border px-4 py-2">{{ Str::limit($service->short_description, 50) }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('services.edit', $service) }}" class="text-blue-600">Edit</a> |
                        <form action="{{ route('services.destroy', $service) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button class="text-red-600" onclick="return confirm('Delete this service?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="border px-4 py-2 text-center text-gray-500">No services available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $services->links() }}
        </div>
    </div>
</x-app-layout>
