<script>
    $(document).on('click', '.set_to_active', function() {
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
                    $('#setActiveId').val(response.id);
                    if(response.active == 'Yes') {
                        $('#setActiveYes').prop('checked', true);
                        $('#setActiveNo').prop('checked', false);
                    } else {
                        $('#setActiveNo').prop('checked', true);
                        $('#setActiveYes').prop('checked', false);
                    }
                } else {
                    alert('This item is missing.');
                }
            }
        })
    });
    $(document).ready(function () {
        $('#set_active_promotion').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('admin/promotions/set_active'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function (data) {
                    if (data.error == 0) {
                        $('#modal_set_active_promotions').modal('hide');
                        $('#table_promotions').DataTable().ajax.reload();
                    } else {
                        $('#setIdError').text(data.id_error);
                        $('#setActiveError').text(data.active_error);
                    }
                }
            })
        })
    })
</script>