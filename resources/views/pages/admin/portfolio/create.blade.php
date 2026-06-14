{{-- resources/views/admin/portfolios/create.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Add Portfolio</h2>
    </x-slot>

    <div class="py-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Category</label>
                                    <input type="text" name="category" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Thumbnail</label>
                                    <input type="file" name="thumbnail" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Website Link</label>
                                    <input type="url" name="website_link" class="form-control"
                                        placeholder="https://example.com">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Client Overview</label>
                                    <textarea name="client_overview" class="form-control ckeditor-field" rows="6"
                                        placeholder="Enter client overview...">{{ old('client_overview') }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label>Images</label>
                                    <input type="file" name="images[]" class="form-control" multiple>
                                </div>

                                <h4>Services</h4>
                                <div id="services-wrapper">
                                    <div class="service-item mb-4 border rounded p-3">
                                        <input type="text" name="services[0][name]" placeholder="Service Name"
                                            class="form-control mb-2">

                                        <label class="fw-semibold">Objective</label>
                                        <textarea name="services[0][objective]" class="form-control mb-2 ckeditor-field"
                                            placeholder="Objective for this service"></textarea>

                                        <label class="fw-semibold">Challenges</label>
                                        <textarea name="services[0][challenges]" class="form-control mb-2 ckeditor-field"
                                            placeholder="Challenges faced"></textarea>

                                        <label class="fw-semibold">Solutions</label>
                                        <textarea name="services[0][solutions]" class="form-control mb-2 ckeditor-field"
                                            placeholder="Solutions provided"></textarea>
                                    </div>
                                </div>
                                
                                <button type="button" class="btn btn-sm btn-success mb-3" onclick="addService()">+ Add Service</button>

                                <div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

    <script>
        // Reusable function to initialize CKEditor on a specific element
        function initEditor(element) {
            ClassicEditor
                .create(element)
                .catch(error => {
                    console.error('Error initializing CKEditor:', error);
                });
        }

        // Initialize CKEditor on all existing textareas on page load
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.ckeditor-field').forEach(textarea => {
                initEditor(textarea);
            });
        });

        let serviceIndex = 1;

        function addService() {
            let wrapper = document.getElementById('services-wrapper');

            // Create a temporary container to parse the HTML string safely
            let tempDiv = document.createElement('div');
            
            tempDiv.innerHTML = `
                <div class="service-item mb-4 border rounded p-3">
                    <input type="text"
                           name="services[${serviceIndex}][name]"
                           placeholder="Service Name"
                           class="form-control mb-2">

                    <label class="fw-semibold mt-2">Objective</label>
                    <textarea name="services[${serviceIndex}][objective]"
                              class="form-control mb-2 ckeditor-field"
                              placeholder="Objective for this service"></textarea>

                    <label class="fw-semibold mt-2">Challenges</label>
                    <textarea name="services[${serviceIndex}][challenges]"
                              class="form-control mb-2 ckeditor-field"
                              placeholder="Challenges faced"></textarea>

                    <label class="fw-semibold mt-2">Solutions</label>
                    <textarea name="services[${serviceIndex}][solutions]"
                              class="form-control mb-2 ckeditor-field"
                              placeholder="Solutions provided"></textarea>
                </div>
            `;

            // Extract the new node from the temp container
            let newServiceNode = tempDiv.firstElementChild;
            
            // Append the new node to the wrapper
            wrapper.appendChild(newServiceNode);

            // Initialize CKEditor ONLY on the newly added textareas
            newServiceNode.querySelectorAll('.ckeditor-field').forEach(textarea => {
                initEditor(textarea);
            });

            serviceIndex++;
        }
    </script>
    
    <style>
        /* Optional: Fixes CKEditor height so it matches a standard textarea look */
        .ck-editor__editable_inline {
            min-height: 120px;
        }
    </style>
</x-app-layout>