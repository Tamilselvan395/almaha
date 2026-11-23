<section class="about-section section-padding bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-thumb wow fadeInUp" data-wow-delay=".3s">
                    @php
                        $introImg = !empty($page?->intro_image)
                            ? (str_starts_with($page->intro_image, 'assets/') ? asset($page->intro_image) : Storage::url($page->intro_image))
                            : asset($defaultImage ?? 'assets/images/products/p-1.png');
                    @endphp
                    <img src="{{ $introImg }}" alt="{{ $page->heading ?? $defaultHeading ?? 'Product Overview' }}" class="img-fluid rounded shadow w-100">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content ps-lg-4">
                    <div class="section-title text-start mb-3">
                        <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s">
                            <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon">
                            {{ $page->subtitle ?? $defaultBadge ?? 'PREMIUM COLLECTION' }}
                        </div>
                        <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2.2rem; line-height: 1.2;">
                            {{ $page->heading ?? $defaultHeading ?? 'Product Heading' }}
                        </h2>
                        @if(!empty($page?->subheading ?? $defaultSubheading))
                            <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".6s" style="font-size: 1.25rem; font-weight: 700; color: #333;">
                                {{ $page->subheading ?? $defaultSubheading }}
                            </h4>
                        @endif
                    </div>
                    @if(!empty($page?->content))
                        <div class="desc wow fadeInUp text-justify" data-wow-delay=".7s">
                            {!! $page->content !!}
                        </div>
                    @else
                        {{ $slot ?? '' }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
