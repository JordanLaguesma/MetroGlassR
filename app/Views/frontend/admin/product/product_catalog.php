<!DOCTYPE html>
<html lang="en">

<?= $this->include('frontend/_components/basic/header.php') ?>
<style>
    .img-con {
        position: relative;

    }

    .icon-container {
        background-image: linear-gradient(90deg, rgba(252, 252, 252, 0.8), rgba(252, 252, 252, 0.8));
        position: absolute;
        bottom: 10px;
        right: 0;
        cursor: pointer;

    }

    .icon-bottom:hover {
        color: rgba(89, 88, 88, 0.8) !important;
    }

    .icon-bottom:active {
        color: rgba(89, 88, 187, 0.6) !important;
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
                    <div class="type">
                        <?php
                        $product_group = array_chunk($products, 3);
                        foreach ($product_group as $product_row) {
                            echo '<div class="row">';
                            foreach ($product_row as $product) {
                                $product_name = $product['name'];
                                $product_price = $product['price'];
                                $product_image = $product['image'];

                                echo
                                '
                                    <div class="col-sm-4 grid-margin">
                                        <div class="card">
                                            <div class="img-con prod' . $product['id'] . '">
                                                <img src="' . base_url("uploads/") . $product_image . '" alt="' . $product_name . '" class="card-img-top" alt="">
                                                <div class="icon-container prod-show' . $product['id'] . ' text-black text-center py-2 px-2" style="display: none;">
                                                    <i class="mdi mdi-square-edit-outline fs-4 edit icon-bottom" data-bs-toggle="modal" data-bs-target="#modal_edit_product" data-id="' . $product['id'] . '"></i>
                                                    <i class="mdi mdi-monitor text-black fs-4 view icon-bottom" data-bs-toggle="modal" data-bs-target="#modal_view_product" data-id="' . $product['id'] . '"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="mb-0 text-center text-xl">
                                                    <div class="ratings text-warning">
                                                        <i class="mdi mdi-star-outline"></i>
                                                        <i class="mdi mdi-star-outline"></i>
                                                        <i class="mdi mdi-star-outline"></i>
                                                        <i class="mdi mdi-star-outline"></i>
                                                        <i class="mdi mdi-star-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-12 my-auto mb-0 text-center">
                                                        <p class="text-lead mb-1">' . $product_name . '</p>
                                                        <h5 class="mb-0 text-center">' . number_format($product_price, 2) . '</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ';
                            }
                            echo '</div>'; // Close the row
                        }
                        ?>
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
    <?= $this->include('frontend/admin/product/modals/edit_product.php') ?>
    <?= $this->include('frontend/admin/product/modals/view_product.php') ?>
</body>
<!-- Backend -->
<?= $this->include('backend/admin/modify_account.php'); ?>
<?= $this->include('backend/admin/product/view'); ?>
<?= $this->include('backend/admin/product/edit'); ?>
<!-- End Backend -->
<script>
    $(document).ready(function() {
        $(".prod1").hover(
            function() {
                $(".prod-show1").fadeIn("fast");
            },
            function() {
                $(".prod-show1").fadeOut("fast");
            })

        $(".prod2").hover(
            function() {
                $(".prod-show2").fadeIn("fast");
            },
            function() {
                $(".prod-show2").fadeOut("fast");
            })
        $(".prod3").hover(
            function() {
                $(".prod-show3").fadeIn("fast");
            },
            function() {
                $(".prod-show3").fadeOut("fast");
            })
        $(".prod4").hover(
            function() {
                $(".prod-show4").fadeIn("fast");
            },
            function() {
                $(".prod-show4").fadeOut("fast");
            })
        $(".prod5").hover(
            function() {
                $(".prod-show5").fadeIn("fast");
            },
            function() {
                $(".prod-show5").fadeOut("fast");
            })
        $(".prod6").hover(
            function() {
                $(".prod-show6").fadeIn("fast");
            },
            function() {
                $(".prod-show6").fadeOut("fast");
            })
        $(".prod7").hover(
            function() {
                $(".prod-show7").fadeIn("fast");
            },
            function() {
                $(".prod-show7").fadeOut("fast");
            })
    });
</script>

</html>