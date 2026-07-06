<!DOCTYPE html>
<html lang="zxx">

<head>
    {{-- ========== Meta Tags ========== --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- ======== Page Title ============ --}}
    <title>@yield('meta_title', 'Almaha Tiles & Surface Solutions | Trusted Tile Supplier in Dubai')</title>

    <meta name="author" content="Gramentheme">
    <meta name="description" content="@yield('meta_description', 'Almaha is a trusted supplier of premium tiles, sanitary ware, marbles, and surface solutions in Dubai and the UAE, delivering quality materials and reliable service.')">

    <!-- Canonical Link -->
    <link rel="canonical" href="{{ url()->current() }}">
    {{-- Open Graph Meta Tags --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Almaha Tiles & Surface Solutions | Trusted Tile Supplier in Dubai')">
    <meta property="og:description" content="@yield('meta_description', 'Almaha is a trusted supplier of premium tiles, sanitary ware, marbles, and surface solutions in Dubai and the UAE, delivering quality materials and reliable service.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Almaha">
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}">
    <meta property="og:locale" content="en_US">

    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Almaha Tiles & Surface Solutions | Trusted Tile Supplier in Dubai')">
    <meta name="twitter:description" content="@yield('meta_description', 'Almaha is a trusted supplier of premium tiles, sanitary ware, marbles, and surface solutions in Dubai and the UAE, delivering quality materials and reliable service.')">
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.jpg') }}">
    <meta name="twitter:site" content="@almaha">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/almaha-logo.png') }}">

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">


    {{-- null value issue resolved --}}
    {!! $meta_details->all_page_scheme ?? '' !!}

    @yield('schema')

    {{-- Page-specific styles --}}
    @stack('styles')

</head>

<body>
    <!-- Mouse Cursor Start -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-solid fa-chevron-up"></i>
    </button>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo/almaha-logo.png') }}" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- <p class="text d-none d-xl-block">
                    Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a
                    feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                </p> -->
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="https://maps.app.goo.gl/RBaGju2eCJrMF5ET8">Amman St, Al
                                        Qusais Ind. Third, Dubai, UAE</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@mahabldg.com"><span>info@mahabldg.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a  href="#">Mod-friday, 09am -06pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+97142671988">+971 4 267 1988</a>
                                </div>
                            </li>
                        </ul>
                        <div class="social-icon d-flex align-items-center">
                            <a href="https://www.facebook.com/share/1RrAASitd1/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/almahainternationalbuilding/"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    <header class="">
        <div id="header-sticky">
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="{{ route('home') }}" class="header-logo">
                                    <img src="{{ asset('assets/images/logo/almaha-logo.png') }}" alt="logo-img">
                                </a>
                            </div>
                        </div>
                        <div class="header-middle">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            {{-- <li>
                                                <a href="{{ route('categories') }}">
                                                    Products
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    @foreach ($categorys as $category) --}}
                                            {{-- <li><a
                                                                href="{{ route('tiles', ['categories' => $category->slug]) }}">{{ $category->name }}</a>
                                                        </li> --}}
                                            {{-- <li><a
                                                                href="{{ Storage::url($category->pdf_image)}}" >{{ $category->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li> --}}

                                            <li>
                                                <a href="{{ route('categories') }}">
                                                    Products
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="{{ route('porcelain') }}" >Porcelain
                                                            Tiles</a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('swimming-pool-tiles') }}"
                                                            >Swimming Pool Tiles</a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('cladding-tiles-fixing') }}"
                                                            >Cladding Tiles with Fixing</a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('sanitary-ware') }}"
                                                            >Sanitary Ware</a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('roofing-materials-dubai') }}"
                                                            >Roofing Materials in Dubai</a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('marble-granite') }}"
                                                            >Marble and Granite</a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('solid-surface-filler-sheets') }}"
                                                            >Solid Surface Filler and Sheets</a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('interior-tiles-glue') }}"
                                                            >Interior Tiles Glue</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <!-- <li>
                                            <a href="/services">
                                                Services
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="/services/tiles-fixing">Tiles Fixing</a></li>
                                                <li><a href="/services/cladding-installation">Cladding Installation</a></li>
                                                <li><a href="/services/technical-support">Technical Support</a></li>
                                            </ul>
                                        </li> -->
                                            <li><a href="{{ route('blog') }}">Blogs</a></li>
                                            <li>
                                                <a href="{{ route('contact') }}">Contact Us</a>
                                            </li>
                                        </ul>

                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="header-button">
                                <div class="btn-wrapper">
                                    <a href="{{ route('contact') }}"> <span class="theme-btn"> GET A QUOTE
                                        </span> </a>
                                </div>
                            </div>
                            <div class="header__hamburger d-block d-xl-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')


    <!-- Footer Section    S T A R T -->
    <footer class="footer-section position-relative bg-color1">
        <div class="footer-thumb"><img src="{{ asset('assets/images/normal/footerThumb1_1.png') }}" alt="thumb">
        </div>

        <div class="footer-widgets-wrapper fix">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/images/logo/almaha-logo.png') }}" alt="logo-img">
                                </a>
                            </div>
                            <div class="footer-content">
                                <p>Almaha supplies premium tiles and surface materials across Dubai and the UAE, trusted
                                    for quality, reliability, and professional service.</p>
                                <div class="social-icon d-flex align-items-center">
                                    <a href="https://www.facebook.com/share/1RrAASitd1/"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/almahainternationalbuilding/"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3> <img class="me-1"
                                        src="{{ asset('assets/images/shape/footertitleShape1_1.png') }}"
                                        alt="shape">
                                    Quick Link </h3>
                            </div>
                            <ul class="list-area">
                                <li><a href="{{ route('home') }}"><i class="fa-solid fa-chevrons-right"></i>Home</a>
                                </li>
                                <li><a href="{{ route('about') }}"><i class="fa-solid fa-chevrons-right"></i>About
                                        Us</a></li>
                                <li><a href="{{ route('categories') }}"><i
                                            class="fa-solid fa-chevrons-right"></i>Products</a></li>
                                <li><a href="{{ route('contact') }}"><i
                                            class="fa-solid fa-chevrons-right"></i>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3> <img class="me-1"
                                        src="{{ asset('assets/images/shape/footertitleShape1_1.png') }}"
                                        alt="shape">
                                    Services </h3>
                            </div>
                            {{-- <ul class="list-area">
                                @foreach ($categorys as $category)
                                    <li><a
                                            href="{{ route('tiles', ['categories' => $category->slug]) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul> --}}

                            <ul class="list-area">
                                <li>
                                    <a href="{{ route('porcelain') }}" >Porcelain
                                        Tiles</a>
                                </li>

                                <li>
                                    <a href="{{ route('swimming-pool-tiles') }}" >Swimming Pool
                                        Tiles</a>
                                </li>

                                <li>
                                    <a href="{{ route('cladding-tiles-fixing') }}" >Cladding Tiles
                                        with Fixing</a>
                                </li>

                                <li>
                                    <a href="{{ route('sanitary-ware') }}" >Sanitary Ware</a>
                                </li>

                                <li>
                                    <a href="{{ route('roofing-materials-dubai') }}" >Roofing
                                        Materials in Dubai</a>
                                </li>

                                <li>
                                    <a href="{{ route('marble-granite') }}" >Marble and Granite</a>
                                </li>

                                <li>
                                    <a href="{{ route('solid-surface-filler-sheets') }}" >Solid
                                        Surface Filler and Sheets</a>
                                </li>

                                <li>
                                    <a href="{{ route('interior-tiles-glue') }}" >Interior Tiles
                                        Glue</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6  wow fadeInUp" data-wow-delay=".6s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3> <img class="me-1"
                                        src="{{ asset('assets/images/shape/footertitleShape1_1.png') }}"
                                        alt="shape">
                                    Get In Touch </h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <div class="title">
                                        <a href="https://maps.app.goo.gl/RBaGju2eCJrMF5ET8">
                                            <span class="text-theme-color me-1">
                                                <i class="fa-regular fa-location-dot"></i> </span>
                                            Amman St, Al Qusais Ind. Third, Dubai, UAE
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <a href="tel:+97142671988">
                                            <span class="text-theme-color me-1"> <i class="fa-regular fa-phone"></i>
                                            </span>
                                            +971 4 267 1988
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <a href="mailto:info@mahabldg.com">
                                            <span class="text-theme-color me-1"> <i
                                                    class="fa-regular fa-envelope"></i> </span>
                                            info@mahabldg.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-color2">
            <div class="container">
                <div class="footer-wrapper d-flex align-items-center justify-content-between">
                    <p class="wow fadeInLeft" data-wow-delay=".3s">
                        © All Copyright {{ date('Y') }} by Almaha
                    </p>
                    <ul class="brand-logo wow fadeInRight" data-wow-delay=".5s">
                        <li>
                            <a class="text-white" href="{{ route('contact') }}">
                                Terms & Condition
                            </a>
                        </li>
                        <li>
                            <a class="text-white" href="{{ route('contact') }}">
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a class="text-white" href="{{ route('contact') }}">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- All JS Plugins -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Waypoints JS -->
    <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>

    <!-- Counterup JS -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

    <!-- Viewport JS -->
    <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>

    <!-- Tilt JS -->
    <script src="{{ asset('assets/js/tilt.min.js') }}"></script>

    <!-- Swiper Slider JS -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <!-- MeanMenu JS -->
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>

    <!-- Magnific Popup JS -->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>

    <!-- Wow Animation JS -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <!-- Nice Select JS -->
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @if (session('success'))
        <!-- Sweet Popup Container -->
        <div id="sweetPopup" class="sweet-popup">
            <div class="popup-content">
                <div class="popup-icon">👍</div>
                <h3 class="popup-title">Thank You!</h3>
                <p class="popup-message">
                    {{ session('success') }}
                </p>
                <button class="popup-close">Got it!</button>
            </div>
        </div>
    @endif

    @if (
        $errors->has('name') ||
            $errors->has('email') ||
            $errors->has('country_code') ||
            $errors->has('number') ||
            $errors->has('message'))
        <div id="sweetPopup" class="sweet-popup">
            <div class="popup-content">
                <div class="popup-icon">👎</div>

                <h3 class="popup-title">Error</h3>

                <p class="popup-message">
                    @error('name')
                        {{ $message }} <br>
                    @enderror
                    @error('email')
                        {{ $message }} <br>
                    @enderror
                    @error('country_code')
                        {{ $message }} <br>
                    @enderror
                    @error('number')
                        {{ $message }} <br>
                    @enderror
                    @error('message')
                        {{ $message }} <br>
                    @enderror
                </p>

                <button class="popup-close">Got it!</button>
            </div>
        </div>
    @endif


    @if (session('success') ||
            $errors->has('name') ||
            $errors->has('email') ||
            $errors->has('country_code') ||
            $errors->has('number') ||
            $errors->has('message'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const popup = document.getElementById("sweetPopup");
                popup.style.display = "flex";

                // Close button
                document.querySelector(".popup-close").addEventListener("click", function() {
                    popup.style.display = "none";
                });

                // Click outside popup
                popup.addEventListener("click", function(e) {
                    if (e.target === popup) {
                        popup.style.display = "none";
                    }
                });

                // Auto close after 5 sec
                setTimeout(() => {
                    popup.style.display = "none";
                }, 10000);
            });
        </script>
    @endif

</body>

</html>
