<section class="why-choose-section section-padding bg-theme2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-2">
                <div class="why-choose-thumb sticky-image wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                    @php
                        $whyImg = !empty($page?->why_data['image'])
                            ? (str_starts_with($page->why_data['image'], 'assets/') ? asset($page->why_data['image']) : Storage::url($page->why_data['image']))
                            : asset($defaultImage ?? 'assets/images/products/p-4.png');
                    @endphp
                    <img src="{{ $whyImg }}" alt="{{ $page->why_data['heading'] ?? $defaultHeading ?? 'Why Choose Us' }}" class="img-fluid rounded shadow w-100">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="why-choose-content pe-lg-4">
                    <div class="section-title text-start mb-3">
                        <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s">
                            <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon">
                            {{ $page->why_data['badge'] ?? $defaultBadge ?? 'WHY CHOOSE US' }}
                        </div>
                        <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2rem;">
                            {{ $page->why_data['heading'] ?? $defaultHeading ?? 'Why Choose Al Maha' }}
                        </h2>
                    </div>
                    @if(!empty($page->why_data['description']))
                        <div class="desc wow fadeInUp text-justify" data-wow-delay=".4s">
                            {!! nl2br(e($page->why_data['description'])) !!}
                        </div>
                    @endif

                    @if(!empty($page?->why_data['items']) && is_array($page->why_data['items']))
                        <ul class="list-unstyled mt-4 wow fadeInUp" data-wow-delay=".6s">
                            @foreach($page->why_data['items'] as $item)
                                <li class="mb-3 d-flex align-items-start">
                                    <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;">
                                        <i class="fas fa-check-circle"></i>
                                    </span>
                                    <div>
                                        <strong>{{ $item['title'] ?? '' }}:</strong> {{ $item['description'] ?? '' }}
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        {{ $slot ?? '' }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
