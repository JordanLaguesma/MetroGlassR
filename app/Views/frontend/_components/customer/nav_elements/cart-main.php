<?php if ((current_url() !== site_url('customer/cart') && current_url() !== site_url('customer/checkout')) && session()->get('logged_in') === TRUE) : ?>
    <div class="navbar-cart">
        <a class="icon-btn primary-icon-text icon-text-btn" href="javascript:void(0)">
            <img src="<?= base_url("customer/assets"); ?>/images/icon-svg/cart-1.svg" alt="Icon">
            <span id="cart_items_main" class="icon-text text-style-1"></span>
        </a>
        <div class="navbar-cart-dropdown">
            <div class="checkout-style-2">
                <div class="checkout-header d-flex justify-content-between">
                    <h6 class="title">Shopping Cart</h6>
                </div>
                <div class="checkout-table table-responsive">
                    <table id="table_cart_tab_main" class="table">
                        
                    </table>
                </div>
                <div class="checkout-footer">
                    <div class="checkout-sub-total d-flex justify-content-between">
                        <p class="value">Subtotal Price:</p>
                        <p class="price">$144</p>
                    </div>
                    <div class="checkout-btn">
                        <a href="cart" class="main-btn primary-btn-border">View Cart</a>
                        <a href="checkout" class="main-btn primary-btn">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>