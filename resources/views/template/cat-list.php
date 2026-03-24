    <?php include 'includes/header.php'; ?>

    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Shop List</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="index.php">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">Shop List</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Shop Section S T A R T -->
    <div class="shop-section section-padding fix">
        <div class="shop-wrapper style1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-8 order-1 order-md-2 wow fadeInUp" data-wow-delay=".5s">
                        <div class="shop-cards-wrapper style3">
                            <?php include 'data/products-data.php'; ?>
                            <div class="row gy-30 gx-30">
                                <?php foreach ($products as $product): ?>
                                    <div class="col-lg-6">
                                        <div class="shop-card-items overlay-card" onclick="window.location='<?= $product['slug']; ?>'">
                                            <div class="thumb">
                                                <img class="w-100" src="<?= $product['image']; ?>" alt="<?= $product['alt']; ?>">
                                            </div>
                                            <div class="content">
                                                <h3><?= $product['title']; ?></h3>
                                                <p><?= $product['desc']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php include 'includes/footer.php'; ?>

</body>

</html>