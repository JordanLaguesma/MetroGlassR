<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?= $this->include('frontend/_components/customer/head.php'); ?>
</head>

<body>
    <!--====== Preloader Part Start ======-->
    <?= $this->include('frontend/_components/customer/preloader.php'); ?>
    <!--====== Preloader Part Ends ======-->
    <!--====== Navbar Style 7 Part Start ======-->
    <?= $this->include('frontend/_components/customer/navbar.php'); ?>
    <!--====== Navbar Style 7 Part Ends ======-->
    <!--====== Breadcrumbs Part Start ======-->
    <?php if (!session()->get('username')) : ?>
        <section class="breadcrumbs-wrapper pt-50 pb-50 bg-primary-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center">
                            <div class="breadcrumb-left">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sign in</li>
                                </ol>
                            </div>
                            <div class="breadcrumb-right">
                                <h5 class="heading-5 font-weight-500">Sign in</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Breadcrumbs Part Ends ======-->
        <!--====== Login Part Start ======-->
        <section class="login-registration-wrapper pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="login-registration-style-2 mt-50">
                            <h2 class="text-center mb-3"> <?php echo 'Welcome Back!'; ?> </h2>
                            <h1 class="heading-4 font-weight-500 title">Login</h1>
                            <div class="login-registration-form pt-10">
                                <form action="login/login" method="post">
                                    <div class="single-form form-default form-border">
                                        <label>Email Address</label>
                                        <div class="form-input">
                                            <input type="text" name="authusem" placeholder="user@email.com" />
                                            <i class="mdi mdi-email"></i>
                                        </div>
                                    </div>
                                    <div class="single-form form-default form-border">
                                        <label>Your Password</label>
                                        <div class="form-input">
                                            <input id="password-7" type="password" name="authpass" placeholder="Password" />
                                            <i class="mdi mdi-lock"></i>
                                            <span toggle="#password-7" class="mdi mdi-eye-outline toggle-password"></span>
                                        </div>
                                    </div>
                                    <div class="login-checkbox-forget d-sm-flex justify-content-between align-items-center">
                                        <div class="single-checkbox checkbox-style-3">
                                            <input type="checkbox" id="login-7" />
                                            <label for="login-7"><span></span> </label>
                                            <p>Remember Me</p>
                                        </div>
                                        <a class="forget" href="#">Forget Password?</a>
                                    </div>
                                    <div class="single-form">
                                        <button type="submit" class="main-btn primary-btn">Sign in</button>
                                    </div>
                                </form>
                            </div>
                            <div class="text-center">
                                <p class="login">
                                    Don’t have an account? <a href="signup">Sign up</a>
                                </p>
                                <p class="account mt-25">Or</p>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="facebook-login-registration">
                                            <i class="lni lni-facebook-original"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="google-login-registration">
                                            <img src="<?= base_url('customer/assets/images/google-logo.svg'); ?>" alt="" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php else : ?>
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 text-center py-5">
                    <h2><?php echo 'Welcome back, ' . session()->get('username') . '!'; ?></h2>
                    <a class="btn btn-primary py-2 my-5" href="home">Continue Shopping</a>
                    <p>If this is not you, then <a href="login/logout">logout</a></p>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    <?php endif; ?>
    <!--====== Login Part Ends ======-->
    <!--====== Footer Style 3 Part Start ======-->
    <?= $this->include('frontend/_components/customer/footer.php'); ?>
    <!--====== Footer Style 3 Part Ends ======-->
    <?= $this->include('frontend/_components/customer/script.php'); ?>
</body>
<!-- Backend -->
<?= $this->include('backend/customer/cart.php'); ?>
<!-- End Backend -->

</html>