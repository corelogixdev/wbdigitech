<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Team Member') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">Name</label>
                        <input type="text" name="name" class="w-full border border-gray-300 rounded mt-1 px-3 py-2 focus:ring focus:ring-indigo-200" required>
                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">Speciality / Job</label>
                        <input type="text" name="speciality" class="w-full border border-gray-300 rounded mt-1 px-3 py-2 focus:ring focus:ring-indigo-200" required>
                        @error('speciality') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">Photo</label>
                        <input type="file" name="image" class="w-full border border-gray-300 rounded mt-1 px-3 py-2">
                        @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- ✅ Styled Save Button -->
                    <div class="flex justify-end">
                        <button type="submit" 
                            class="bg-indigo-600 text-black px-5 py-2 rounded-lg shadow hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-300">
                            Save
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
