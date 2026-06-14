@props(['faqs' => []])

@php
    $accordionId = 'faqAccordion_' . Str::random(5);
@endphp

<div class="service-faq-container">
    <h2 class="faq-section-title">Frequently Asked Questions</h2>
    
    <div class="accordion modern-accordion" id="{{ $accordionId }}">
        @foreach($faqs as $index => $faq)
            @php
                $headingId = $accordionId . '_heading_' . $index;
                $collapseId = $accordionId . '_collapse_' . $index;
            @endphp
            <div class="accordion-item">
                <h2 class="accordion-header" id="{{ $headingId }}">
                    <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $collapseId }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="{{ $collapseId }}">
                        {!! $faq['question'] !!}
                    </button>
                </h2>
                <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="{{ $headingId }}" data-bs-parent="#{{ $accordionId }}">
                    <div class="accordion-body">
                        {!! $faq['answer'] !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
