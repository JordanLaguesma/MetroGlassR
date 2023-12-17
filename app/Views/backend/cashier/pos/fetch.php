<script>
    $(document).on('click', '.add_cart', function() {
        var id = $(this).data('id');
        $.ajax({
            url: '<?= site_url('cashier/pos/fetch'); ?>',
            type: 'POST',
            data: {
                id: id,
            },
            dataType: 'JSON',
            success: function(response) {
                if (response) {
                    $('#addInfoId').val(response.id);
                    $('#addInfoPrice').val(response.price);
                    $('#addInfoName').text(response.name);
                } else {
                    alert('!!WARNING!! Item not found...');
                }
            }
        })
    })
</script>