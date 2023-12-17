<script>
    $(document).ready(function () {
        $('#add_promotion').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('admin/promotions/add'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function (data) {
                    if (data.error == 0) {
                        alert('New promotion added!');
                        $('#modal_add_promotions').modal('hide');
                        $('#table_promotions').DataTable().ajax.reload();
                    } else {
                        $('#newErrorProduct').text(data.product_error);
                        $('#newErrorPromoName').text(data.name_error);
                        $('#newErrorPromoDescription').text(data.description_error);
                        $('#newErrorStartDate').text(data.start_date_error);
                        $('#newErrorEndDate').text(data.end_date_error);
                        $('#newErrorPromoType').text(data.type_error);
                        $('#newErrorPromoValue').text(data.value_error);
                        $('#newErrorMinQuantity').text(data.min_quantity_error);
                    }
                }
            })
        })
    })
</script>