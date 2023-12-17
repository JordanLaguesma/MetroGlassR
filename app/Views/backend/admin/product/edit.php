<script>
    // Fetch
    $(document).on('click', '.edit', function() {
        var id = $(this).data('id');
        $.ajax({
            url: '<?= site_url('admin/product/settings/fetch'); ?>',
            type: 'POST',
            data: {
                id: id,
            },
            dataType: 'JSON',
            success: function(response) {
                if (response) {
                    var imageUrl = '<?= base_url('uploads/'); ?>' + response.image;
                    $('#editId').val(response.id);
                    $('#editName').val(response.name);
                    $('#editDescription').val(response.description);
                    $('#editType').val(response.type);
                    $('#editSize').val(response.size);
                    $('#editPrice').val(response.price);
                    $('#editQuantity').val(response.quantity);
                  //  $('#editImage').attr('src', response.image_url);
                } else {
                    alert('Failed to fetch data...');
                }
            },
        })
    });
    // Execute the update
    $(document).ready(function() {
        $('#edit_product').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('admin/product/settings/edit'); ?>',
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                dataType: 'JSON',
                success: function(data) {
                    if (data.error == 0) {
                        alert('Information of the product has been updated!');
                        $('#modal_edit_product').modal('hide');
                        $('#table_products').DataTable().ajax.reload();
                    } else {
                        $('#editErrorId').text(data.id_error);
                        $('#editErrorName').text(data.name_error);
                        $('#editErrorDescription').text(data.description_error);
                        $('#editErrorType').text(data.type_error);
                        $('#editErrorSize').text(data.size_error);
                        $('#editErrorPrice').text(data.price_error);
                        $('#editErrorQuantity').text(data.quantity_error);
                        $('#editErrorImage').text(data.image_error);
                    }
                },
            })
        });
    });
</script>