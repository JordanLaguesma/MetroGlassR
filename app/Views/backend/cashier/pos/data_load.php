<script>
    function displayProductData() {
        var storedData = localStorage.getItem('products');
        var parsedData = JSON.parse(storedData);

        var table = document.getElementById('table_invoice');

        var existingBody = table.querySelector('tbody');
        if (existingBody) {
            existingBody.remove();
        }

        var tableBody = document.createElement('tbody');
        table.appendChild(tableBody);

        if ((parsedData && Array.isArray(parsedData)) && (parsedData.length > 0)) {
            parsedData.forEach(function(product, index) {
                var newRow = tableBody.insertRow(tableBody.rows.length);

                var cell1 = newRow.insertCell(0);
                var cell2 = newRow.insertCell(1);
                var cell3 = newRow.insertCell(2);
                var cell4 = newRow.insertCell(3);

                cell1.innerHTML = `${product.name}`;
                cell2.innerHTML = `${product.quantity}`;
                cell3.innerHTML = `₱${product.total}`;
                cell4.innerHTML = `<a href="#" class="remove" data-id="${product.assumedIndex}"><i class="mdi mdi-close text-danger"></i></a>`;
            });

            var removeLinks = document.getElementsByClassName('remove');
            Array.from(removeLinks).forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    var index = this.getAttribute('data-id');
                    removeProduct(index);
                });
            });
        } else {
            var newRow = tableBody.insertRow(tableBody.rows.length);
            var cell = newRow.insertCell(0);
            cell.setAttribute('colspan', '4');
            cell.classList.add('text-center', 'text-muted');
            cell.innerHTML = 'No products in cart';
        }
    }

    displayProductData();
</script>