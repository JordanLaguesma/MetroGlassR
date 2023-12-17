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
    <section class="breadcrumbs-wrapper pt-50 pb-50 bg-primary-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center">
                        <div class="breadcrumb-left">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Sign up
                                </li>
                            </ol>
                        </div>
                        <div class="breadcrumb-right">
                            <h5 class="heading-5 font-weight-500">Sign up</h5>
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
                    <div class="login-registration-style-1 registration text-center mt-50">
                        <h1 class="heading-4 font-weight-500 title">
                            Create an Account with
                        </h1>
                        <div class="login-registration-form pt-10">
                            <form id="signup" action="signup/save" method="post">
                                <div class="single-form form-default form-border text-left">
                                    <label>Full Name</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-input form">
                                                <input type="text" name="firstname" placeholder="First Name" />
                                            </div>
                                            <p id="saveErrorFirstname" class="text-danger"></p>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-input form">
                                                <input type="text" name="lastname" placeholder="Last Name" />
                                            </div>
                                            <p id="saveErrorLastname" class="text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-form form-default form-border text-left">
                                    <label>Username</label>
                                    <div class="form-input">
                                        <input type="text" name="username" placeholder="My Username" />
                                        <i class="mdi mdi-account"></i>
                                    </div>
                                    <p id="saveErrorUsername" class="text-danger"></p>
                                </div>
                                <div class="single-form form-default form-border text-left">
                                    <label>Email Address</label>
                                    <div class="form-input">
                                        <input type="email" name="email" placeholder="user@email.com" />
                                        <i class="mdi mdi-email"></i>
                                        <p id="saveErrorEmail" class="text-danger"></p>
                                    </div>
                                </div>
                                <div class="single-form form-default form-border text-left">
                                    <label>Gender</label>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-3">
                                            Male
                                            <input type="radio" name="gender" value="Male" />
                                        </div>
                                        <div class="col-sm-3">
                                            Female
                                            <input type="radio" name="gender" value="Female" />
                                        </div>
                                        <div class="col-sm-3"></div>
                                    </div>
                                    <p id="saveErrorGender" class="text-danger"></p>
                                </div>
                                <div class="single-form form-default form-border text-left">
                                    <label>Phone Number</label>
                                    <div class="form-input">
                                        <input type="text" name="phone" placeholder="+63 912 345 6789" />
                                        <i class="mdi mdi-phone"></i>
                                    </div>
                                    <p id="saveErrorPhone" class="text-danger"></p>
                                </div>
                                <div class="single-form form-default form-border text-left">
                                    <label>Address</label>
                                    <div class="form-input">
                                        <input type="text" name="address" placeholder="Home Number, Street, City, Province/State" />
                                        <i class="mdi mdi-home"></i>
                                    </div>
                                    <p id="saveErrorAddress" class="text-danger"></p>
                                </div>
                                <div class="single-form form-default form-border text-left">
                                    <label>Birthday</label>
                                    <div class="form-input">
                                        <input type="date" name="birthday" />
                                        <i class="mdi mdi-calendar"></i>
                                    </div>
                                    <p id="saveErrorBirthday" class="text-danger"></p>
                                </div>
                                <div class="single-form form-default form-border text-left">
                                    <label>Choose Password</label>
                                    <div class="form-input">
                                        <input id="password-3" type="password" name="password" placeholder="Password" />
                                        <i class="mdi mdi-lock"></i>
                                        <span toggle="#password-3" class="mdi mdi-eye-outline toggle-password"></span>
                                    </div>
                                    <p id="saveErrorPassword" class="text-danger"></p>
                                </div>
                                <div class="single-form form-default form-border text-left">
                                    <label>Confirm Password</label>
                                    <div class="form-input">
                                        <input id="confpass-3" type="password" name="confpass" placeholder=" Confirm Password" />
                                        <i class="mdi mdi-lock"></i>
                                        <span toggle="#confpass-3" class="mdi mdi-eye-outline toggle-password"></span>
                                    </div>
                                    <p id="saveErrorConfpass" class="text-danger"></p>
                                </div>
                                <div class="single-checkbox checkbox-style-3">
                                    <input type="checkbox" id="login-3" required />
                                    <label for="login-3"><span></span> </label>
                                    <p>I accept the Terms of Use.</p>
                                </div>
                                <div class="single-form">
                                    <button type="submit" class="main-btn primary-btn">Sign up</button>
                                </div>
                            </form>
                        </div>
                        <p class="login">
                            Have an account? <a href="login">Log in</a>
                        </p>
                        <p class="account">Or</p>
                        <ul>
                            <li>
                                <a href="javascript:void(0)" class="facebook-login-registration">
                                    <i class="lni lni-facebook-original"></i>
                                    <span>Login with Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="google-login-registration">
                                    <img src="<?= base_url('customer/assets/images/google-logo.svg'); ?>" alt="" />
                                    <span>Login with Google</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Login Part Ends ======-->
    <!--====== Footer Style 3 Part Start ======-->
    <?= $this->include('frontend/_components/customer/footer.php'); ?>
    <!--====== Footer Style 3 Part Ends ======-->
    <?= $this->include('frontend/_components/customer/script.php'); ?>
</body>
<!-- Backend -->
<?= $this->include('backend/customer/cart.php'); ?>
<script>
    $(document).ready(function() {
        $('#signup').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('customer/signup/save'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function(data) {
                    if (data.error == 0) {
                        alert('Account created successfully!');
                        window.location.href = '<?= site_url('customer/login'); ?>';
                    } else {
                        $('#saveErrorFirstname').text(data.firstname_error);
                        $('#saveErrorLastname').text(data.lastname_error);
                        $('#saveErrorEmail').text(data.email_error);
                        $('#saveErrorPhone').text(data.phone_error);
                        $('#saveErrorAddress').text(data.address_error);
                        $('#saveErrorGender').text(data.gender_error);
                        $('#saveErrorBirthday').text(data.birthday_error);
                        $('#saveErrorPassword').text(data.password_error);
                        $('#saveErrorConfpass').text(data.confpass_error);
                    }
                }
            })
        })
    })
</script>
<!-- End Backend -->

</html>