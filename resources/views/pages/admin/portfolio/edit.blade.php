{{-- resources/views/admin/portfolios/edit.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Edit Portfolio</h2>
    </x-slot>

    <div class="py-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">

                            <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" value="{{ old('title', $portfolio->title) }}"
                                        class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Website Link</label>
                                    <input type="url" name="website_link" value="{{ old('website_link', $portfolio->website_link) }}"
                                        class="form-control" placeholder="https://example.com">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Thumbnail</label>
                                    @if ($portfolio->thumbnail)
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $portfolio->thumbnail) }}" class="img-thumbnail"
                                                width="200">
                                        </div>
                                    @endif
                                    <input type="file" name="thumbnail" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Client Overview</label>
                                    <textarea name="client_overview" class="form-control ckeditor-field" rows="6"
                                        placeholder="Enter client overview...">{{ old('client_overview', $portfolio->client_overview) }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Services</label>

                                    <div id="services-wrapper">
                                        @php
                                            // Safely decode services and default to an empty array to prevent loops from breaking
                                            $services = is_array($portfolio->services) 
                                                ? $portfolio->services 
                                                : json_decode($portfolio->services, true);
                                            
                                            if (!is_array($services)) {
                                                $services = [];
                                            }
                                        @endphp

                                        @foreach ($services as $idx => $service)
                                            <div class="service-item border rounded p-3 mb-3">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <strong>Service {{ $idx + 1 }}</strong>
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm remove-service">Remove</button>
                                                </div>

                                                <input type="text" name="services[{{ $idx }}][name]"
                                                    class="form-control mb-2" value="{{ $service['name'] ?? '' }}"
                                                    placeholder="Service Name">

                                                <label class="fw-semibold mt-2">Objective</label>
                                                <textarea name="services[{{ $idx }}][objective]" class="form-control mb-2 ckeditor-field"
                                                    placeholder="Objective">{{ $service['objective'] ?? '' }}</textarea>

                                                <label class="fw-semibold mt-2">Challenges</label>
                                                <textarea name="services[{{ $idx }}][challenges]" class="form-control mb-2 ckeditor-field"
                                                    placeholder="Challenges">{{ $service['challenges'] ?? '' }}</textarea>

                                                <label class="fw-semibold mt-2">Solutions</label>
                                                <textarea name="services[{{ $idx }}][solutions]" class="form-control ckeditor-field"
                                                    placeholder="Solutions">{{ $service['solutions'] ?? '' }}</textarea>
                                            </div>
                                        @endforeach
                                    </div>

                                    <button type="button" class="btn btn-sm btn-secondary mt-2" id="add-service">
                                        + Add Service
                                    </button>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Work Images</label>

                                    @if (! empty($portfolio->images))
                                        <div class="mb-2 d-flex flex-wrap gap-3">
                                            @foreach ($portfolio->images as $index => $img)
                                                <div class="position-relative text-center">
                                                    <img src="{{ asset('storage/' . $img) }}"
                                                         class="img-thumbnail mb-1"
                                                         width="150">

                                                    <div class="form-check">
                                                        <input class="form-check-input"
                                                               type="checkbox"
                                                               name="remove_images[]"
                                                               value="{{ $img }}"
                                                               id="remove_image_{{ $index }}">
                                                        <label class="form-check-label text-danger"
                                                               for="remove_image_{{ $index }}">
                                                            Remove
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                                    <input type="file" name="images[]" class="form-control mt-2" multiple>
                                </div>

                                <button type="submit" class="btn btn-primary">Update Portfolio</button>
                                <a href="{{ route('portfolios.index') }}" class="btn btn-secondary">Cancel</a>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const wrapper = document.getElementById("services-wrapper");
            const addBtn = document.getElementById("add-service");

            // Reusable helper function to instantiate classic editor
            function initEditor(element) {
                ClassicEditor
                    .create(element)
                    .catch(error => {
                        console.error('Error initializing CKEditor:', error);
                    });
            }

            // Step 1: Initialize CKEditor on all fields present when editing page first renders
            document.querySelectorAll('.ckeditor-field').forEach(textarea => {
                initEditor(textarea);
            });

            // Step 2: Handle creation of new blocks dynamic attachment
            addBtn.addEventListener("click", () => {
                const index = wrapper.querySelectorAll(".service-item").length;

                const div = document.createElement("div");
                div.className = "service-item border rounded p-3 mb-3";

                div.innerHTML = `
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <strong>Service ${index + 1}</strong>
                        <button type="button" class="btn btn-danger btn-sm remove-service">Remove</button>
                    </div>

                    <input type="text"
                           name="services[${index}][name]"
                           class="form-control mb-2"
                           placeholder="Service Name">

                    <label class="fw-semibold mt-2">Objective</label>
                    <textarea name="services[${index}][objective]"
                              class="form-control mb-2 ckeditor-field"
                              placeholder="Objective"></textarea>

                    <label class="fw-semibold mt-2">Challenges</label>
                    <textarea name="services[${index}][challenges]"
                              class="form-control mb-2 ckeditor-field"
                              placeholder="Challenges"></textarea>

                    <label class="fw-semibold mt-2">Solutions</label>
                    <textarea name="services[${index}][solutions]"
                              class="form-control ckeditor-field"
                              placeholder="Solutions"></textarea>
                `;

                wrapper.appendChild(div);

                // Initialize CKEditor ONLY on textareas inside the newly added node
                div.querySelectorAll('.ckeditor-field').forEach(textarea => {
                    initEditor(textarea);
                });

                // Attach remove event listener to new items
                div.querySelector(".remove-service").addEventListener("click", () => div.remove());
            });

            // Handle remove event listener for database-rendered historical items
            document.querySelectorAll(".remove-service").forEach(btn => {
                btn.addEventListener("click", e =>
                    e.target.closest(".service-item").remove()
                );
            });
        });
    </script>

    <style>
        /* Forces standardized text field styling structure for default editors */
        .ck-editor__editable_inline {
            min-height: 120px;
        }
    </style>
</x-app-layout>