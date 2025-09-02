<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Blogs') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="container">

            <div class="d-flex justify-content-between mb-3">
                <h4>All Blogs</h4>
                <a href="#" class="btn btn-primary">
                    <i class="bi bi-plus-circle me-1"></i> Add Blog
                </a>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Created At</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>First Blog Post</td>
                                <td>Admin</td>
                                <td>2025-09-02</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Second Blog Post</td>
                                <td>Editor</td>
                                <td>2025-09-01</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Third Blog Post</td>
                                <td>Guest Author</td>
                                <td>2025-08-28</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
