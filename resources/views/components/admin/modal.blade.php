@props(['id', 'title', 'size' => 'md', 'formAction' => null, 'formMethod' => 'POST'])
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-{{ $size }} modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header text-white" style="background: linear-gradient(135deg, #1166a3 0%, #31a8e8 100%);">
                <h5 class="modal-title fw-bold" id="{{ $id }}Label">{{ $title }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @if($formAction)
                <form action="{{ $formAction }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(in_array(strtoupper($formMethod), ['PUT', 'PATCH', 'DELETE']))
                        @method($formMethod)
                    @endif
            @endif
            
            <div class="modal-body p-4 text-start">
                {{ $slot }}
            </div>
            
            @if(isset($footer))
                <div class="modal-footer bg-light">
                    {{ $footer }}
                </div>
            @elseif($formAction)
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary rounded-pill px-4" style="background: linear-gradient(135deg, #1166a3 0%, #31a8e8 100%); border: none;">
                        @if(strtoupper($formMethod) == 'DELETE')
                            <i class="bi bi-trash me-1"></i> Confirm Delete
                        @else
                            <i class="bi bi-save me-1"></i> Save Changes
                        @endif
                    </button>
                </div>
            @endif
            @if($formAction)
                </form>
            @endif
        </div>
    </div>
</div>
