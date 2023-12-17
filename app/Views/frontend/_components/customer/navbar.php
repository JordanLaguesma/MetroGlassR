<div class="navigation">
    <header class="navbar-style-7 position-relative">
        <div class="container">
            <!-- navbar mobile Start -->
            <div class="navbar-mobile d-lg-none">
                <div class="row align-items-center">
                    <div class="col-3">
                        <!-- navbar cart start -->
                        <div class="navbar-toggle icon-text-btn">
                            <a class="icon-btn primary-icon-text mobile-menu-open-7" href="javascript:void(0)">
                                <i class="mdi mdi-menu"></i>
                            </a>
                        </div>
                        <!-- navbar cart Ends -->
                    </div>
                    <div class="col-6">
                        <!-- desktop logo Start -->
                        <div class="mobile-logo text-center">
                            <a href="home"><img src="<?= base_url("assets"); ?>/images/logo/metro_logo.png" alt="Logo"></a>
                        </div>
                        <!-- desktop logo Ends -->
                    </div>
                    <div class="col-3">
                        <!-- navbar cart start -->
                        <?= $this->include('frontend/_components/customer/nav_elements/cart-mobile.php'); ?>
                        <!-- navbar cart Ends -->
                    </div>
                </div>
                <!-- navbar search start -->
                <div class="navbar-search mt-15 search-style-5">
                    <div class="search-select">
                        <select>
                            <option value="">All</option>
                            <option value="1">option 01</option>
                            <option value="2">option 02</option>
                            <option value="3">option 03</option>
                            <option value="4">option 04</option>
                            <option value="5">option 05</option>
                        </select>
                    </div>
                    <div class="search-input">
                        <input type="text" placeholder="Search">
                    </div>
                    <div class="search-btn">
                        <button><i class="lni lni-search-alt"></i></button>
                    </div>
                </div>
                <!-- navbar search Ends -->
            </div>
            <!-- navbar mobile Ends -->
        </div>
        <div class="navbar-container navbar-sidebar-7">
            <!-- navbar close  Ends -->
            <div class="navbar-close d-lg-none">
                <a class="close-mobile-menu-7" href="javascript:void(0)"><i class="mdi mdi-close"></i></a>
            </div>
            <!-- navbar close  Ends -->
            <!-- main navbar Start -->
            <div class="navbar-wrapper">
                <div class="container-lg">
                    <nav class="main-navbar d-lg-flex justify-content-between align-items-center">
                        <!-- desktop logo Start -->
                        <div class="desktop-logo d-none d-lg-block">
                            <a href="home"><img src="<?= base_url("assets"); ?>/images/logo/metro_logo.png" alt="Logo" style="height: 50px; width: 50px;" class=""></a>
                        </div>
                        <!-- desktop logo Ends -->
                        <!-- navbar menu Start -->
                        <div class="navbar-menu">
                            <ul class="main-menu">
                                <li><a href="">Sale</a></li>
                                <li class="position-static menu-item-has-children">
                                    <a href="#">Category</a>
                                    <!-- sub mega dropdown Start -->
                                    <ul class="sub-mega-dropdown">
                                        <li>
                                            <div class="mega-dropdown-menu">
                                                <ul class="container mega-dropdown d-flex flex-wrap">
                                                    <li class="mega-dropdown-list menu-item-has-children">
                                                        <h6 class="heading-6 font-weight-500 mega-title">Best Seller</h6>
                                                        <ul>
                                                            <li><a href="#">Floating Glass</a></li>
                                                            <li><a href="#">Sliding window</a></li>
                                                            <li><a href="#">Gunmetal</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-dropdown-list menu-item-has-children">
                                                        <h6 class="heading-6 font-weight-500 mega-title">New</h6>
                                                        <ul>
                                                            <?php
                                                            for ($i = 0; $i < count($products); $i++) {
                                                                echo '<li><a href="product_details?id=' . $products[$i]['id'] . '"> ' . $products[$i]['name'] . '</a></li>';
                                                            }
                                                            ?>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-dropdown-list">
                                                        <img src="assets/images/menu-slider-1.png" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- sub mega dropdown Ends -->
                                </li>
                            </ul>
                        </div>
                        <!-- navbar menu Ends -->
                        <div class="navbar-search-cart d-none d-lg-flex">
                            <!-- navbar search start -->
                            <div class="navbar-search search-style-5">
                                <div class="search-select">
                                    <select>
                                        <option value="">All</option>
                                        <option value="1">option 01</option>
                                        <option value="2">option 02</option>
                                        <option value="3">option 03</option>
                                        <option value="4">option 04</option>
                                        <option value="5">option 05</option>
                                    </select>
                                </div>
                                <div class="search-input">
                                    <input type="text" placeholder="Search">
                                </div>
                                <div class="search-btn">
                                    <button><i class="lni lni-search-alt"></i></button>
                                </div>
                            </div>
                            <!-- navbar search Ends -->
                            <!-- navbar cart start -->
                            <?= $this->include('frontend/_components/customer/nav_elements/cart-main.php'); ?>
                            <!-- navbar cart Ends -->
                        </div>
                        <div class="navbar-menu">
                            <ul class="main-menu">
                                <?php
                                if (session()->get('logged_in') !== TRUE) {
                                    echo '<li><a href="' . site_url('customer/login') . '">Login  <i class="mdi mdi-login-variant"></i></a></li>';
                                } else {
                                    echo
                                    '
                                            <li>
                                                <select style="display: none">
                                                    <option value="">' . session()->get('username') . '</option>
                                                    <option value="1">option 01</option>
                                                    <option value="2">option 02</option>
                                                </select>
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">' . session()->get('username') . '</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option"><a href="profile?id=' . session()->get('id') . '">Profile</a></li>
                                                        <li data-value="2" class="option"><a href="' . site_url('customer/login/logout') . '">Logout <i class="mdi mdi-logout-variant"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        ';
                                }
                                ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- main navbar Ends -->
        </div>
        <div class="overlay-7"></div>
    </header>
</div>