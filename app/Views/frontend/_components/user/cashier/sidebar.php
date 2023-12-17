<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="<?= base_url('assets/images/logo.svg') ?>" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('assets/images/logo-mini') ?>" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="<?= base_url('assets/images/faces/face15.jpg') ?>" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name text-center">
                        <h5 class="mb-0 font-weight-normal py-1"><?= session()->get('username'); ?></h5>
                        <span class="badge badge-info text-white py-0 px-1">cashier</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item change-password" data-bs-toggle="modal" data-bs-target="#modal_change_password" data-id="<?= session()->get('id'); ?>">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item px-0 py-4">
            <div class="row mx-1 py-0">

                <div class="col-sm-6 text-center">
                    <a href="pos" class="text-decoration-none">
                        <p class="py-0 my-0 mt-2 text-center text-secondary font-weight-bold">POS Panel</p>
                        <i class="mdi my-0 mdi-cash-register text-center text-secondary icon-lg"></i>
                    </a>
                </div>

                <div class="col-sm-6  text-center">
                    <a href="home" class="text-decoration-none">
                        <p class="py-0 my-0 mt-2 text-center text-secondary font-weight-bold">Dashboard</p>
                        <i class="mdi my-0 mdi-view-dashboard text-center text-secondary icon-lg"></i>
                    </a>
                </div>
            </div>
            <div class="row mx-1 py-0 text-center">
                <div class="col-sm-6  text-center">
                    <a href="orders" class="text-decoration-none">
                        <p class="py-0 my-0 mt-2 text-center text-secondary font-weight-bold">Orders</p>
                        <i class="mdi my-0 mdi-clipboard-text text-center text-secondary icon-lg"></i>
                    </a>
                </div>
                <div class="col-sm-6 text-center">
                    <a href="inventory" class="text-decoration-none">
                        <p class="py-0 my-0 mt-2 text-center text-secondary font-weight-bold">Inventory</p>
                        <i class="mdi my-0 mdi-wallet text-center text-secondary icon-lg"></i>
                    </a>
                </div>
            </div>
            <div class="row mx-1 py-0 text-center">
                <div class="col-sm-6  text-center">
                    <a href="customers" class="text-decoration-none">
                        <p class="py-0 my-0 mt-2 text-center text-secondary font-weight-bold">Customer</p>
                        <i class="mdi mdi-face my-0  text-center text-secondary icon-lg"></i>
                    </a>
                </div>
                <div class="col-sm-6 text-center">
                    <a href="returns" class="text-decoration-none">
                        <p class="py-0 my-0 mt-2 text-center text-secondary font-weight-bold">Returns</p>
                        <i class="mdi my-0 mdi-wallet text-center text-secondary icon-lg"></i>
                    </a>
                </div>
            </div>
            <div class="row py-0 text-center">
                <div class="col-sm-6 text-center">
                    <a href="#" class="text-decoration-none">
                        <p class="py-0 my-0 mt-2 text-center text-secondary font-weight-bold">History</p>
                        <i class="mdi my-0 mdi-history text-center text-secondary icon-lg"></i>
                    </a>
                </div>
            </div>
        </li>
    </ul>
</nav>
<?= $this->include('frontend/_components/user/cashier/modal/change_password.php'); ?>