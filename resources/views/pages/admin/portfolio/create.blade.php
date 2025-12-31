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
                                    <textarea name="client_overview" class="form-control" rows="6"
                                        placeholder="Use ## for headings, blank lines for paragraphs, **bold** for emphasis">{{ old('client_overview') }}</textarea>

                                    <small class="text-muted">
                                        Formatting guide:<br>
                                        <strong>## Heading</strong> → Section title<br>
                                        <strong>Blank line</strong> → New paragraph<br>
                                        <strong>**bold text**</strong> → Bold
                                    </small>
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
                                        <textarea name="services[0][objective]" class="form-control mb-2"
                                            placeholder="Objective for this service"></textarea>

                                        <label class="fw-semibold">Challenges</label>
                                        <textarea name="services[0][challenges]" class="form-control mb-2"
                                            placeholder="Challenges faced"></textarea>

                                        <label class="fw-semibold">Solutions</label>
                                        <textarea name="services[0][solutions]" class="form-control mb-2"
                                            placeholder="Solutions provided"></textarea>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-sm btn-success mb-3" onclick="addService()">+ Add
                                    Service</button>

                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let serviceIndex = 1;

        function addService() {
            let wrapper = document.getElementById('services-wrapper');

            let html = `
    <div class="service-item mb-4 border rounded p-3">
        <input type="text"
               name="services[${serviceIndex}][name]"
               placeholder="Service Name"
               class="form-control mb-2">

        <label class="fw-semibold">Objective</label>
        <textarea name="services[${serviceIndex}][objective]"
                  class="form-control mb-2"
                  placeholder="Objective for this service"></textarea>

        <label class="fw-semibold">Challenges</label>
        <textarea name="services[${serviceIndex}][challenges]"
                  class="form-control mb-2"
                  placeholder="Challenges faced"></textarea>

        <label class="fw-semibold">Solutions</label>
        <textarea name="services[${serviceIndex}][solutions]"
                  class="form-control mb-2"
                  placeholder="Solutions provided"></textarea>
    </div>`;

            wrapper.insertAdjacentHTML('beforeend', html);
            serviceIndex++;
        }
    </script>
</x-app-layout>