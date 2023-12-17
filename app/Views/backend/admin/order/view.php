<script>
    $(document).on('click', '.view', function() {
        var id = $(this).data('id');
        $.ajax({
            url: '<?= site_url('admin/order/fetch'); ?>',
            type: 'POST',
            data: {
                id: id,
            },
            dataType: 'JSON',
            success: function(response) {
                if (response) {
                    console.log(response.id);
                    var statusMapping = {
                        0: 'Pending',
                        1: 'Preparing',
                        2: 'Confirmed',
                    };
                    var typeMapping = {
                        0: 'Horizontal',
                        1: 'Smoke',
                        2: 'Plain',
                    };
                    var typeText = typeMapping[response.product_type] ?? 'Unknown Type';
                    var statusText = statusMapping[response.status] || 'Unknown Status';
                    $('#viewName').text(response.firstname + ' ' + response.lastname);
                    $('#viewStatus').text(statusText);
                    $('#viewProduct').text(response.product_name);
                    $('#viewType').text(typeText);
                    $('#viewDate').text(response.order_date);
                    $('#viewQuantity').text(response.order_quantity);
                    $('#viewSubtotal').text('₱' + response.order_subtotal);
                } else {
                    alert('This data does not exist.');
                    $('#modal_view_orders').modal('hide');
                }
            }
        })
    })
</script>