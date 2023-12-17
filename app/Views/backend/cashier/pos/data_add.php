<script>
    $(document).ready(function() {
        $('#add_info').on('submit', function(e) {
            e.preventDefault();

            var id = $('#addInfoId').val();
            var name = $('#addInfoName').text();
            var quantity = parseFloat($('#addInfoQuantity').val());
            var price = parseFloat($('#addInfoPrice').val());

            if (isNaN(quantity) || isNaN(price) || quantity < 0 || price < 0) {
                alert('Please enter valid quantity and price.');
                return;
            }

            var total = (quantity * price).toFixed(2);

            var existingProducts = JSON.parse(localStorage.getItem('products')) || [];

            var assumedIndex = existingProducts.length + 1;

            var newProduct = {
                id: id,
                name: name,
                quantity: quantity,
                total: total,
                assumedIndex: assumedIndex
            };

            existingProducts.push(newProduct);
            localStorage.setItem('products', JSON.stringify(existingProducts));

            $('#modal_product_info_add').modal('hide');
            displayProductData();
        });
    });
</script>