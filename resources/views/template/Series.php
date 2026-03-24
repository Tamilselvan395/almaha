    <?php include 'includes/header.php'; ?>

    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Porcelain</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="index.php">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">Porcelain</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Section    S T A R T -->
    <div class="project-section section-padding fix">
        <div class="container-fluid">
            <?php include 'data/series.php'; ?>
            <div class="row gy-30 gx-30">

                <?php foreach ($projects as $project): ?>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-card style4">
                            <div class="project-thumb">
                                <img class="w-100 " src="<?= $project['image']; ?>"
                                    alt="<?= htmlspecialchars($project['title']); ?>">

                                <div class="content">
                                    <h3>
                                        <a href="varient.php">
                                            <?= $project['title']; ?>
                                        </a>
                                    </h3>

                                    <div class="btn-wrap">
                                        <a class="link-btn style3" href="varient.php">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <!-- Cta Section    S T A R T -->
    <!-- <section class="cta-section">
        <div class="cta-container-wrapper style3 section-padding fix" data-bg-src="assets/images/bg/ctaBg3_1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cta-wrapper  style3">
                            <div class="video-wrap ripple-effect rounded-0">
                                <a href="https://www.youtube.com/watch?v=f2Gzr8sAGB8" class="play-btn popup-video"><img
                                        class="playerImg" src="assets/images/icon/playerIcon1_1.svg" alt="icon"></a>
                            </div>
                            <h3>Need Assistance With Contemporary Tiles & Toilet Come Along With Us</h3>
                            <p>Get More Update</p>

                            <div class="btn-wrapper style2 d-block mx-auto">
                                <a href="about.html" class="theme-btn style3" style="width: 220px;">
                                    JOIN WITH US
                                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="26" viewBox="0 0 41 26"
                                        fill="none">
                                        <rect width="1" height="26" fill="#2B1E16"></rect>
                                        <path
                                            d="M40.7071 13.7071C41.0976 13.3166 41.0976 12.6834 40.7071 12.2929L34.3431 5.92893C33.9526 5.53841 33.3195 5.53841 32.9289 5.92893C32.5384 6.31946 32.5384 6.95262 32.9289 7.34315L38.5858 13L32.9289 18.6569C32.5384 19.0474 32.5384 19.6805 32.9289 20.0711C33.3195 20.4616 33.9526 20.4616 34.3431 20.0711L40.7071 13.7071ZM15 14H40V12H15V14Z"
                                            fill="#2B1E16"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Faq Section    S T A R T -->
    <!-- <section class="faq-section section-padding fix">
        <div class="container">
            <div class="faq-wrapper style1">
                <div class="faq-left">
                    <div class="section-title text-start  mt-70">
                        <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> <img class="me-1"
                                src="assets/images/shape/titleShape1_1.png" alt="icon"> OUR FAQ </div>
                        <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s"> What Are The Most Common
                            Questions? </h2>
                        <p class="desc"> There are many variations of passages of Lorem Ipsum available,lore xyz there
                            isn't anything but the majority have suffered alteration in some form,lor by ipsu injected
                            humour, </p>
                    </div>
                    <div class="faq-box style1">
                        <div class="header">
                            <div class="icon"> <img src="assets/images/icon/faqIcon1_1.svg" alt="icon"> </div>
                            <h6> <span class="counter-number"> 5 </span> <span class="counter-text"> k+ </span> Project
                                Complete</h6>
                        </div>
                        <p class="text">There are many variations a of passages of a Lorem Ipsum available,lore xyz
                            there isn't anything but the majority</p>
                    </div>
                </div>
                <div class="faq-right">
                    <div class="faq-content style1">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordion">
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false"
                                            aria-controls="faq1">
                                            01. Which Kinds Of Tiles Can You Get From A Tile Company?
                                        </button>
                                    </h5>
                                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            There are many variations of passages of Lorem Ipsum available,lore xyz
                                            there isn't anything but the majority have suffered alteration in some
                                            form,lor by ipsu injected humour,
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                            aria-controls="faq2">
                                            02. What Is The Best Way To Select Tiles For My Project?
                                        </button>
                                    </h5>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                            aria-controls="faq3">
                                            03. Exist Any Options for Eco-Friendly Tile?
                                        </button>
                                    </h5>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                            aria-controls="faq4">
                                            04. Are There Any Choices for Eco-Friendly Tile?
                                        </button>
                                    </h5>
                                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                            aria-controls="faq5">
                                            05. There Any Choices for Eco-Friendly Tile?
                                        </button>
                                    </h5>
                                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?php include 'includes/footer.php' ?>
     
</body>

</html>