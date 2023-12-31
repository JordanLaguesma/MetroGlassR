<!doctype html>
<html class="no-js" lang="en">

<head>
    <?= $this->include('frontend/_components/customer/head.php') ?>
</head>

<body>
    <!--====== Preloader Part Start ======-->
    <?= $this->include('frontend/_components/customer/preloader.php') ?>
    <!--====== Preloader Part Ends ======-->
    <!--====== Navbar Style 7 Part Start ======-->
    <?= $this->include('frontend/_components/customer/navbar.php') ?>
    <!--====== Navbar Style 7 Part Ends ======-->
    <!--====== Header Style 1 Part Start ======-->
    <section class="header-style-1">
        <div class="header-big">
            <div class="header-items-active">
                <?php
                $holidays = ['Holiday', 'Summer', 'Halloween'];
                for ($i = 0; $i < 3; $i++) :
                ?>
                    <div class="single-header-item bg_cover" style="background-image: url(<?= base_url("assets"); ?>/images/product/g<?= ($i + 1) ?>.png);">
                        <div class="header-item-content">
                            <h3 class="title">Don’t say it with flowers: A NOMOS glass is a gift that lasts</h3>
                            <a href="javascript:void(0)" class="link">Our <?= $holidays[$i]; ?> Day collection</a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="header-min">
            <div class="header-min-item product-style-25 bg_cover my-2 r" style="background-image: url(<?= base_url("assets"); ?>/images/product/g4.png);">
                <div class="product-content">
                    <h4 class="title"><a href="product-details-page.html">Alloy Glass</a></h4>
                    <p class="text-lead"><del>SRP $ 500</del></p>
                    <a href="javascript:void(0)" class="main-btn primary-btn-border"> <img src="<?= base_url("customer/assets"); ?>/images/icon-svg/cart-5.svg" alt="">$
                        399
                    </a>
                </div>
            </div>
            <div class="header-min-item product-style-25 bg_cover " style="background-image: url(<?= base_url("assets"); ?>/images/product/g6.png);">
                <div class="product-content">
                    <h4 class="title"><a href="product-details-page.html">Golden Smoke</a></h4>
                    <p class="text-lead"><del>SRP $ 699</del></p>
                    <a href="javascript:void(0)" class="main-btn primary-btn-border"> <img src="<?= base_url("customer/assets"); ?>/images/icon-svg/cart-5.svg" alt="">
                        $499
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--====== Header Style 1 Part Ends ======-->
    <!--====== Content Card Style 4 Part Start ======-->
    <section class="content-card-style-4 pt-70 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-content mt-15 text-center">
                        <div class="content-icon">
                            <i class="mdi mdi-truck-fast"></i>
                        </div>
                        <div class="content-content">
                            <h4 class="title"><a href="javascript:void(0)">Two-hour delivery</a></h4>
                            <p>Available in most metros on selected in-stock products</p>
                            <a href="javascript:void(0)" class="more">learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-content mt-15 text-center">
                        <div class="content-icon">
                            <i class="mdi mdi-message-text"></i>
                        </div>
                        <div class="content-content">
                            <h4 class="title"><a href="javascript:void(0)">Get help buying</a></h4>
                            <p>Have a question? Call a Specialist or chat online for help</p>
                            <a href="contact-page.html" class="more">Contact us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-content mt-15 text-center">
                        <div class="content-icon">
                            <i class="mdi mdi-ticket-percent"></i>
                        </div>
                        <div class="content-content">
                            <h4 class="title"><a href="javascript:void(0)">Find the card for you</a></h4>
                            <p>Get 3% Daily Cash with special financing offers from us</p>
                            <a href="javascript:void(0)" class="more">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Content Card Style 4 Part Ends ======-->
    <!--====== Product Style 1 Part Start ======-->
    <section class="product-wrapper pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <h1 class="heading-1 font-weight-700">Featured Items</h1>
                    </div>
                </div>
            </div>
            <!--  Remove this when the items to be featured are set and un-comment the code below (6 max) -->
            <div class="row">
                <p class="h3 text-center text-muted">To be added...</p>
            </div>
            <!-- <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 mt-30">
                        <div class="product-image">
                            <span class="icon-text text-style-1">NEW</span>
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="<?= base_url("assets"); ?>/images/product/g5.png" alt="product">
                                </div>
                                <div class="product-item">
                                    <img src="<?= base_url("customer/assets"); ?>/images/product-1/product-2.jpg" alt="product">
                                </div>
                            </div>
                            <a class="add-wishlist" href="javascript:void(0)">
                                <i class="mdi mdi-heart-outline"></i>
                            </a>
                        </div>
                        <div class="product-content text-center">
                            <h4 class="title"><a href="product-details-page.html">Glass Door</a></h4>
                            <p class="text-lead"><del>SRP $ 999</del></p>
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="<?= base_url("customer/assets"); ?>/images/icon-svg/cart-7.svg" alt="">
                                $ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 mt-30">
                        <div class="product-image">
                            <span class="icon-text text-style-1">20% off</span>
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="<?= base_url("assets"); ?>/images/product/g7.png" alt="product">
                                </div>
                                <div class="product-item">
                                    <img src="<?= base_url("customer/assets"); ?>/images/product-1/product-6.jpg" alt="product">
                                </div>
                            </div>
                            <a class="add-wishlist" href="javascript:void(0)">
                                <i class="mdi mdi-heart-outline"></i>
                            </a>
                        </div>
                        <div class="product-content text-center">
                            <h4 class="title"><a href="product-details-page.html">Window Smoke 2</a></h4>
                            <p>Reference 1103</p>
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="<?= base_url("customer/assets"); ?>/images/icon-svg/cart-7.svg" alt="">
                                $ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 mt-30">
                        <div class="product-image">
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="<?= base_url("customer/assets"); ?>/images/product-1/product-3.jpg" alt="product">
                                </div>
                                <div class="product-item">
                                    <img src="<?= base_url("customer/assets"); ?>/images/product-1/product-4.jpg" alt="product">
                                </div>
                            </div>
                            <a class="add-wishlist" href="javascript:void(0)">
                                <i class="mdi mdi-heart-outline"></i>
                            </a>
                        </div>
                        <div class="product-content text-center">
                            <h4 class="title"><a href="product-details-page.html">Casio 09 Date</a></h4>
                            <p>Reference 1112</p>
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="<?= base_url("customer/assets"); ?>/images/icon-svg/cart-7.svg" alt="">
                                $ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 mt-30">
                        <div class="product-image">
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="<?= base_url("customer/assets"); ?>/images/product-1/product-7.jpg" alt="product">
                                </div>
                                <div class="product-item">
                                    <img src="<?= base_url("customer/assets"); ?>/images/product-1/product-8.jpg" alt="product">
                                </div>
                            </div>
                            <a class="add-wishlist" href="javascript:void(0)">
                                <i class="mdi mdi-heart-outline"></i>
                            </a>
                        </div>
                        <div class="product-content text-center">
                            <h4 class="title"><a href="product-details-page.html">Man's Shoe</a></h4>
                            <p>Reference 102</p>
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="<?= base_url("customer/assets"); ?>/images/icon-svg/cart-7.svg" alt="">
                                $ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 mt-30">
                        <div class="product-image">
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="<?= base_url("customer/assets"); ?>/images/product-1/product-9.jpg" alt="product">
                                </div>
                                <div class="product-item">
                                    <img src="<?= base_url("customer/assets"); ?>/images/product-1/product-10.jpg" alt="product">
                                </div>
                            </div>
                            <a class="add-wishlist" href="javascript:void(0)">
                                <i class="mdi mdi-heart-outline"></i>
                            </a>
                        </div>
                        <div class="product-content text-center">
                            <h4 class="title"><a href="product-details-page.html">Polo T Shirt</a></h4>
                            <p>Reference 1202</p>
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="<?= base_url("customer/assets"); ?>/images/icon-svg/cart-7.svg" alt="">
                                $ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 mt-30">
                        <div class="product-image">
                            <span class="icon-text text-style-1">40% off</span>
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="<?= base_url("customer/assets"); ?>/images/product-1/product-11.jpg" alt="product">
                                </div>
                                <div class="product-item">
                                    <img src="<?= base_url("customer/assets"); ?>/images/product-1/product-12.jpg" alt="product">
                                </div>
                            </div>
                            <a class="add-wishlist" href="javascript:void(0)">
                                <i class="mdi mdi-heart-outline"></i>
                            </a>
                        </div>
                        <div class="product-content text-center">
                            <h4 class="title"><a href="product-details-page.html">Lotto T Shirt</a></h4>
                            <p>Reference 112</p>
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="<?= base_url("customer/assets"); ?>/images/icon-svg/cart-7.svg" alt="">
                                $ 399
                            </a>
                        </div>
                    </div>
                </div> -->
        </div>
        </div>
    </section>
    <!--====== Product Style 1 Part Ends ======-->
    <!--====== Product Style 7 Part Start ======-->
    <section class="product-wrapper pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <h1 class="heading-1 font-weight-700">Recent Items</h1>
                    </div>
                </div>
            </div>
            <?php
            $group_new_products = array_chunk($new_products, 2);
            foreach ($group_new_products as $row_new_product) :
                echo '<div class="row">';
                foreach ($row_new_product as $key => $result) :
            ?>
                    <div class="col-lg-6">
                        <div class="product-style-7 mt-30">
                            <div class="product-image">
                                <div class="product-active">
                                    <div class="product-item active">
                                        <img src="<?= base_url('uploads/') . esc($result->image); ?>" alt="product">
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <ul class="product-meta">
                                    <li>
                                        <a class="add-wishlist" href="javascript:void(0)">
                                            <i class="mdi mdi-heart-outline"></i>
                                            Add to Favorite
                                        </a>
                                    </li>
                                    <li>
                                        <span><i class="mdi mdi-star"></i> 0/5</span>
                                    </li>
                                </ul>
                                <h4 class="title"><a href="product_details?id=<?= esc($result->id); ?>" data-id="<?= esc($result->id); ?>"><?= esc($result->name); ?></a></h4>
                                <span class="price">₱<?= esc($result->price); ?></span>
                                <a href="javascript:void(0)" class="main-btn primary-btn add_to_cart" data-id="<?= esc($result->id); ?>" data-image="<?= esc($result->image); ?>" data-name="<?= esc($result->name); ?>" data-type="<?= esc($result->type); ?>" data-size="<?= esc($result->size); ?>" data-price="<?= esc($result->price); ?>">
                                    <img src="<?= base_url("customer/assets"); ?>/images/icon-svg/cart-4.svg" alt="">
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                endforeach; // Close the row
                echo '</div>';
            endforeach;
            ?>
        </div>
    </section>
    <!--====== Product Style 7 Part Ends ======-->
    <!--====== Footer Style 3 Part Start ======-->
    <?= $this->include('frontend/_components/customer/footer.php') ?>
    <!--====== Footer Style 3 Part Ends ======-->
    <?= $this->include('frontend/_components/customer/script.php') ?>
</body>
<!-- Backend -->
<?= $this->include('backend/customer/cart.php'); ?>

<!-- End Backend -->

</html>