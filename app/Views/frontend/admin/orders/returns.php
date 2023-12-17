<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('frontend/_components/basic/header.php') ?>
</head>

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
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Return Requests</h4>
                                    <div class="table-responsive">
                                        <table id="table_returns" class="table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="form-check form-check-muted m-0">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">
                                                            </label>
                                                        </div>
                                                    </th>
                                                    <th>Customer Name </th>
                                                    <th>Customer Address</th>
                                                    <th> Return Reason</th>
                                                    <th> Request Date</th>
                                                    <th> Status </th>
                                                    <th></th>

                                                </tr>
                                            </thead>
                                            <!-- <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-muted m-0">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <img src="<?= base_url('assets/images/faces/face1.jpg') ?>" alt="image" />
                                                        <span class="ps-2">Henry Klein</span>
                                                    </td>
                                                    <td> Dagupan City </td>
                                                    <td> Defective Product </td>
                                                    <td> 10-21-2023 </td>
                                                    <td> <span class="badge rounded-pill  badge-outline-success py-1 px-1">Approved</span></td>
                                                    <td>
                                                        <div class="form-group">

                                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item view" href="#"><i class="mdi mdi-eye"></i> View</a>
                                                                <a class="dropdown-item edit" href="#"><i class="mdi mdi-check"></i> Approve</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete"></i> Reject</a>

                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-muted m-0">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <img src="<?= base_url('assets/images/faces/face2.jpg') ?>" alt="image" />
                                                        <span class="ps-2">Estella Bryan</span>
                                                    </td>
                                                    <td> Dagupan City </td>
                                                    <td> Defective Product </td>
                                                    <td> 10-21-2023 </td>
                                                    <td> <span class="badge rounded-pill  badge-outline-success py-1 px-1">Approved</span></td>
                                                    <td>
                                                        <div class="form-group">

                                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item view" href="#"><i class="mdi mdi-eye"></i> View</a>
                                                                <a class="dropdown-item edit" href="#"><i class="mdi mdi-pen"></i> Edit</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete"></i> Remove</a>

                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-muted m-0">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <img src="<?= base_url('assets/images/faces/face3.jpg') ?>" alt="image" />
                                                        <span class="ps-2">Lucy Abbott</span>
                                                    </td>
                                                    <td> Dagupan City </td>
                                                    <td> Defective Product </td>
                                                    <td> 10-21-2023 </td>
                                                    <td><span class="badge rounded-pill badge-outline-danger py-1 px-1">Rejected</span></td>
                                                    <td>
                                                        <div class="form-group">

                                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item view" href="#"><i class="mdi mdi-eye"></i> View</a>
                                                                <a class="dropdown-item edit" href="#"><i class="mdi mdi-pen"></i> Edit</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete"></i> Remove</a>

                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-muted m-0">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <img src="<?= base_url('assets/images/faces/face4.jpg') ?>" alt="image" />
                                                        <span class="ps-2">Peter Gill</span>
                                                    </td>
                                                    <td> Dagupan City </td>
                                                    <td> Defective Product </td>
                                                    <td> 10-21-2023 </td>
                                                    <td> <span class="badge rounded-pill badge-outline-warning py-1 px-1">Pending</span> </td>
                                                    <td>
                                                        <div class="form-group">

                                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item view" href="#"><i class="mdi mdi-eye"></i> View</a>
                                                                <a class="dropdown-item edit" href="#"><i class="mdi mdi-pen"></i> Edit</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete"></i> Remove</a>

                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-muted m-0">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <img src="<?= base_url('assets/images/faces/face5.jpg') ?>" alt="image" />
                                                        <span class="ps-2">Sallie Reyes</span>
                                                    </td>
                                                    <td> Dagupan City </td>
                                                    <td> Defective Product </td>
                                                    <td> 10-21-2023 </td>
                                                    <td> <small><span class="badge rounded-pill  badge-outline-success py-1 px-1">Approved</span></small></td>
                                                    <td>
                                                        <div class="form-group">

                                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item view" href="#"><i class="mdi mdi-eye"></i> View</a>
                                                                <a class="dropdown-item edit" href="#"><i class="mdi mdi-pen"></i> Edit</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete"></i> Remove</a>

                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody> -->
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
    <?= $this->include('frontend/admin/orders/modals/view_returns.php') ?>

</body>
<!-- Backend -->
<?= $this->include('backend/admin/modify_account.php'); ?>
<?= $this->include('backend/admin/returns/datatable.php'); ?>
<!-- End Backend -->

</html>