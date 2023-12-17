<script>
    $(document).on('click', '.view', function() {
        var id = $(this).data('id');
        $.ajax({
            url: '<?= site_url('admin/customer/account/fetch'); ?>',
            type: 'POST',
            data: {
                id: id,
            },
            dataType: 'JSON',
            success: function(response) {
                if (response) {
                    $('#viewFullName').text(response.firstname + ' ' + response.lastname);
                    $('#viewPhone').text(response.phone);
                    $('#viewEmail').text(response.email);
                    
                    var status = document.getElementById('viewStatusSmall');
                    if (response.status == 1) {
                        $('#viewStatusBig').text('Online');
                        $('#viewStatusSmall').text('Online');
                        status.classList.remove('bg-secondary');
                        status.classList.add('bg-success');
                    } else {
                        $('#viewStatusBig').text('Offline');
                        $('#viewStatusSmall').text('Offline');
                        status.classList.remove('bg-secondary');
                        status.classList.add('bg-danger');
                    }
                } else {
                    alert('This item is missing.');
                    $('#viewFullName').text(response.firstname + ' ' + response.lastname);
                    $('#viewPhone').text(response.phone);
                    $('#viewEmail').text(response.email);

                    var status = document.getElementById('viewStatusSmall');
                    $('#viewStatusBig').text('Missing');
                    $('#viewStatusSmall').text('Missing');
                    status.classList.remove('bg-secondary');
                    status.classList.add('bg-danger');
                }
            }
        })
    })
</script>