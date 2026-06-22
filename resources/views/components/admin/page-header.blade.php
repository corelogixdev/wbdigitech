@props(['title'])

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold mb-0 text-dark" style="letter-spacing: -0.5px;">{{ $title }}</h3>
    @if(isset($action))
        <div>
            {{ $action }}
        </div>
    @endif
</div>
