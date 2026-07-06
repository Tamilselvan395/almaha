@extends('layouts.app')

@section('meta_title', $detailpage->meta_title ?? '')
@section('meta_description', $detailpage->meta_description ?? '')

@section('content')
    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">{{ $detailpage->name }}</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">{{ $detailpage->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Details Section S T A R T -->
    <div class="shop-details-section section-padding fix">
        <div class="shop-details-wrapper style1">
            <div class="container">
                <div class="shop-details bg-white">
                    <div class="container">
                        <div class="row gx-60 align-items-center">
                            <div class="col-lg-6">

                                <!-- MAIN PREVIEW -->
                                <div class="product-big-img bg-color2">
                                    <div class="product-thumb" id="mainPreview">
                                        <img src="{{ Storage::url($detailpage->image[0]) }}" alt="Product Image">
                                    </div>
                                </div>

                                <!-- THUMBNAILS -->
                                <div class="product-thumbs d-flex gap-2 mt-3">

                                    @foreach ($detailpage->image as $index => $img)
                                        <div class="thumb-item {{ $index === 0 ? 'active' : '' }}" data-type="image"
                                            data-src="{{ Storage::url($img) }}">

                                            <img src="{{ Storage::url($img) }}" alt="Product Image">
                                        </div>
                                    @endforeach

                                    {{-- Optional Video Thumbnail --}}
                                    @if (!empty($detailpage->video))
                                        <div class="thumb-item video-thumb" data-type="video"
                                            data-src="{{ Storage::url($detailpage->video) }}">

                                            <span class="play-icon"><i class="fal fa-play"></i></span>
                                            <img src="{{ asset('assets/images/shop/video-thumb.png') }}" alt="Video">
                                        </div>
                                    @endif

                                </div>


                            </div>

                            <div class="col-lg-6">
                                <div class="product-about">
                                    <div class="title-wrapper">
                                        <h2 class="product-title">Product Overview</h2>
                                    </div>

                                    <div class="text product-rich-description">{!! $detailpage->description !!}</div>

                                    <div class="product-specs">

                                        <!-- TECHNICAL SPEC TABLE -->
                                        <table class="table product-spec-table table-bordered align-middle">
                                            <tbody>

                                                @if (!empty($detailpage->tiles_code))
                                                    <tr>
                                                        <th>Code</th>
                                                        <td>{{ $detailpage->tiles_code }}</td>
                                                    </tr>
                                                @endif

                                                @if (!empty($detailpage->tile_model->name))
                                                    <tr>
                                                        <th>Model</th>
                                                        <td><a href="#">{{ $detailpage->tile_model->name }}</a></td>
                                                    </tr>
                                                @endif


                                                @if (!empty($detailpage->type_of_product))
                                                    <tr>
                                                        <th>Type Of Product</th>
                                                        <td>{{ $detailpage->type_of_product }}</td>
                                                    </tr>
                                                @endif



                                                @if (!empty($detailpage->look))
                                                    <tr>
                                                        <th>Look</th>
                                                        <td>{{ $detailpage->look }}</td>
                                                    </tr>
                                                @endif



                                                @if (!empty($detailpage->color->name))
                                                    <tr>
                                                        <th>Color</th>
                                                        <td>{{ $detailpage->color->name }}</td>
                                                    </tr>
                                                @endif



                                                @if (!empty($detailpage->size->label))
                                                    <tr>
                                                        <th>Size</th>
                                                        <td>{{ $detailpage->size->label }}</td>
                                                    </tr>
                                                @endif



                                                @if (!empty($detailpage->price))
                                                    <tr>
                                                        <th>Price</th>
                                                        <td>{{ $detailpage->price }}</td>
                                                    </tr>
                                                @endif


                                            </tbody>
                                        </table>

                                        <!-- ICON FEATURES -->
                                        <div class="spec-icons">
                                            @foreach ($detailpage->features as $feature)
                                            
                                             <span class="icon-item" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="{{ $feature->name }}">
                                                <i class="{{ $feature->icon }}"></i>
                                            </span>

                                            @endforeach
                                        </div>

                                    </div>


                                    <div class="actions">
                                        <div class="btn-wrappers">
                                            <a href="{{ Storage::url($detailpage->brochure_pdf) }}" download
                                                class="btn download-btn  d-flex align-items-center gap-2">
                                                <i class="fa-solid fa-download"></i>
                                                Download
                                            </a>
                                            <!-- VIEW BUTTON -->
                                            <a href="{{ Storage::url($detailpage->brochure_pdf) }}" target="_blank"
                                                class="btn view-btn  d-flex align-items-center gap-2">
                                                <i class="fa-solid fa-eye"></i>
                                                View
                                            </a>
                                        </div>
                                    </div>
                                    <div class="share">
                                        <h6>share with friends</h6>
                                        <ul class="social-media">
                                            <!-- Telegram -->
                                            <li>
                                                <a href="https://telegram.me/share/url?url=https%3A%2F%2Fdevelopers.tecminion.com%2Falmaha%2Falmaha%2Fproduct-detail-page.php"
                                                    target="_blank" data-bs-toggle="tooltip"
                                                    data-bs-title="Share on Telegram">
                                                    <i class="fa-brands fa-telegram"></i>
                                                </a>
                                            </li>

                                            <!-- WhatsApp -->
                                            <li>
                                                <a href="https://wa.me/?text=Product+Details%20https%3A%2F%2Fdevelopers.tecminion.com%2Falmaha%2Falmaha%2Fproduct-detail-page.php"
                                                    target="_blank" data-bs-toggle="tooltip"
                                                    data-bs-title="Share on WhatsApp">
                                                    <i class="fa-brands fa-whatsapp"></i>
                                                </a>
                                            </li>

                                            <!-- Facebook -->
                                            <li>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.tecminion.com%2Falmaha%2Falmaha%2Fproduct-detail-page.php"
                                                    target="_blank" data-bs-toggle="tooltip"
                                                    data-bs-title="Share on Facebook">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            <!-- LinkedIn -->
                                            <li>
                                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Fdevelopers.tecminion.com%2Falmaha%2Falmaha%2Fproduct-detail-page.php"
                                                    target="_blank" data-bs-toggle="tooltip"
                                                    data-bs-title="Share on LinkedIn">
                                                    <i class="fa-brands fa-linkedin-in"></i>
                                                </a>
                                            </li>

                                            <!-- Copy Link -->
                                            <li>
                                                <a href="javascript:void(0)" onclick="copyPageLink()"
                                                    data-bs-toggle="tooltip" data-bs-title="Copy link">
                                                    <i class="fa-solid fa-link"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <style>
        .product-rich-description ul {
            list-style-type: disc !important;
            padding-left: 20px !important;
            margin-top: 10px !important;
            margin-bottom: 10px !important;
        }
        .product-rich-description ol {
            list-style-type: decimal !important;
            padding-left: 20px !important;
            margin-top: 10px !important;
            margin-bottom: 10px !important;
        }
        .product-rich-description li {
            display: list-item !important;
            margin-bottom: 5px !important;
        }

        .product-specs {
            margin-bottom: 20px;
        }

        .product-spec-table {
            border: 1px solid #ddd;
        }

        .product-spec-table th,
        .product-spec-table td {
            border: 1px solid #ddd;
            padding: 8px 12px;
            font-size: 14px;
        }

        .product-spec-table th {
            width: 40%;
            font-weight: 600;
            background: #f9f9f9;
            color: #333;
        }

        .product-spec-table td {
            width: 60%;
            color: #555;
        }

        .product-spec-table a {
            color: #6b1d2b;
            text-decoration: none;
        }

        .product-spec-table a:hover {
            text-decoration: underline;
        }


        /* ICONS */
        .spec-icons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 18px;
        }

        .icon-item {
            width: 38px;
            height: 38px;
            border: 1px solid #d0d0d0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: #333;
            cursor: pointer;
            transition: all 0.2s ease;
            background: #fff;
        }

        .icon-item:hover {
            background: #6b1d2b;
            color: #fff;
            border-color: #6b1d2b;
        }

        .thickness {
            font-weight: 600;
            font-size: 13px;
        }

        .thickness-icon {
            font-size: 13px;
        }

        .product-thumbs {
            flex-wrap: wrap;
        }

        .thumb-item {
            width: 80px;
            height: 80px;
            border: 2px solid transparent;
            cursor: pointer;
            position: relative;
        }

        .thumb-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .thumb-item.active {
            border-color: #000;
        }

        .video-thumb .play-icon {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: #fff;
            background: rgba(0, 0, 0, .4);
        }
    </style>

    <script>
        document.querySelectorAll('.thumb-item').forEach(item => {

            item.addEventListener('click', function() {

                const type = this.dataset.type;
                const src = this.dataset.src;
                const preview = document.getElementById('mainPreview');

                // Remove active class
                document.querySelectorAll('.thumb-item').forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                // Switch content
                if (type === 'image') {
                    preview.innerHTML = `<img src="${src}" alt="Product Image">`;
                }

                if (type === 'video') {
                    preview.innerHTML = `
                <video controls autoplay>
                    <source src="${src}" type="video/mp4">
                </video>`;
                }
            });

        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => {
                new bootstrap.Tooltip(el);
            });
        });
    </script>



@endsection
