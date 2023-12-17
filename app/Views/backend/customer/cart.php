<script>
    const customerId = '<?= session()->get('id'); ?>'; // Get the customer ID

    const cart = JSON.parse(localStorage.getItem(`cart_${customerId}`)) || []; // Load the cart from local storage

    const currentURL = '<?= site_url(); ?>';  // Get the current URL
    const currentPage = window.location.href; // Get the current page

    const paraPrices = document.querySelectorAll('p.price'); // Get all paragraph elements with the 'price' class
    if (paraPrices) {
        paraPrices.forEach(paraPrice => {
            let totalPrice = 0;
            cart.forEach(product => {
                let quantity = product.count || 1; // Get the quantity
                let price = product.price || 1;    // Get the price

                totalPrice += quantity * price; // Calculate the total price
            })
            if (currentPage === currentURL + '/customer/cart') {
                paraPrices[0].textContent = '₱' + totalPrice.toFixed(2); // For the cart page
            } else if (currentPage === currentURL + '/customer/checkout') {
                paraPrices[0].textContent = '₱' + totalPrice.toFixed(2); // For the checkout page
                paraPrices[4].textContent = '₱' + totalPrice.toFixed(2);
            } else {
                paraPrice.textContent = '₱' + totalPrice.toFixed(2); // For any page outside cart or checkout
            }
        })
        // console.log(paraPrices); // Print the total price via console
    }

    const buttonsATC = document.querySelectorAll('.add_to_cart'); // Get all buttons with the 'add_to_cart' class
    if (buttonsATC) {
        buttonsATC.forEach(function(button) {
            button.addEventListener('click', function() {
                // Get the product details
                const productId = this.getAttribute('data-id');
                const productName = this.getAttribute('data-name');
                const productType = this.getAttribute('data-type');
                const productSize = this.getAttribute('data-size');
                const productImage = this.getAttribute('data-image');
                const productPrice = this.getAttribute('data-price');

                <?php if (!session()->get('id')) : ?> // If the customer is not logged in
                    alert('Please login. You will be redirected to login page.');
                    window.location.href = 'login';
                <?php else : ?> // If the customer is logged in
                    const existingItem = cart.find(item => item.id === productId);
                    if (existingItem) {
                        alert('This item is already in your cart!'); // Alert the customer if he/she has already added the item to the cart
                    } else {
                        // Add the item to the cart
                        const product = {
                            id: productId,
                            name: productName,
                            size: productSize,
                            type: productType,
                            image: productImage,
                            price: productPrice,
                            count: 1
                        }

                        cart.push(product);
                        localStorage.setItem(`cart_${customerId}`, JSON.stringify(cart));

                        alert('Item added to cart: ' + product.name + '!');
                        displayBadge();
                        displayCart();
                    }
                <?php endif; ?>
            })
        })
        // console.log(buttonsATC); // Print the buttons via console
    }

    function displayBadge() {
        const totalItems = cart.reduce((sum, item) => sum + (item.count || 1), 0); // Get the total number of items

        const badges = document.querySelectorAll('[id^="cart_items"]'); // Get all badges with the dynamic cart_items ID

        badges.forEach(function(badge) {
            badge.innerText = totalItems.toString(); // Update the badge with the total number of items
        });
        // console.log(badges); // Print the badges via console
    }

    function displayCart() {
        const tables = document.querySelectorAll('[id^="table_cart"]');

        tables.forEach(function(table) {
            const existingBody = table.querySelector('tbody');
            if (existingBody) {
                existingBody.remove(); // Remove the existing table body when it exists
            }

            // Create a new table body
            const tableBody = document.createElement('tbody');
            table.appendChild(tableBody);

            if (currentPage === currentURL + '/customer/cart') {
                if ((cart && Array.isArray(cart)) && (cart.length > 0)) {
                    cart.forEach(function(item) {
                        const newRow = tableBody.insertRow(tableBody.rows.length);
                        const cell1 = newRow.insertCell(0);
                        const cell2 = newRow.insertCell(1);
                        const cell3 = newRow.insertCell(2);
                        const cell4 = newRow.insertCell(3);

                        cell1.innerHTML = `
                            <div class="product-cart d-flex">
                                <div class="product-thumb">
                                    <img src="<?= base_url('uploads/'); ?>${item.image}" width="40" height="auto" alt="Product" />
                                </div>
                                <div class="product-content media-body">
                                    <h5 class="title">
                                        <a href="product_details?id=${item.id}">${item.name}</a>
                                    </h5>
                                    <span>${item.size}</span>
                                </div>
                            </div>
                        `;
                        cell2.innerHTML = `
                            <div class="product-quantity d-inline-flex">
                                <button type="button" class="decrement" onclick="subCount(${item.id})">
                                    <i class="mdi mdi-minus"></i>
                                </button>
                                <input type="text" class="count" value="${item.count}" />
                                <button type="button" class="increment" onclick="addCount(${item.id})">
                                    <i class="mdi mdi-plus"></i>
                                </button>
                            </div>
                        `;
                        cell3.innerHTML = `₱${(item.count * item.price).toFixed(2)}`;
                        cell4.innerHTML = `
                            <ul class="action">
                                <li>
                                    <a class="favorite" href="javascript:void(0)" data-id="${item.id}"><i class="mdi mdi-heart-outline"></i></a>
                                </li>
                                <li>
                                    <a class="delete" href="javascript:void(0)" data-id="${item.id}" onclick="removeFromCart(${item.id})"><i class="mdi mdi-delete"></i></a>
                                </li>
                            </ul>
                        `;
                    });
                } else {
                    const newRow = tableBody.insertRow(tableBody.rows.length);
                    const cell = newRow.insertCell(0);
                    cell.classList.add('text-center', 'text-muted');
                    cell.setAttribute('colspan', '4');
                    cell.innerHTML = 'No products in cart';
                }
            } else if (currentPage !== currentURL + '/customer/checkout' && currentPage !== currentURL + '/customer/cart') {
                if ((cart && Array.isArray(cart)) && (cart.length > 0)) {
                    cart.forEach(function(item) {
                        const newRow = tableBody.insertRow(tableBody.rows.length);

                        const cell1 = newRow.insertCell(0);
                        const cell2 = newRow.insertCell(1);
                        const cell3 = newRow.insertCell(2);
                        const cell4 = newRow.insertCell(3);

                        cell1.innerHTML = `
                            <div class="product-cart d-flex">
                                <div class="product-thumb">
                                    <img src="<?= base_url('uploads/'); ?>${item.image}" width="40" height="auto" alt="Product">
                                </div>
                                <div class="product-content media-body">
                                    <h5 class="title">
                                        <a href="product_details?id=${item.id}">${item.name}</a>
                                    </h5>
                                    <ul>
                                        <li><span>${item.size}</span></li>
                                    </ul>
                                </div>
                            </div>
                        `;
                        cell2.innerHTML = `
                            <div class="product-quantity d-inline-flex">
                                <button type="button" class="decrement" onclick="subCount(${item.id})">
                                    <i class="mdi mdi-minus"></i>
                                </button>
                                <input type="text" class="count" value="${item.count}" readonly />
                                <button type="button" class="increment" onclick="addCount(${item.id})">
                                    <i class="mdi mdi-plus"></i>
                                </button>
                            </div>
                        `;
                        cell3.innerHTML = `<p class="price">₱${(item.count * item.price).toFixed(2)}</p>`;
                        cell4.innerHTML = `
                            <ul class="action">
                                <li>
                                    <a class="favorite" href="javascript:void(0)" data-id="${item.id}"><i class="mdi mdi-heart-outline"></i></a>
                                </li>
                                <li>
                                    <a class="delete" href="javascript:void(0)" data-id="${item.id}" onclick="removeFromCart(${item.id})"><i class="mdi mdi-delete"></i></a>
                                </li>
                            </ul>
                        `;
                    })
                } else {
                    const newRow = tableBody.insertRow(tableBody.rows.length);
                    const cell = newRow.insertCell(0);
                    cell.classList.add('text-center', 'text-muted');
                    cell.setAttribute('colspan', '4');
                    cell.innerHTML = 'No products in cart';
                }
            } else {
                if ((cart && Array.isArray(cart)) && (cart.length > 0)) {
                    cart.forEach(function(item) {
                        const newRow = tableBody.insertRow(tableBody.rows.length);

                        const cell1 = newRow.insertCell(0);
                        const cell2 = newRow.insertCell(1);
                        cell1.classList.add('checkout-product');
                        cell2.classList.add('checkout-price');

                        let typeMapping = {
                            1: 'Horizontal',
                            2: 'Smoke',
                            3: 'Plain'
                        }
                        let type = typeMapping[item.type] || 'Unknown';

                        cell1.innerHTML = `
                            <div class="product-cart d-flex">
                                <div class="product-thumb">
                                    <img src="<?= base_url('uploads/'); ?>${item.image}" alt="Product" />
                                </div>
                                <div class="product-content media-body">
                                    <h5 class="title">
                                        <a href="product_details?id=${item.id}">${item.name}</a>
                                    </h5>
                                    <ul>
                                        <li><span>${type}</span></li>
                                        <li><span>${item.size}</span></li>
                                        <li><span>${item.count} X ₱${item.price}</span></li>
                                    </ul>
                                </div>
                            </div>
                        `;
                        cell2.innerHTML = `<p class="price">₱${(item.count * item.price).toFixed(2)}</p>`;
                    })
                } else {
                    const newRow = tableBody.insertRow(tableBody.rows.length);
                    const cell = newRow.insertCell(0);
                    cell.classList.add('text-center', 'text-muted');
                    cell.setAttribute('colspan', '2');
                    cell.innerHTML = 'No products in cart';
                }
            }
        });
        // console.log(tables);
    }

    displayBadge();
    displayCart();

    function removeFromCart(productId) {
        const existingItem = cart.find(item => item.id === productId);
        console.log(existingItem);
    }

    function subCount(productId) {
        console.log(productId);
    }

    function addCount(productId) {
        console.log(productId);
    }
</script>