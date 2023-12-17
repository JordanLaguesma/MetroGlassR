<script>
    $(document).on('click', '.view', function() {
        var id = $(this).data('id');
        $.ajax({
            url: '<?= base_url('cashier/inventory/fetch') ?>',
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
                    $('#viewImage').attr('src', response.image_url);
                    $('#viewName').text(response.name);
                    $('#viewType').text('Type: ' + typeText);
                    $('#viewSize').text('Size: ' + response.size);
                    $('#viewQuantity').text('Stock: ' + response.quantity);
                    $('#viewPrice').text('Price: ₱' + response.price);
                    $('#viewDescription').text(response.description);
                }
            }
        })
    })
</script>