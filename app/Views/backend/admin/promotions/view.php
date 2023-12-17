<script>
    $(document).on('click', '.view', function() {
        var id = $(this).data('id');
        $.ajax({
            url: '<?= site_url('admin/promotions/fetch'); ?>',
            type: 'POST',
            data: {
                id: id,
            },
            dataType: 'JSON',
            success: function(response) {
                if (response) {
                    var typeMapping = {
                        1: 'Horizontal',
                        2: 'Smoke',
                        3: 'Plain',
                    };
                    var typeText = typeMapping[response.product_type] || 'Unknown Type';
                    if (response.type == 1) {
                        $('#viewPromoValue').text('Sale ' + Math.floor(response.value) + '%');
                    } else {
                        $('#viewPromoValue').text('Sale ₱' + response.value);
                    }
                    $('#viewPromoProductName').text(response.product_name);
                    $('#viewPromoProductType').text('Type: ' + typeText);
                    $('#viewPromoProductSize').text('Size: ' + response.product_size);
                    $('#viewPromoProductQuantity').text('Stock: ' + response.product_quantity);
                    $('#viewPromoProductPrice').text('Price: ₱' + response.product_price);
                    $('#viewPromoProductDescription').text(response.product_description);
                    $('#viewPromoProductImage').attr('src', response.image_url);
                } else {
                    alert('This item is missing.');
                    $('#viewPromoValue').text('Failed to load data...');
                    $('#viewPromoProductName').text('Failed to load data...');
                    $('#viewPromoProductType').text('Failed to load data...');
                    $('#viewPromoProductSize').text('Failed to load data...');
                    $('#viewPromoProductQuantity').text('Failed to load data...');
                    $('#viewPromoProductPrice').text('Failed to load data...');
                    $('#viewPromoProductDescription').text('Failed to load data...');
                }
            }
        });
    });
</script>
