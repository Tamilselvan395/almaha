<section class="faq-section section-padding bg-white">
    <div class="container">
        <div class="section-title text-center mb-50 mxw-660 mx-auto">
            <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s">
                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon">
                {{ $page->faq_data['badge'] ?? $defaultBadge ?? 'FAQ' }}
                <img class="ms-1" src="{{ asset('assets/images/shape/titleShape1_2.png') }}" alt="icon">
            </div>
            <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">
                {{ $page->faq_data['heading'] ?? $defaultHeading ?? 'Frequently Asked Questions' }}
            </h2>
            @if(!empty($page->faq_data['description'] ?? $defaultDescription))
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">
                    {{ $page->faq_data['description'] ?? $defaultDescription }}
                </p>
            @endif
        </div>

        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="{{ $accordionId ?? 'productFaqAccordion' }}">
                    @if(!empty($page?->faq_data['items']) && is_array($page->faq_data['items']))
                        @foreach($page->faq_data['items'] as $index => $faq)
                            <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".{{ min(($index + 2), 9) }}s">
                                <h2 class="accordion-header" id="faqHeading{{ $index }}">
                                    <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }} font-weight-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faqCollapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                        aria-controls="faqCollapse{{ $index }}" style="font-weight: 600;">
                                        {{ $faq['question'] ?? '' }}
                                    </button>
                                </h2>
                                <div id="faqCollapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                    aria-labelledby="faqHeading{{ $index }}" data-bs-parent="#{{ $accordionId ?? 'productFaqAccordion' }}">
                                    <div class="accordion-body text-muted">
                                        {{ $faq['answer'] ?? '' }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        {{ $slot ?? '' }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
