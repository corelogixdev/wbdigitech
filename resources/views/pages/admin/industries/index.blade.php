{{-- resources/views/admin/industries/index.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Industries</h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('industries.create') }}" class="bg-blue-500 btn btn-primary px-4 py-2 rounded">+ Add Industry</a>
        <table class="min-w-full mt-4 bg-white">
            <thead>
                <tr>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($industries as $industry)
                <tr>
                    <td class="border px-4 py-2">
                        @if($industry->image)
                            <img src="{{ asset('storage/' . $industry->image) }}" width="60">
                        @endif
                    </td>
                    <td class="border px-4 py-2">{{ $industry->name }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('industries.edit', $industry) }}" class="text-blue-600">Edit</a> |
                        <form action="{{ route('industries.destroy', $industry) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button class="text-red-600" onclick="return confirm('Delete this industry?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $industries->links() }}
    </div>
</x-app-layout>
