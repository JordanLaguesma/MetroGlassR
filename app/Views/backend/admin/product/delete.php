<script>
    $(document).on('click', '.delete', function() {
        var id = $(this).data('id');
        $.ajax({
            url: '<?= base_url('admin/product/settings/fetch') ?>',
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
                    var typeText = typeMapping[response.type] || 'Unknown Type';
                    $('#deleteId').val(response.id);
                    $('#deleteImage').attr('src', response.image_url);
                    $('#deleteName').text(response.name);
                    $('#deleteType').text('Type: ' + typeText);
                    $('#deleteSize').text('Size: ' + response.size);
                    $('#deleteQuantity').text('Stock: ' + response.quantity);
                    $('#deletePrice').text('Price: ₱' + response.price);
                    $('#deleteDescription').text(response.description);
                }
            }
        })
    });
    $(document).ready(function() {
        $('#delete_product').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('admin/product/settings/delete'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function(data) {
                    if (data.error == 0) {
                        alert('Product deleted!');
                        $('#modal_delete_product').modal('hide');
                        $('#table_products').DataTable().ajax.reload();
                    } else {
                        $('#deleteErrorId').text(data.id_error);
                    }
                }
            })
        })
    })
</script>