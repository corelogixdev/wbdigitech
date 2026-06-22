@props(['url' => null, 'target' => null])
@php
    $href = $url ?? '#';
    $attrs = $target ? "data-bs-toggle=\"modal\" data-bs-target=\"#$target\"" : "";
@endphp
<a href="{{ $href }}" {!! $attrs !!} class="btn btn-primary shadow-lg d-flex align-items-center justify-content-center" title="Add New Record" style="position: fixed; bottom: 40px; right: 40px; width: 65px; height: 65px; border-radius: 50%; z-index: 1050; background: linear-gradient(135deg, #1166a3 0%, #31a8e8 100%); border: none; transition: transform 0.2s ease;">
    <i class="bi bi-plus-lg text-white" style="font-size: 1.8rem;"></i>
</a>
