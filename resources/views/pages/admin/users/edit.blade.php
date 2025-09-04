<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit User
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <form method="POST" action="{{ route('users.update', $user->id) }}">
                                @csrf
                                @method('PUT')

                                <!-- Name -->
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" value="{{ old('name', $user->name) }}"
                                           class="form-control @error('name') is-invalid @enderror">
                                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" value="{{ old('email', $user->email) }}"
                                           class="form-control @error('email') is-invalid @enderror">
                                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <label class="form-label">Password (leave blank to keep current)</label>
                                    <input type="password" name="password"
                                           class="form-control @error('password') is-invalid @enderror">
                                    @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary">Update User</button>
                                <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
