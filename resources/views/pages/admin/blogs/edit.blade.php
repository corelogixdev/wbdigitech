<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Blog
        </h2>
    </x-slot>

    <div class="container py-6">
        <div class="card shadow-sm">
            <div class="card-body">

                <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- BLOG TITLE --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Title</label>
                        <input type="text" name="title" class="form-control"
                               value="{{ $blog->title }}" required>
                    </div>

                    {{-- FEATURED IMAGE --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Featured Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    {{-- CONTENT --}}
                    <div class="mb-4">
                        <label class="form-label fw-bold">Content</label>
                        <textarea name="content" id="editor" class="form-control" rows="10">
{!! $blog->content !!}
                        </textarea>
                    </div>

                    {{-- SAVE --}}
                    <div class="mt-4">
                        <button type="submit" class="btn btn-warning px-4">
                            Update
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    {{-- CKEDITOR --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: [
                    'undo', 'redo',
                    '|', 'heading',   // 👈 headings
                    '|', 'bold', 'italic',
                    '|', 'link',
                    '|', 'bulletedList', 'numberedList',
                    '|', 'insertTable',
                    '|', 'mediaEmbed',
                    '|', 'codeBlock'
                ]
            })
            .catch(error => console.error(error));
    </script>

</x-app-layout>
