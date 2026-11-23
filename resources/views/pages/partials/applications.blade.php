<section class="applications-section section-padding bg-theme2">
    <div class="container">
        <div class="section-title text-center mb-50 mxw-660 mx-auto">
            <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s">
                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon">
                {{ $page->apps_data['badge'] ?? $defaultBadge ?? 'APPLICATIONS' }}
                <img class="ms-1" src="{{ asset('assets/images/shape/titleShape1_2.png') }}" alt="icon">
            </div>
            <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">
                {{ $page->apps_data['heading'] ?? $defaultHeading ?? 'Applications' }}
            </h2>
            @if(!empty($page->apps_data['description'] ?? $defaultDescription))
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">
                    {{ $page->apps_data['description'] ?? $defaultDescription }}
                </p>
            @endif
        </div>

        <div class="row gy-4">
            @if(!empty($page?->apps_data['items']) && is_array($page->apps_data['items']))
                @foreach($page->apps_data['items'] as $index => $item)
                    <div class="col-lg-4">
                        <div class="card h-100 border-0 rounded shadow-sm p-4 bg-white wow fadeInUp" data-wow-delay=".{{ ($index + 2) }}s">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center mb-3">
                                    <span class="text-theme-color me-3" style="font-size: 1.8rem;">
                                        <i class="{{ $item['icon'] ?? 'fas fa-building' }}"></i>
                                    </span>
                                    <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0; color: #333;">
                                        {{ $item['title'] ?? '' }}
                                    </h3>
                                </div>
                                <ul class="list-unstyled mb-0">
                                    @php
                                        $points = is_array($item['points'] ?? null)
                                            ? $item['points']
                                            : (is_string($item['points'] ?? null) ? preg_split('/\r\n|\r|\n/', $item['points']) : []);
                                    @endphp
                                    @foreach($points as $pt)
                                        @if(trim($pt))
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                                <span>{{ trim($pt) }}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                {{ $slot ?? '' }}
            @endif
        </div>
    </div>
</section>
