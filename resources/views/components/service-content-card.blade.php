@props(['title' => ''])

<div class="service-content-card">
    @if($title)
        <h2 class="scc-title">{{ $title }}</h2>
    @endif
    <div class="scc-body">
        {{ $slot }}
    </div>
</div>
