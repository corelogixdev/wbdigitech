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
                                    <input type="text" name="title" value="{{ old('title', $portfolio->title) }}"
                                           class="form-control @error('title') is-invalid @enderror" required>
                                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Category -->
                                <div class="mb-3">
                                    <label class="form-label">Category</label>
                                    <input type="text" name="category" value="{{ old('category', $portfolio->category) }}"
                                           class="form-control @error('category') is-invalid @enderror">
                                    @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Current thumbnail -->
                                <div class="mb-3">
                                    <label class="form-label">Current Thumbnail</label>
                                    <div class="mb-2">
                                        @if($portfolio->thumbnail)
                                            <img src="{{ asset('storage/'.$portfolio->thumbnail) }}" style="max-width:200px;border-radius:6px;">
                                        @else
                                            <div class="text-muted">No thumbnail uploaded.</div>
                                        @endif
                                    </div>

                                    <label class="form-label">Replace Thumbnail (optional)</label>
                                    <input type="file" name="thumbnail" accept="image/*" class="form-control" id="thumbInputEdit">
                                    <div class="mt-3" id="thumbPreviewEdit"></div>
                                    @error('thumbnail') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>

                                <!-- Current gallery images -->
                                <div class="mb-3">
                                    <label class="form-label">Current Gallery Images</label>
                                    <div class="d-flex flex-wrap gap-2 mb-2">
                                        @if(is_array($portfolio->images) && count($portfolio->images))
                                            @foreach($portfolio->images as $img)
                                                <div class="position-relative" style="width:120px">
                                                    <img src="{{ asset('storage/'.$img) }}" style="width:120px;height:80px;object-fit:cover;border-radius:6px;">
                                                    <div class="form-check mt-1">
                                                        <input class="form-check-input" type="checkbox" name="remove_images[]" value="{{ $img }}" id="rm_{{ md5($img) }}">
                                                        <label class="form-check-label small" for="rm_{{ md5($img) }}">Remove</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="text-muted">No gallery images.</div>
                                        @endif
                                    </div>

                                    <label class="form-label">Add More Images (optional)</label>
                                    <input type="file" name="images[]" accept="image/*" multiple class="form-control" id="imagesInputEdit">
                                    <div class="mt-3 d-flex flex-wrap gap-2" id="imagesPreviewEdit"></div>
                                    @error('images.*') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>

                                <!-- Client overview -->
                                <div class="mb-3">
                                    <label class="form-label">Client Overview</label>
                                    <textarea name="client_overview" rows="4"
                                              class="form-control @error('client_overview') is-invalid @enderror">{{ old('client_overview', $portfolio->client_overview) }}</textarea>
                                    @error('client_overview') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Services -->
                                <div class="mb-3">
                                    <label class="form-label">Services / Notes</label>
                                    <textarea name="services" rows="4"
                                              class="form-control @error('services') is-invalid @enderror">{{ old('services', $portfolio->services) }}</textarea>
                                    @error('services') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Link -->
                                <div class="mb-3">
                                    <label class="form-label">Project Link (optional)</label>
                                    <input type="url" name="link" value="{{ old('link', $portfolio->link) }}" class="form-control">
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

    {{-- Preview scripts for edit --}}
    <script>
        document.getElementById('thumbInputEdit')?.addEventListener('change', function(e){
            const preview = document.getElementById('thumbPreviewEdit');
            preview.innerHTML = '';
            const file = e.target.files[0];
            if (!file) return;
            const img = document.createElement('img');
            img.style.maxWidth = '180px';
            img.style.borderRadius = '6px';
            img.src = URL.createObjectURL(file);
            preview.appendChild(img);
        });

        document.getElementById('imagesInputEdit')?.addEventListener('change', function(e){
            const container = document.getElementById('imagesPreviewEdit');
            container.innerHTML = '';
            Array.from(e.target.files).forEach(file => {
                const img = document.createElement('img');
                img.style.width = '120px';
                img.style.height = '80px';
                img.style.objectFit = 'cover';
                img.style.borderRadius = '6px';
                img.src = URL.createObjectURL(file);
                container.appendChild(img);
            });
        });
    </script>
</x-app-layout>
