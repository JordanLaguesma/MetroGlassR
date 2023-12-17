<script>
    $(document).ready(function() {
        $('#add_user').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('admin/user/account/add'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function(data) {
                    if (data.error == 0) {
                        alert('New user created!');
                        $('#modal_add_users').modal('hide');
                        $('#table_users').DataTable().ajax.reload();
                    } else {
                        $('#newErrorFirstname').text(data.firstname_error);
                        $('#newErrorLastname').text(data.lastname_error);
                        $('#newErrorRole').text(data.role_error);
                        $('#newErrorUsername').text(data.username_error);
                        $('#newErrorEmail').text(data.email_error);
                        $('#newErrorPassword').text(data.password_error);
                        $('#newErrorConfpass').text(data.confpass_error);
                    }
                }
            })
        });
    });
</script>