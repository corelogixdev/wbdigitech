{{-- resources/views/admin/portfolios/index.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Portfolios</h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('portfolios.create') }}" 
           class="bg-blue-500 btn btn-primary px-4 py-2 rounded">
           + Add Portfolio
        </a>

        <table class="min-w-full mt-4 bg-white">
            <thead>
                <tr>
                    <th class="px-4 py-2">Thumbnail</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Category</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($portfolios as $portfolio)
                <tr>
                    <td class="border px-4 py-2">
                        @if($portfolio->thumbnail)
                            <img src="{{ asset('storage/' . $portfolio->thumbnail) }}" width="60">
                        @endif
                    </td>
                    <td class="border px-4 py-2">{{ $portfolio->title }}</td>
                    <td class="border px-4 py-2">{{ $portfolio->category ?? '—' }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('portfolios.edit', $portfolio) }}" class="text-blue-600">Edit</a> |
                        <form action="{{ route('portfolios.destroy', $portfolio) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button class="text-red-600" onclick="return confirm('Delete this portfolio?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- {{ $portfolios->links() }} --}}
    </div>
</x-app-layout>
