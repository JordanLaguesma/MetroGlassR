<script>
    $(document).on('click', '.view', function() {
        var id = $(this).data('id');
        $.ajax({
            url: '<?= site_url('admin/user/account/fetch'); ?>',
            type: 'POST',
            data: {
                id: id,
            },
            dataType: 'JSON',
            success: function(response) {
                if (response) {
                    var roleMapping = {
                        0: 'Admin',
                        1: 'Co-Admin',
                        2: 'Cashier',
                        3: 'Delivery',
                    };
                    var roleText = roleMapping[response.role] || 'Unknown Role';
                    $('#roleView').text(roleText);
                    $('#fullnameView').text(response.firstname + ' ' + response.lastname);
                    $('#emailView').text(response.email);
                } else {
                    alert('Failed to fetch data...');
                }
            }
        })
    });
</script>