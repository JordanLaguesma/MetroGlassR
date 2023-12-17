<script>
    $(document).on('click', '.change-password', function() {
        var id = $(this).data('id');
        $.ajax({
            url: '<?= site_url('user/fetch'); ?>',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'JSON',
            success: function(response) {
                if (response) {
                    $('#changePassId').val(response.id);
                } else {
                    alert('Data not found...');
                    $('#modal_change_password').modal('hide');
                }
            }
        })
    })
    $(document).ready(function() {
        $('#change_password').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('user/change_password'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function(data) {
                    if (data.error == 0) {
                        alert('Password successfully changed!');
                        $('#modal_change_password').modal('hide');
                    } else {
                        $('#changePassErrorId').text(data.id_error);
                        $('#changePassErrorPassword').text(data.password_error);
                        $('#changePassErrorConfpass').text(data.confpass_error);
                    }
                }
            })
        })
    })
</script>