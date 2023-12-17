<script>
    $(document).ready(function() {
        $("#add_product").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('admin/product/settings/add'); ?>',
                type: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                dataType: 'JSON',
                success: function(data) {
                    if (data.error == 0) {
                        alert('New product added!');
                        $('#modal_add_product').modal('hide');
                        if($('#table_products')) {
                            $('#table_products').DataTable().ajax.reload();
                        }
                    } else {
                        $('#newErrorName').text(data.name_error);
                        $('#newErrorDescription').text(data.description_error);
                        $('#newErrorType').text(data.type_error);
                        $('#newErrorSize').text(data.size_error);
                        $('#newErrorPrice').text(data.price_error);
                        $('#newErrorQuantity').text(data.quantity_error);
                        $('#newErrorImage').text(data.image_error);
                    }
                }
            })
        })
    })
</script>