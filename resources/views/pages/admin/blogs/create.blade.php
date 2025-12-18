<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Blog
        </h2>
    </x-slot>

    <div class="container py-6">
        <div class="card shadow-sm">
            <div class="card-body">

                <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- BLOG TITLE --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Title</label>
                        <input type="text" name="title" class="form-control"
                               placeholder="Enter blog title" required>
                    </div>

                    {{-- FEATURED IMAGE --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Featured Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    {{-- CONTENT --}}
                    <div class="mb-4">
                        <label class="form-label fw-bold">Content</label>
                        <textarea name="content" id="editor" class="form-control" rows="10"></textarea>
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
                                       placeholder="SEO meta title">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="3"
                                          placeholder="SEO meta description"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Meta Keywords</label>
                                <input type="text" name="meta_keywords" class="form-control"
                                       placeholder="keyword1, keyword2, keyword3">
                            </div>

                        </div>
                    </div>

                    {{-- SAVE BUTTON --}}
                    <div class="mt-4">
                        <button type="submit" class="btn btn-warning px-4">
                            Save
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    {{-- CKEDITOR 5 (OPEN SOURCE, NO API KEY) --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'bold', 'italic',
                    '|', 'link',
                    '|', 'bulletedList', 'numberedList',
                    '|', 'insertTable',
                    '|', 'mediaEmbed',
                    '|', 'codeBlock'
                ],
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' }
                    ]
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>

</x-app-layout>
