<script>
    $(document).on('click', '.edit', function() {
        var id = $(this).data('id');
        $.ajax({
            url: '<?= site_url('admin/promotions/fetch'); ?>',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'JSON',
            success: function(response) {
                if (response) {
                    $('#editPromoId').val(response.id);
                    $('#editPromoProduct').val(response.product_id);
                    $('#editPromoName').val(response.name);
                    $('#editPromoDescription').val(response.description);
                    $('#editStartDate').val(response.start_date);
                    $('#editEndDate').val(response.end_date);
                    $('#editPromoType').val(response.type);
                    $('#editPromoValue').val(response.value);
                    $('#editMinQuantity').val(response.min_quantity);
                } else {
                    alert('Failed to fetch data...');
                    $('#modal_edit_promotions').modal('hide');
                }
            }
        });
    });
    $(document).ready(function () {
        $('#edit_promotion').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('admin/promotions/edit'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function (data) {
                    if (data.error == 0) {
                        alert('Updated promotion!');
                        $('#modal_edit_promotions').modal('hide');
                        $('#table_promotions').DataTable().ajax.reload();
                    } else {
                        $('#editErrorProduct').text(data.product_error);
                        $('#editErrorName').text(data.name_error);
                        $('#editErrorDescription').text(data.description_error);
                        $('#editErrorStartDate').text(data.start_date_error);
                        $('#editErrorEndDate').text(data.end_date_error);
                        $('#editErrorType').text(data.type_error);
                        $('#editErrorValue').text(data.value_error);
                        $('#editErrorMinQuantity').text(data.min_quantity_error);
                    }
                }
            });
        });
    });
</script>
