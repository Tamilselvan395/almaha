<section class="outdoor-section section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="outdoor-thumb sticky-image wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                    @php
                        $spotImg = !empty($page?->spotlight_data['image'])
                            ? (str_starts_with($page->spotlight_data['image'], 'assets/') ? asset($page->spotlight_data['image']) : Storage::url($page->spotlight_data['image']))
                            : asset($defaultImage ?? 'assets/images/products/p-3.png');
                    @endphp
                    <img src="{{ $spotImg }}" alt="{{ $page->spotlight_data['heading'] ?? $defaultHeading ?? 'Feature Spotlight' }}" class="img-fluid rounded shadow w-100">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="outdoor-content ps-lg-4">
                    <div class="section-title text-start mb-3">
                        @if(!empty($page->spotlight_data['badge'] ?? $defaultBadge))
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s">
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon">
                                {{ $page->spotlight_data['badge'] ?? $defaultBadge }}
                            </div>
                        @endif
                        <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2rem;">
                            {{ $page->spotlight_data['heading'] ?? $defaultHeading ?? 'Spotlight' }}
                        </h2>
                    </div>
                    @if(!empty($page?->spotlight_data['content']))
                        <div class="spotlight-body">
                            {!! $page->spotlight_data['content'] !!}
                        </div>
                    @else
                        {{ $slot ?? '' }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
