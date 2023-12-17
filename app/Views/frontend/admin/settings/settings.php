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
                    <div class="row grid-margin">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-title">Product Category/Type </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal_add_category"><i class="mdi mdi-plus-circle"></i> Add Category</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> Category </th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> Float Glass </td>
                                                    <td> Lorem ipsum dolor sit. </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#modal_view_category"><i class="mdi mdi-eye"></i> View</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#modal_edit_category"><i class="mdi mdi-pen"></i> Update</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row grid-margin">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-title">Log History </div>
                                        </div>

                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> Description </th>
                                                    <th> Logged in </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="td-container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, quos? Consequatur molestiae cumque neque ipsum corporis tempora totam, optio pariatur. </div>
                                                    </td>
                                                    <td> 3d ago </td>
                                                </tr>
                                            </tbody>
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
    </div>
    <!-- page-body-wrapper ends -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?= $this->include('frontend/_components/basic/script.php') ?>
    <?= $this->include('frontend/admin/product/modals/add_product.php') ?>
    <?= $this->include('frontend/admin/settings/modals/modal_category.php') ?>
    <!-- End custom js for this page -->

</body>
<!-- Backend -->
<?= $this->include('backend/admin/modify_account.php'); ?>
<!-- End Backend -->
<script>
    var tdContainer = document.querySelector(".td-container");
    var maxWords = 10; // Adjust the number of words you want to display
    if (tdContainer.textContent.split(' ').length > maxWords) {
        var words = tdContainer.textContent.split(' ').slice(0, maxWords).join(' ');
        tdContainer.textContent = words + '...';
    }
</script>

</html>