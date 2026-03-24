<?php
require_once __DIR__ . '/config.php';

$pageTitle = $pageTitle ?? 'Product Details';
$currentUrl = current_url();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Gramentheme">
    <meta name="description" content="Almaha is a trusted supplier of premium tiles, sanitary ware, marbles, and surface solutions in Dubai and the UAE, delivering quality materials and reliable service.">
    <!-- ======== Page title ============ -->
    <title>Almaha Tiles & Surface Solutions | Trusted Tile Supplier in Dubai</title>


    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Almaha Tiles & Surface Solutions | Trusted Tile Supplier in Dubai">
    <meta property="og:description" content="Almaha is a trusted supplier of premium tiles, sanitary ware, marbles, and surface solutions in Dubai and the UAE, delivering quality materials and reliable service.">
    <meta property="og:url" content="https://developers.tecminion.com/almaha/assets/images/og-image.jpg">
    <meta property="og:site_name" content="Almaha">
    <meta property="og:image" content="https://developers.tecminion.com/">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Almaha Tiles & Surface Solutions | Trusted Tile Supplier in Dubai">
    <meta name="twitter:description" content="Premium tiles, sanitary ware, marbles, and surface solutions supplied across Dubai and the UAE by Almaha.">
    <meta name="twitter:image" content="https://developers.tecminion.com/almaha/assets/images/og-image.jpg">
    <meta name="twitter:site" content="@almaha">


    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/images/logo/almaha-logo.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Magnific popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< NiceSelect.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
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
                        <a href="index.php">
                            <img src="assets/images/logo/almaha-logo.png" alt="logo-img">
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
                                <a target="_blank" href="https://maps.app.goo.gl/RBaGju2eCJrMF5ET8">Amman St, Al Qusais Ind. Third, Dubai, UAE</a>
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
                                <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
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
                        <a href="https://www.instagram.com/almahainternationalbuilding/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Header Section Start -->
<header class="">
    <div id="header-sticky" >
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="index.php" class="header-logo">
                                <img src="assets/images/logo/almaha-logo.png" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="header-middle">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About Us</a></li>
                                        <li>
                                            <a href="cat-list.php">
                                                Products
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="Series.php">Porcelain Tiles</a></li>
                                                <li><a href="Series.php">Swimming Pool Tiles</a></li>
                                                <li><a href="Series.php">Cladding Tiles with Fixing</a></li>
                                                <li><a href="Series.php">Sanitary Ware</a></li>
                                                <li><a href="Series.php">Roofing</a></li>
                                                <li><a href="Series.php">Marbles & Granite</a></li>
                                                <li><a href="Series.php">Solid Surface Filler & Sheets</a></li>
                                                <li><a href="Series.php">Interior Tiles Glue</a></li>
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

                                        <li>
                                            <a href="/contact-us">Contact Us</a>
                                        </li>
                                    </ul>

                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="header-button">
                            <div class="btn-wrapper">
                                <a href="contact.php"> <span class="theme-btn"> GET A QUOTE
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
<body>