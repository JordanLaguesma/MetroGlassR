<script>
    $(document).on('click', '.delete', function() {
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
                    $('#deletePromoId').val(response.id);
                    if(response.type == 1) {
                        $('#deletePromoValue').text('Sale ' + Math.floor(response.value) + '%');
                    } else {
                        $('#deletePromoValue').text('Sale ₱' + response.value);
                    }
                    $('#deletePromoProductName').text(response.product_name);
                    $('#deletePromoProductType').text('Type: ' + typeText);
                    $('#deletePromoProductSize').text('Size: ' + response.product_size);
                    $('#deletePromoProductQuantity').text('Stock:' + response.product_quantity);
                    $('#deletePromoProductPrice').text('Price: ₱' + response.product_price);
                    $('#deletePromoProductDescription').text(response.product_description);
                    $('#deletePromoProductImage').attr('src', response.image_url);
                } else {
                    alert('This item is missing.');
                    $('#deletePromoValue').text('Failed to load data...');
                    $('#deletePromoProductName').text('Failed to load data...');
                    $('#deletePromoProductType').text('Failed to load data...');
                    $('#deletePromoProductSize').text('Failed to load data...');
                    $('#deletePromoProductQuantity').text('Failed to load data...');
                    $('#deletePromoProductPrice').text('Failed to load data...');
                    $('#deletePromoProductDescription').text('Failed to load data...');
                }
            }
        })
    });
    $(document).ready(function () {
        $('#delete_promotion').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('admin/promotions/delete'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function(data) {
                    if (data.error == 0) {
                        alert('Promotion has been deleted!');
                        $('#modal_delete_promotions').modal('hide');
                        $('#table_promotions').DataTable().ajax.reload();
                    } else {
                        alert('This item no longer exists!');
                        $('deleteErrorId').text(data.id_error);
                    }
                }
            });
        })
    })
</script>