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
                                    Checkout
                                </li>
                            </ol>
                        </div>
                        <div class="breadcrumb-right">
                            <h5 class="heading-5 font-weight-500">Checkout</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Breadcrumbs Part Ends ======-->

    <!--====== Checkout Form Steps Part Start ======-->
    <section class="checkout-wrapper pt-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="checkout-steps-form-style-1 mt-50">
                        <h6 class="title">Your Personal Details</h6>
                        <section class="checkout-steps-form-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single-form form-default">
                                        <label>User Name</label>
                                        <div class="row">
                                            <div class="col-md-6 form-input form">
                                                <input type="text" placeholder="First Name" value="<?= $customer['firstname']; ?>" />
                                            </div>
                                            <div class="col-md-6 form-input form">
                                                <input type="text" placeholder="Last Name" value="<?= $customer['lastname']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-default">
                                        <label>Email Address</label>
                                        <div class="form-input form">
                                            <input type="text" placeholder="Email Address" value="<?= $customer['email']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-default">
                                        <label>Phone Number</label>
                                        <div class="form-input form">
                                            <input type="text" placeholder="Phone Number" value="<?= $customer['phone']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form form-default">
                                        <label>Mailing Address</label>
                                        <div class="form-input form">
                                            <input type="text" placeholder="Mailing Address" value="<?= $customer['address']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-default">
                                        <label>City</label>
                                        <div class="form-input form">
                                            <input type="text" placeholder="City" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-default">
                                        <label>Post Code</label>
                                        <div class="form-input form">
                                            <input type="text" placeholder="Post Code" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-default">
                                        <label>Country</label>
                                        <div class="form-input form">
                                            <input type="text" placeholder="Country" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-default">
                                        <label>Region/State</label>
                                        <div class="form-input form">
                                            <input type="text" placeholder="Region/State" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-checkbox checkbox-style-3">
                                        <input type="checkbox" id="checkbox-3" />
                                        <label for="checkbox-3"><span></span></label>
                                        <p>My delivery and mailing addresses are the same.</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <button type="button" id="print_order" class="vjsteps_nxt main-btn primary-btn">
                                            Order Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout-sidebar pt-20">
                        <div class="checkout-sidebar-price-table mt-30">
                            <h5 class="title">Pricing Table</h5>
                            <div class="sub-total-price">
                                <?php for ($i = 0; $i < 3; $i++) : ?>
                                    <div class="total-price
                                    <?php if ($i == 1) {
                                        echo ' shipping';
                                    } elseif ($i == 2) {
                                        echo ' discount';
                                    } ?>">
                                        <p class="value">Subtotal Price:</p>
                                        <p class="price">₱144.00</p>
                                    </div>
                                <?php endfor; ?>
                            </div>
                            <div class="total-payable">
                                <div class="payable-price">
                                    <p class="value">Subtotal Price:</p>
                                    <p class="price">₱164.50</p>
                                </div>
                            </div>
                            <!-- <div class="price-table-btn">
                                <a href="javascript:void(0)" class="main-btn primary-btn btn-block">Checkout</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Checkout Form Steps Part Ends ======-->

    <!--====== Payment Part Start ======-->
    <section class="checkout-wrapper pt-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8"></div>
                <div class="col-lg-4">
                    <div class="checkout-sidebar-accordion mt-50">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <a href="javascript:void(0)" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Selected Products</a>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="checkout-table table-responsive">
                                            <table id="table_cart_checkout" class="table">
                                                <?php if (isset($product) && isset($product['id'])) : ?>
                                                    <tbody>
                                                        <tr>
                                                            <td class="checkout-product">
                                                                <div class="product-cart d-flex">
                                                                    <div class="product-thumb">
                                                                        <img src="<?= base_url('uploads/') . $product['image']; ?>" alt="Product" />
                                                                    </div>
                                                                    <div class="product-content media-body">
                                                                        <h5 class="title">
                                                                            <a href="product_details?id=<?= $product['id']; ?>"><?= $product['name'] ?></a>
                                                                        </h5>
                                                                        <ul>
                                                                            <li>
                                                                                <span>
                                                                                    <?php
                                                                                    $type = $product['type'];
                                                                                    $typeMapping = [
                                                                                        1 => 'Horizontal',
                                                                                        2 => 'Smoke',
                                                                                        3 => 'Plain'
                                                                                    ];
                                                                                    $typeName = $typeMapping[$type] ?? 'Unknown';
                                                                                    echo $typeName;
                                                                                    ?>
                                                                                </span>
                                                                            </li>
                                                                            <li><span><?= $product['size']; ?></span></li>
                                                                            <li><span>1 X ₱<?= $product['price']; ?></span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="checkout-price">
                                                                <p class="price">₱<?= 1 * $product['price']; ?></p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                <?php endif; ?>
                                            </table>
                                        </div>
                                        <div class="pricing-table">
                                            <div class="sub-total-price">
                                                <?php for ($i = 0; $i < 3; $i++) : ?>
                                                    <div class="total-price
                                                    <?php if ($i == 1) {
                                                        echo ' shipping';
                                                    } elseif ($i == 2) {
                                                        echo ' discount';
                                                    } ?>">
                                                        <p class="value">Subtotal Price:</p>
                                                        <p class="price">₱144.00</p>
                                                    </div>
                                                <?php endfor; ?>
                                            </div>
                                            <div class="total-payable">
                                                <div class="payable-price">
                                                    <p class="value">Subtotal Price:</p>
                                                    <p class="price">₱164.50</p>
                                                </div>
                                            </div>
                                            <?php if (!(isset($product) && isset($product['id']))) : ?>
                                                <div class="price-table-btn">
                                                    <a href="cart" class="main-btn primary-btn-border">edit shopping cart</a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Personal Details</a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="checkout-sidebar-details">
                                            <div class="single-details">
                                                <p class="info"><?= $customer['firstname'] . ' ' . $customer['lastname']; ?></p>
                                                <p class="info"><?= $customer['email']; ?></p>
                                                <p class="info"><?= $customer['phone']; ?></p>
                                            </div>
                                            <div class="single-details">
                                                <h6 class="title">Home Address</h6>
                                                <p class="info">
                                                    <?= $customer['address']; ?>
                                                </p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="profile?id=<?= $customer['id']; ?>" class="main-btn primary-btn-border">edit Information</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Shipping Address</a>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="checkout-sidebar-details">
                                            <div class="single-details">
                                                <p class="info"><?= $customer['firstname'] . ' ' . $customer['lastname']; ?></p>
                                                <p class="info"><?= $customer['email']; ?></p>
                                                <p class="info"><?= $customer['phone']; ?></p>
                                            </div>
                                            <div class="single-details">
                                                <h6 class="title">Mailing Address</h6>
                                                <p class="info"><?= $customer['address']; ?></p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="profile?id=<?= $customer['id']; ?>" class="main-btn primary-btn-border">edit Information</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Payment Part Ends ======-->
    <!--====== Footer Style 3 Part Start ======-->
    <?= $this->include('frontend/_components/customer/footer.php'); ?>
    <!--====== Footer Style 3 Part Ends ======-->
</body>
<?= $this->include('frontend/_components/customer/script.php'); ?>
<!-- Backend -->
<?php if (!(isset($product) && isset($product['id']))) : ?>
    <?= $this->include('backend/customer/cart.php'); ?>
<?php endif; ?>
<script>
    $(document).ready(function() {
        $('#print_order').on('click', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('customer/checkout/order'); ?>',
                type: 'POST',
            });
        })
    })
</script>
<!-- End Backend -->

</html>