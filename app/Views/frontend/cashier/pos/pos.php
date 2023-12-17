<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('frontend/_components/basic/header.php') ?>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?= $this->include('frontend/_components/user/cashier/sidebar.php') ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?= $this->include('frontend/_components/user/cashier/navbar.php') ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-8 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Product</h4>
                                    <?php
                                    $product_group = array_chunk($products, 4);
                                    foreach ($product_group as $product_row) {
                                        echo '<div class="row">';
                                        foreach ($product_row as $product) {
                                            $product_id    = $product['id'];
                                            $product_name  = $product['name'];
                                            $product_price = $product['price'];
                                            $product_image = $product['image'];
                                            echo
                                            '
                                                <div class="col-sm-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                        <a href="#" class="text-decoration-none add_cart" data-bs-toggle="modal" data-bs-target="#modal_product_info_add" data-id="' . $product_id . '">
                                                            <div class="img-con prod2">
                                                                <img src="' . base_url('uploads/') . $product_image . '" alt="" class="card-img-top" alt="">
                                                                <p class="text-secondary text-center">' . $product_name . '</p>
                                                            </div>
                                                        </a>
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
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h4>Invoice</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="table_invoice" class="table">
                                            <thead>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Rem</th>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="text-center py-3">
                                            <button class="btn btn-primary btn-lg btn-block checkout" data-bs-toggle="modal" data-bs-target="#modal_cashier_checkout"> Checkout</button>
                                            <button class="btn btn-primary btn-lg btn-block clear"> Clear</button>
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
    <?= $this->include('frontend/cashier/pos/modal/checkout.php') ?>
    <?= $this->include('frontend/cashier/pos/modal/product_info_add.php') ?>
</body>
<!-- Backend -->
<?= $this->include('backend/cashier/pos/fetch.php'); ?>
<?= $this->include('backend/cashier/pos/data_load.php'); ?>
<?= $this->include('backend/cashier/pos/data_add.php'); ?>
<?= $this->include('backend/cashier/pos/data_remove.php'); ?>
<script>
    $(document).on('click', '.checkout', function() {
        var totalAmount = 0;
        $('#table_invoice tbody tr').each(function() {
            var priceString = $(this).find('td:eq(2)').text();
            var price = parseFloat(priceString.replace(/[^\d.]/g, ''));
            totalAmount += price;
        });
        $('#total_price').val(totalAmount.toFixed(2));
    });
</script>
<script>
    $(document).ready(function () {
        $('.clear').click(function (e) {
            e.preventDefault();
            localStorage.removeItem('products');
            displayProductData();
        })
    })
</script>
<!-- End Backend -->

</html>