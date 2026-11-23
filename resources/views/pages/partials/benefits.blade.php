<section class="benefits-section section-padding bg-theme2">
    <div class="container">
        <div class="section-title text-center mb-50 mxw-660 mx-auto">
            <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s">
                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon">
                {{ $page->benefits_data['badge'] ?? $defaultBadge ?? 'BENEFITS' }}
                <img class="ms-1" src="{{ asset('assets/images/shape/titleShape1_2.png') }}" alt="icon">
            </div>
            <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">
                {{ $page->benefits_data['heading'] ?? $defaultHeading ?? 'Key Benefits' }}
            </h2>
            @if(!empty($page->benefits_data['description'] ?? $defaultDescription))
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">
                    {{ $page->benefits_data['description'] ?? $defaultDescription }}
                </p>
            @endif
        </div>

        <div class="row gy-4">
            @if(!empty($page?->benefits_data['items']) && is_array($page->benefits_data['items']))
                @foreach($page->benefits_data['items'] as $index => $item)
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".{{ min(($index % 6 + 2), 9) }}s">
                            <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                                <i class="{{ $item['icon'] ?? 'fas fa-check-circle' }}"></i>
                            </div>
                            <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">{{ $item['title'] ?? '' }}</h4>
                            <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">{{ $item['description'] ?? '' }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                {{ $slot ?? '' }}
            @endif
        </div>
    </div>
</section>
