<?php
require_once 'includes/header.php';

$currentUrl = current_url(); // from config.php
$pageTitle  = $pageTitle ?? 'Product Details';

// Encode once
$encodedUrl   = urlencode($currentUrl);
$encodedTitle = urlencode($pageTitle);

$telegramShare  = 'https://telegram.me/share/url?url=' . $encodedUrl;

$whatsappShare  = 'https://wa.me/?text=' . $encodedTitle . '%20' . $encodedUrl;

$facebookShare  = 'https://www.facebook.com/sharer/sharer.php?u=' . $encodedUrl;

$twitterShare   = 'https://twitter.com/intent/tweet?url=' . $encodedUrl . '&text=' . $encodedTitle;

$linkedinShare  = 'https://www.linkedin.com/sharing/share-offsite/?url=' . $encodedUrl;



?>

<!-- Breadcumb Section  S T A R T -->
<div class="breadcumb-section">
    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Alpine Grey</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.php">Home</a></li>
                            <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                            <li class="active">Alpine Grey</li>
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
                                    <img src="https://www.newker.com/en/wp-content/uploads/sites/2/2022/08/Alpine-Grey-60x120-en-O60IVlmilYYYPO5O-550x275.jpg" alt="Product Image">
                                </div>
                            </div>

                            <!-- THUMBNAILS -->
                            <div class="product-thumbs d-flex gap-2 mt-3">

                                <!-- Image Thumb -->
                                <div class="thumb-item active"
                                    data-type="image"
                                    data-src="assets/images/shop/shopDetailsThumb1_1.png">
                                    <img src="assets/images/shop/shopDetailsThumb1_1.png" alt="">
                                </div>

                                <div class="thumb-item"
                                    data-type="image"
                                    data-src="assets/images/shop/shopDetailsThumb1_2.png">
                                    <img src="assets/images/shop/shopDetailsThumb1_2.png" alt="">
                                </div>

                                <!-- Video Thumb -->
                                <div class="thumb-item video-thumb"
                                    data-type="video"
                                    data-src="assets/videos/product-demo.mp4">
                                    <span class="play-icon"><i class="fal fa-play"></i></span>
                                    <img src="assets/images/shop/video-thumb.png" alt="">
                                </div>



                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="product-about">
                                <div class="title-wrapper">
                                    <h2 class="product-title">Product Overview</h2>
                                </div>

                                <p class="text">Alpine Grey 60×120 porcelain tiles feature a modern stone-look finish with durable, long-lasting performance for residential and commercial spaces.</p>

                                <div class="product-specs">

                                    <!-- TECHNICAL SPEC TABLE -->
                                    <table class="table product-spec-table table-bordered align-middle">
                                        <tbody>
                                            <tr>
                                                <th>Code</th>
                                                <td>251101</td>
                                            </tr>

                                            <tr>
                                                <th>Series</th>
                                                <td><a href="#">Atenas</a></td>
                                            </tr>

                                            <tr>
                                                <th>Type Of Product</th>
                                                <td>Rev. base</td>
                                            </tr>

                                            <tr>
                                                <th>Look</th>
                                                <td>Marble</td>
                                            </tr>

                                            <tr>
                                                <th>Color</th>
                                                <td>Ivory</td>
                                            </tr>

                                            <tr>
                                                <th>Size</th>
                                                <td>120 × 280 RC</td>
                                            </tr>

                                            <tr>
                                                <th>Price Group</th>
                                                <td>M74</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- ICON FEATURES -->
                                    <div class="spec-icons">

                                        <span class="icon-item" data-bs-toggle="tooltip" data-bs-title="Porcelain">
                                            <i class="fa-solid fa-p"></i>
                                        </span>

                                        <span class="icon-item" data-bs-toggle="tooltip" data-bs-title="Floor & Wall">
                                            <i class="fa-solid fa-layer-group"></i>
                                        </span>

                                        <span class="icon-item" data-bs-toggle="tooltip" data-bs-title="Rectified">
                                            <i class="fa-solid fa-r"></i>
                                        </span>

                                        <span class="icon-item" data-bs-toggle="tooltip" data-bs-title="Slip Resistant">
                                            <i class="fa-solid fa-shoe-prints"></i>
                                        </span>

                                        <span class="icon-item" data-bs-toggle="tooltip" data-bs-title="Large Format">
                                            <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                        </span>

                                        <span class="icon-item thickness-icon" data-bs-toggle="tooltip" data-bs-title="Thickness 6mm">
                                            <span class="thickness">6</span>
                                        </span>

                                    </div>

                                </div>


                                <div class="actions">

                                    <!-- <div class="btn-wrappers">
                                            <a href="assets/catalogs/porcelain-tiles.pdf"
                                            download
                                            class="theme-btn style3 d-flex align-items-center gap-2">
                                                <i class="fa-solid fa-download"></i>
                                                Download
                                            </a>
                                            <a href="assets/catalogs/porcelain-tiles.pdf"
                                            target="_blank"
                                            class="theme-btn style3 d-flex align-items-center gap-2">
                                                <i class="fa-solid fa-eye"></i>
                                                View
                                            </a>
                                        </div> -->
                                    <div class="btn-wrappers">
                                        <a href="assets/catalogs/porcelain-tiles.pdf"
                                            download
                                            class="btn download-btn  d-flex align-items-center gap-2">
                                            <i class="fa-solid fa-download"></i>
                                            Download
                                        </a>
                                        <!-- VIEW BUTTON -->
                                        <a href="assets/catalogs/porcelain-tiles.pdf"
                                            target="_blank"
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
                                            <a href="<?= $telegramShare ?>" target="_blank"
                                                data-bs-toggle="tooltip" data-bs-title="Share on Telegram">
                                                <i class="fa-brands fa-telegram"></i>
                                            </a>
                                        </li>

                                        <!-- WhatsApp -->
                                        <li>
                                            <a href="<?= $whatsappShare ?>" target="_blank"
                                                data-bs-toggle="tooltip" data-bs-title="Share on WhatsApp">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </a>
                                        </li>

                                        <!-- Facebook -->
                                        <li>
                                            <a href="<?= $facebookShare ?>" target="_blank"
                                                data-bs-toggle="tooltip" data-bs-title="Share on Facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>

                                        <!-- LinkedIn -->
                                        <li>
                                            <a href="<?= $linkedinShare ?>" target="_blank"
                                                data-bs-toggle="tooltip" data-bs-title="Share on LinkedIn">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                        </li>

                                        <!-- Copy Link -->
                                        <li>
                                            <a href="javascript:void(0)"
                                                onclick="copyPageLink()"
                                                data-bs-toggle="tooltip"
                                                data-bs-title="Copy link">
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


<?php include 'includes/footer.php'; ?>
<script>
    // Initialize all tooltips
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => {
        new bootstrap.Tooltip(el);
    });

    // Copy link logic
    document.getElementById('copyLinkBtn').addEventListener('click', function() {
        const url = "<?= $currentUrl ?>";
        const tooltip = bootstrap.Tooltip.getInstance(this);

        navigator.clipboard.writeText(url).then(() => {
            // Change ONLY copy tooltip
            this.setAttribute('data-bs-title', 'Copied');
            tooltip.setContent({
                '.tooltip-inner': 'Copied'
            });
            tooltip.show();

            // Reset after 1.5s
            setTimeout(() => {
                this.setAttribute('data-bs-title', 'Copy link');
                tooltip.setContent({
                    '.tooltip-inner': 'Copy link'
                });
                tooltip.hide();
            }, 1500);
        });
    });
</script>
<style>
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

</body>

</html>