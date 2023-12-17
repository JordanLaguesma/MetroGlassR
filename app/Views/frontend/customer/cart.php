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
                                    Cart Page
                                </li>
                            </ol>
                        </div>
                        <div class="breadcrumb-right">
                            <h5 class="heading-5 font-weight-500">Cart Page</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Breadcrumbs Part Ends ======-->

    <!--====== Checkout 2 Part Start ======-->
    <section class="checkout-wrapper pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="checkout-style-1">
                        <div class="checkout-table table-responsive">
                            <table id="table_cart_main" class="table">
                                <thead>
                                    <tr>
                                        <th class="product">Product</th>
                                        <th class="quantity">Quantity</th>
                                        <th class="price">Price</th>
                                        <th class="action">Action</th>
                                    </tr>
                                </thead>
                                <!-- <tbody>
                                    <?php foreach ($products as $product) : ?>
                                        <tr>
                                            <td>
                                                <div class="product-cart d-flex">
                                                    <div class="product-thumb">
                                                        <img src="<?= base_url('uploads/') . $product['image']; ?>" width="40" height="auto" alt="Product" />
                                                    </div>
                                                    <div class="product-content media-body">
                                                        <h5 class="title">
                                                            <a href="#"><?= $product['name']; ?></a>
                                                        </h5>
                                                        <span>undefined</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-quantity d-inline-flex">
                                                    <button type="button" id="sub" class="sub">
                                                        <i class="mdi mdi-minus"></i>
                                                    </button>
                                                    <input type="text" value="0" />
                                                    <button type="button" id="add" class="add">
                                                        <i class="mdi mdi-plus"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="price"><?= $product['price']; ?></p>
                                            </td>
                                            <td>
                                                <ul class="action">
                                                    <li>
                                                        <a class="favorite" href="javascript:void(0)"><i class="mdi mdi-heart-outline"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="delete" href="javascript:void(0)"><i class="mdi mdi-delete"></i></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody> -->
                            </table>
                        </div>
                        <div class="checkout-coupon-total checkout-coupon-total-2 d-flex flex-wrap">
                            <div class="checkout-total">
                                <div class="single-total">
                                    <p class="value">Subtotal Price:</p>
                                    <p class="price">Loading...</p>
                                </div>
                                <div class="single-total">
                                    <p class="value">Shipping Cost (+):</p>
                                    <p class="price">Loading...</p>
                                </div>
                                <div class="single-total">
                                    <p class="value">Discount (-):</p>
                                    <p class="price">Loading...</p>
                                </div>
                                <div class="single-total total-payable">
                                    <p class="value">Total Payable:</p>
                                    <p class="price">Loading...</p>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-btn d-sm-flex justify-content-between">
                            <div class="single-btn">
                                <a href="home" class="main-btn primary-btn-border">continue shopping</a>
                            </div>
                            <div class="single-btn">
                                <a href="checkout" id="checkout_main" class="main-btn primary-btn">Pay now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Checkout 2 Part Ends ======-->
    <!--====== Footer Style 3 Part Start ======-->
    <?= $this->include('frontend/_components/customer/footer.php'); ?>
    <!--====== Footer Style 3 Part Ends ======-->

    <?= $this->include('frontend/_components/customer/script.php'); ?>
</body>
<!-- Backend -->
<?= $this->include('backend/customer/cart.php'); ?>
<script>
    // Calculate the total price
    let totalPrice = 0;
    cart.forEach(product => {
        const productQuantity = product.count || 0;
        const productPrice = product.price || 0;

        totalPrice += productQuantity * productPrice;
    })

    const prices = document.querySelectorAll('p.price');
    prices[0].textContent = '₱' + totalPrice.toFixed(2);
    prices[3].textContent = '₱' + (totalPrice).toFixed(2);
    // console.log(prices);
</script>
<!-- End Backend -->

</html>