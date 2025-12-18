<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Blog
        </h2>
    </x-slot>

    <div class="container py-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- BLOG TITLE --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                    </div>

                    {{-- FEATURED IMAGE --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Featured Image</label>
                        <input type="file" name="image" class="form-control">
                        @if($blog->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" width="120" class="rounded">
                            </div>
                        @endif
                    </div>

                    {{-- CONTENT --}}
                    <div class="mb-4">
                        <label class="form-label fw-bold">Content</label>
                        <textarea name="content" id="editor" class="form-control" rows="10">{{ old('content', $blog->content) }}</textarea>
                    </div>

                    {{-- SEO SECTION --}}
                    <div class="card mt-4 border">
                        <div class="card-header bg-light fw-bold">
                            Search Engine Optimization
                        </div>

                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control"
                                       value="{{ old('meta_title', $blog->meta_title) }}" placeholder="SEO meta title">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="3"
                                          placeholder="SEO meta description">{{ old('meta_description', $blog->meta_description) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Meta Keywords</label>
                                <input type="text" name="meta_keywords" class="form-control"
                                       value="{{ old('meta_keywords', $blog->meta_keywords) }}" placeholder="keyword1, keyword2, keyword3">
                            </div>

                        </div>
                    </div>

                    {{-- UPDATE BUTTON --}}
                    <div class="mt-4">
                        <button type="submit" class="btn btn-warning px-4">
                            Update
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    {{-- TINYMCE --}}
    <script src="https://cdn.tiny.cloud/1/{{ env('TINYMCE_API_KEY') }}/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#editor',
            height: 400,
            plugins: 'lists link image media table code',
            toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | link image media | code',
            menubar: true
        });
    </script>

</x-app-layout>
