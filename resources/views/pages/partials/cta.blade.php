<section class="cta-section pt-5 pb-5 fix" style="background-color: var(--theme); color: white;">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-lg-8">
                <h3 class="text-white mb-2" style="font-size: 1.8rem; font-weight: 700; font-family: inherit;">
                    {{ $page->cta_data['heading'] ?? $defaultHeading ?? 'Ready to upgrade with premium materials?' }}
                </h3>
                <p class="mb-0 text-white-50" style="font-size: 1.05rem;">
                    {{ $page->cta_data['description'] ?? $defaultDescription ?? 'Al Maha building materials has the largest collection in Dubai. Sourced direct, priced competitively.' }}
                </p>
            </div>
            <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0">
                <a href="{{ $page->cta_data['button_url'] ?? $defaultButtonUrl ?? route('contact') }}">
                    <span class="theme-btn bg-white text-dark"
                        style="color: var(--theme) !important; background: white !important; font-weight: bold; border: 1px solid white;">
                        {{ $page->cta_data['button_text'] ?? $defaultButtonText ?? 'GET A QUOTE' }}
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
