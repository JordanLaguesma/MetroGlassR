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
                        <h5 class="mb-0 font-weight-normal py-1"><?php echo session()->get('username'); ?></h5>
                        <span class="badge badge-info text-white py-0 px-1">
                            <?php
                            $role = session()->get('role');
                            $roleMapping = [
                                0 => 'admin',
                                1 => 'co-admin',
                            ];
                            $roleName = $roleMapping[$role] ?? 'user';
                            echo $roleName;
                            ?>
                        </span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item modify-account" data-bs-toggle="modal" data-bs-target="#modal_modify_account" data-id="<?= session()->get('id'); ?>">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
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
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link sidebar-link" href="<?= site_url('admin/dashboard') ?>">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#ui-product" aria-expanded="false" aria-controls="ui-product">
                <span class="menu-icon">
                    <i class="mdi mdi-tag"></i>
                </span>
                <span class="menu-title">Manage Product</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-product">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link btn" data-bs-toggle="modal" data-bs-target="#modal_add_product" aria-expanded="false" href="#">+ Add Product</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= site_url('admin/product/settings'); ?>">Product Settings</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= site_url('admin/product/catalog'); ?>">Product Catalog</a></li>

                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#ui-order" aria-expanded="false" aria-controls="ui-order">
                <span class="menu-icon">
                    <i class="mdi mdi-cart"></i>
                </span>
                <span class="menu-title">Order Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-order">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= site_url('admin/order/view') ?>">View Orders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= site_url('admin/order/settings') ?>">Order Settings</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= site_url('admin/order/returns') ?>">R&R</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#ui-user" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-account-group"></i>
                </span>
                <span class="menu-title">User Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-user">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= site_url('admin/customer/account'); ?>">Customers</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= site_url('admin/user/account'); ?>">Other Users</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link sidebar-link" href="<?= site_url('admin/inventory') ?>">
                <span class="menu-icon">
                    <i class="mdi mdi-archive"></i>
                </span>
                <span class="menu-title">Inventory</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link sidebar-link" href="<?= site_url('admin/promotions') ?>">
                <span class="menu-icon">
                    <i class="mdi mdi-shopping"></i>
                </span>
                <span class="menu-title">Promotions</span>
            </a>
        </li>
    </ul>
</nav>
<?= $this->include('frontend/_components/user/admin/modal/modify_account.php'); ?>