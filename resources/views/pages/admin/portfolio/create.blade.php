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
                                    <label>Client Overview</label>
                                    <textarea name="client_overview" class="form-control"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label>Images</label>
                                    <input type="file" name="images[]" class="form-control" multiple>
                                </div>

                                <h4>Services</h4>
                                <div id="services-wrapper">
                                    <div class="service-item mb-3">
                                        <input type="text" name="services[0][name]" placeholder="Service Name" class="form-control mb-2">
                                        <textarea name="services[0][description]" placeholder="Service Description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-sm btn-success mb-3" onclick="addService()">+ Add Service</button>

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
        <div class="service-item mb-3">
            <input type="text" name="services[${serviceIndex}][name]" placeholder="Service Name" class="form-control mb-2">
            <textarea name="services[${serviceIndex}][description]" placeholder="Service Description" class="form-control"></textarea>
        </div>`;
    wrapper.insertAdjacentHTML('beforeend', html);
    serviceIndex++;
}
</script>
</x-app-layout>
