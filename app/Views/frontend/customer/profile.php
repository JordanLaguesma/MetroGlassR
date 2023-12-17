<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?= $this->include('frontend/_components/customer/head.php'); ?>

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
                                    Profile
                                </li>
                            </ol>
                        </div>
                        <div class="breadcrumb-right">
                            <h5 class="heading-5 font-weight-500">Profile</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Breadcrumbs Part Ends ======-->
    <!--====== Profile Start ======-->
    <section class="profile-wrapper pt-50 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="profile">
                        <div class="profile-header">
                            <div class="profile-cover-photo bg_cover" style="background-image: url(<?= base_url('customer/assets/images/profile-cover.png'); ?>)"></div>
                            <div class="profile-author d-sm-flex flex-row-reverse justify-content-between align-items-end">
                                <div class="profile-photo">
                                    <img src="<?= base_url('customer/assets/images/profile-photo.png'); ?>" alt="Profile Photo" />
                                </div>
                                <div class="profile-name">
                                    <h4 class="name"><?= $customer['username']; ?></h4>
                                    <p class="email"><?= $customer['email']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="profile-body">
                            <div class="profile-title">
                                <h5 class="title">Personal Details</h5>
                                <?= session()->get('id') !== $customer['id'] ? '' : '<a class="profile-link" href="#" data-bs-toggle="modal" data-bs-target="#modal_edit_profile" data-id="' . $customer['id'] . '">edit</a>' ?>
                            </div>
                            <div class="profile-details">
                                <div class="single-details-item d-flex flex-wrap">
                                    <div class="details-title">
                                        <h6 class="title">User Full Name:</h6>
                                    </div>
                                    <div class="details-content media-body">
                                        <p><?= $customer['firstname'] . ' ' . $customer['lastname']; ?></p>
                                    </div>
                                </div>
                                <div class="single-details-item d-flex flex-wrap">
                                    <div class="details-title">
                                        <h6 class="title">Email:</h6>
                                    </div>
                                    <div class="details-content media-body">
                                        <p><?= $customer['email']; ?></p>
                                    </div>
                                </div>
                                <div class="single-details-item d-flex flex-wrap">
                                    <div class="details-title">
                                        <h6 class="title">Phone:</h6>
                                    </div>
                                    <div class="details-content media-body">
                                        <p><?= $customer['phone']; ?></p>
                                    </div>
                                </div>
                                <div class="single-details-item d-flex flex-wrap">
                                    <div class="details-title">
                                        <h6 class="title">Address:</h6>
                                    </div>
                                    <div class="details-content media-body">
                                        <p><?= $customer['address']; ?></p>
                                    </div>
                                </div>
                                <div class="single-details-item d-flex flex-wrap">
                                    <div class="details-title">
                                        <h6 class="title">Gender:</h6>
                                    </div>
                                    <div class="details-content media-body">
                                        <p><?= $customer['gender']; ?></p>
                                    </div>
                                </div>
                                <div class="single-details-item d-flex flex-wrap">
                                    <div class="details-title">
                                        <h6 class="title">Birthday:</h6>
                                    </div>
                                    <div class="details-content media-body">
                                        <p><?= $customer['birthday']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-footer mt-45">
                            <!-- <div class="profile-title">
                                <h5 class="title">Cards</h5>
                                <a class="profile-link" href="javascript:void(0)">Add Cards</a>
                            </div>
                            <div class="profile-card-info">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-card-info d-flex">
                                            <div class="card-icon">
                                                <img src="<?= base_url('customer/assets/images/visa.png'); ?>" alt="Card" />
                                            </div>
                                            <div class="card-info media-body">
                                                <h5 class="card-name">Musa Ahmed</h5>
                                                <p class="card-number">
                                                    .... 4534 <span>02/20</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-card-info d-flex">
                                            <div class="card-icon">
                                                <img src="<?= base_url('customer/assets/images/american-express.png'); ?>" alt="Card" />
                                            </div>
                                            <div class="card-info media-body">
                                                <h5 class="card-name">Musa Ahmed</h5>
                                                <p class="card-number">
                                                    .... 4534 <span>02/20</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-card-info d-flex">
                                            <div class="card-icon">
                                                <img src="<?= base_url('customer/assets/images/mastercard.png'); ?>" alt="Card" />
                                            </div>
                                            <div class="card-info media-body">
                                                <h5 class="card-name">Musa Ahmed</h5>
                                                <p class="card-number">
                                                    .... 4534 <span>02/20</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Profile Ends ======-->
    <!--====== Footer Style 3 Part Start ======-->
    <?= $this->include('frontend/_components/customer/footer.php'); ?>
    <!--====== Footer Style 3 Part Ends ======-->
    <?= $this->include('frontend/_components/customer/script.php'); ?>
</body>
<!-- Backend -->
<?= $this->include('backend/customer/cart.php'); ?>
<!-- End Backend -->

</html>