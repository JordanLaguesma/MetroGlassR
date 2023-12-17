<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('frontend/_components/basic/header.php') ?>
</head>
<style>
    .ribbon {
        position: absolute;
        top: 0;
        right: 0;
        background-color: #f00;
        /* Ribbon background color */
        color: #fff;
        /* Ribbon text color */
        padding: 5px 10px;
        transform: rotate(45deg);
        transform-origin: 0 0;
    }
</style>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?= $this->include('frontend/_components/user/admin/sidebar.php') ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?= $this->include('frontend/_components/user/admin/navbar.php') ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row mt-0">
                        <div class="col-8 grid-margin"></div>
                        <div class="col grid-margin text-end"><button type="button" data-bs-toggle="modal" data-bs-target="#modal_add_promotions" class="btn btn-outline-success" aria-haspopup="true" aria-expanded="false">New</button></div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Promotion Management</h4>
                                    <div class="table-responsive">
                                        <table id="table_promotions" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Discount Type</th>
                                                    <th>Discount Value</th>
                                                    <th>Minimum Purchase Amount (if applicable) </th>
                                                    <th>Active</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?= $this->include('frontend/_components/basic/footer.php') ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?= $this->include('frontend/_components/basic/script.php') ?>
    <?= $this->include('frontend/admin/product/modals/add_product.php') ?>
    <?= $this->include('frontend/admin/promotions/modals/delete_promotions.php') ?>
    <?= $this->include('frontend/admin/promotions/modals/edit_promotions.php') ?>
    <?= $this->include('frontend/admin/promotions/modals/set_active_promotions.php') ?>
    <?= $this->include('frontend/admin/promotions/modals/add_promotions.php') ?>
    <?= $this->include('frontend/admin/promotions/modals/view_promotions.php') ?>
</body>
<!-- Backend -->
<?= $this->include('backend/admin/modify_account.php'); ?>
<?= $this->include('backend/admin/promotions/datatable'); ?>
<?= $this->include('backend/admin/promotions/add'); ?>
<?= $this->include('backend/admin/promotions/view'); ?>
<?= $this->include('backend/admin/promotions/edit'); ?>
<?= $this->include('backend/admin/promotions/set_active'); ?>
<?= $this->include('backend/admin/promotions/delete'); ?>
<!-- End Backend -->

</html>