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

                                <!-- Title -->
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" value="{{ old('title', $portfolio->title) }}"
                                        class="form-control" required>
                                </div>

                                <!-- Website Link -->
                                <div class="mb-3">
                                    <label class="form-label">Website Link</label>
                                    <input type="url" name="website_link" value="{{ old('website_link', $portfolio->website_link) }}"
                                        class="form-control" placeholder="https://example.com">
                                </div>

                                <!-- Thumbnail -->
                                <div class="mb-3">
                                    <label class="form-label">Thumbnail</label>
                                    @if($portfolio->thumbnail)
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $portfolio->thumbnail) }}" class="img-thumbnail"
                                                width="200">
                                        </div>
                                    @endif
                                    <input type="file" name="thumbnail" class="form-control">
                                </div>

                                <!-- Client Overview -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Client Overview</label>

                                    <textarea name="client_overview" class="form-control" rows="6"
                                        placeholder="Use ## for headings, blank lines for paragraphs, **bold** for emphasis">{{ old('client_overview', $portfolio->client_overview) }}</textarea>

                                    <small class="text-muted d-block mt-1">
                                        Formatting guide:<br>
                                        <strong>## Heading</strong> → Section title<br>
                                        <strong>Blank line</strong> → New paragraph<br>
                                        <strong>**bold text**</strong> → Bold
                                    </small>
                                </div>

                                <!-- Services -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Services</label>

                                    <div id="services-wrapper">
                                        @php
                                            $services = is_array($portfolio->services)
                                                ? $portfolio->services
                                                : json_decode($portfolio->services, true);
                                        @endphp

                                        @foreach($services as $idx => $service)
                                            <div class="service-item border rounded p-3 mb-3">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <strong>Service {{ $idx + 1 }}</strong>
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm remove-service">Remove</button>
                                                </div>

                                                <input type="text" name="services[{{ $idx }}][name]"
                                                    class="form-control mb-2" value="{{ $service['name'] ?? '' }}"
                                                    placeholder="Service Name">

                                                <label class="fw-semibold">Objective</label>
                                                <textarea name="services[{{ $idx }}][objective]" class="form-control mb-2"
                                                    placeholder="Objective">{{ $service['objective'] ?? '' }}</textarea>

                                                <label class="fw-semibold">Challenges</label>
                                                <textarea name="services[{{ $idx }}][challenges]" class="form-control mb-2"
                                                    placeholder="Challenges">{{ $service['challenges'] ?? '' }}</textarea>

                                                <label class="fw-semibold">Solutions</label>
                                                <textarea name="services[{{ $idx }}][solutions]" class="form-control"
                                                    placeholder="Solutions">{{ $service['solutions'] ?? '' }}</textarea>
                                            </div>
                                        @endforeach
                                    </div>

                                    <button type="button" class="btn btn-sm btn-secondary mt-2" id="add-service">
                                        + Add Service
                                    </button>
                                </div>

                                <!-- Images -->
                                <div class="mb-3">
                                    <label class="form-label">Work Images</label>
                                    <div class="mb-2 d-flex flex-wrap gap-2">
                                        @foreach($portfolio->images ?? [] as $img)
                                            <img src="{{ asset('storage/' . $img) }}" class="img-thumbnail" width="150">
                                        @endforeach
                                    </div>
                                    <input type="file" name="images[]" class="form-control" multiple>
                                </div>

                                <!-- Submit -->
                                <button type="submit" class="btn btn-primary">Update Portfolio</button>
                                <a href="{{ route('portfolios.index') }}" class="btn btn-secondary">Cancel</a>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 🔹 Script for dynamic services -->
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const wrapper = document.getElementById("services-wrapper");
                const addBtn = document.getElementById("add-service");

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

            <label class="fw-semibold">Objective</label>
            <textarea name="services[${index}][objective]"
                      class="form-control mb-2"
                      placeholder="Objective"></textarea>

            <label class="fw-semibold">Challenges</label>
            <textarea name="services[${index}][challenges]"
                      class="form-control mb-2"
                      placeholder="Challenges"></textarea>

            <label class="fw-semibold">Solutions</label>
            <textarea name="services[${index}][solutions]"
                      class="form-control"
                      placeholder="Solutions"></textarea>
        `;

                    wrapper.appendChild(div);

                    div.querySelector(".remove-service")
                        .addEventListener("click", () => div.remove());
                });

                document.querySelectorAll(".remove-service").forEach(btn => {
                    btn.addEventListener("click", e =>
                        e.target.closest(".service-item").remove()
                    );
                });
            });
        </script>

</x-app-layout>