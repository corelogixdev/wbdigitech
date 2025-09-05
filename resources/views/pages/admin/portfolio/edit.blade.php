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
                             <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Title -->
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="{{ old('title', $portfolio->title) }}" class="form-control" required>
        </div>

        <!-- Thumbnail -->
        <div class="mb-3">
            <label class="form-label">Thumbnail</label>
            @if($portfolio->thumbnail)
                <div class="mb-2">
                    <img src="{{ asset('storage/'.$portfolio->thumbnail) }}" 
                         class="img-thumbnail" width="200">
                </div>
            @endif
            <input type="file" name="thumbnail" class="form-control">
        </div>

        <!-- Client Overview -->
        <div class="mb-3">
            <label class="form-label">Client Overview</label>
            <textarea name="client_overview" class="form-control" rows="3">{{ old('client_overview', $portfolio->client_overview) }}</textarea>
        </div>

        <!-- Services (JSON) -->
        <div class="mb-3">
            <label class="form-label">Services</label>
            <div id="services-wrapper">
                @php
                    $services = is_array($portfolio->services) ? $portfolio->services : json_decode($portfolio->services, true);
                @endphp

                @foreach($services as $idx => $service)
                <div class="service-item d-flex gap-2 mb-2">
                    <input type="text" name="services[{{ $idx }}][name]" 
                           class="form-control w-25" 
                           value="{{ $service['name'] ?? '' }}" 
                           placeholder="Service Name">

                    <input type="text" name="services[{{ $idx }}][comment]" 
                           class="form-control" 
                           value="{{ $service['comment'] ?? '' }}" 
                           placeholder="Service Comment">

                    <button type="button" class="btn btn-danger btn-sm remove-service">X</button>
                </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-sm btn-secondary mt-2" id="add-service">+ Add Service</button>
        </div>

        <!-- Images -->
        <div class="mb-3">
            <label class="form-label">Work Images</label>
            <div class="mb-2 d-flex flex-wrap gap-2">
                @foreach($portfolio->images ?? [] as $img)
                    <div>
                        <img src="{{ asset('storage/'.$img) }}" class="img-thumbnail" width="150">
                    </div>
                @endforeach
            </div>
            <input type="file" name="images[]" class="form-control" multiple>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-primary">Update Portfolio</button>
        <a href="{{ route('portfolios.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<!-- Script for dynamic services -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        let wrapper = document.getElementById("services-wrapper");
        let addBtn = document.getElementById("add-service");

        addBtn.addEventListener("click", () => {
            let index = wrapper.querySelectorAll(".service-item").length;
            let div = document.createElement("div");
            div.classList.add("service-item", "d-flex", "gap-2", "mb-2");

            div.innerHTML = `
                <input type="text" name="services[${index}][name]" class="form-control w-25" placeholder="Service Name">
                <input type="text" name="services[${index}][comment]" class="form-control" placeholder="Service Comment">
                <button type="button" class="btn btn-danger btn-sm remove-service">X</button>
            `;
            wrapper.appendChild(div);

            div.querySelector(".remove-service").addEventListener("click", () => div.remove());
        });

        document.querySelectorAll(".remove-service").forEach(btn => {
            btn.addEventListener("click", e => e.target.closest(".service-item").remove());
        });
    });
</script>
</x-app-layout>
