<section class="specs-section section-padding bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="specs-thumb wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                    @php
                        $specImg = !empty($page?->specs_data['image'])
                            ? (str_starts_with($page->specs_data['image'], 'assets/') ? asset($page->specs_data['image']) : Storage::url($page->specs_data['image']))
                            : asset($defaultImage ?? 'assets/images/products/p-2.png');
                    @endphp
                    <img src="{{ $specImg }}" alt="{{ $page->specs_data['heading'] ?? $defaultHeading ?? 'Specifications' }}" class="img-fluid rounded shadow w-100">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="specs-content pe-lg-4">
                    <div class="section-title text-start mb-4">
                        <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s">
                            <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon">
                            {{ $page->specs_data['badge'] ?? $defaultBadge ?? 'SPECIFICATIONS' }}
                        </div>
                        <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s">
                            {{ $page->specs_data['heading'] ?? $defaultHeading ?? 'Product Specifications' }}
                        </h2>
                        @if(!empty($page->specs_data['description'] ?? $defaultDescription))
                            <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                                {{ $page->specs_data['description'] ?? $defaultDescription }}
                            </p>
                        @endif
                    </div>

                    <div class="specs-grid wow fadeInUp" data-wow-delay=".6s">
                        @if(!empty($page?->specs_data['items']) && is_array($page->specs_data['items']))
                            @foreach($page->specs_data['items'] as $item)
                                <div class="spec-item d-flex align-items-center mb-3 p-3 rounded" style="background-color: var(--theme2);">
                                    <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;">
                                        <i class="{{ $item['icon'] ?? 'fas fa-layer-group' }}"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1" style="font-weight: 600; color: #333;">{{ $item['label'] ?? '' }}</h5>
                                        <p class="mb-0 text-muted" style="font-size: 0.9rem;">{{ $item['value'] ?? '' }}</p>
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
    </div>
</section>
