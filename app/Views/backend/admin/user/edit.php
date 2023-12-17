<script>
    // Fetch
    $(document).on('click', '.edit', function() {
        var id = $(this).data('id');
        $('#passwordEdit').val('');
        $('#confpassEdit').val('');
        $.ajax({
            url: '<?= site_url('admin/user/account/fetch'); ?>',
            type: 'POST',
            data: {
                id: id,
            },
            dataType: 'JSON',
            success: function(response) {
                if (response) {
                    $('#editId').val(response.id);
                    $('#editFirstname').val(response.firstname);
                    $('#editLastname').val(response.lastname);
                    $('#editRole').val(response.role);
                    $('#editUsername').val(response.username);
                    $('#editEmail').val(response.email);
                } else {
                    alert('Failed to fetch data...');
                }
            },
        })
    });
    // Execute the update
    $(document).ready(function() {
        $('#edit_user').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('admin/user/account/edit'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function(data) {
                    if (data.error == 0) {
                        alert('User\'s information updated!');
                        $('#modal_edit_users').modal('hide');
                        $('#table_users').DataTable().ajax.reload();
                    } else {
                        $('#editErrorId').text(data.id_error);
                        $('#editErrorFirstname').text(data.firstname_error);
                        $('#editErrorLastname').text(data.lastname_error);
                        $('#editErrorRole').text(data.role_error);
                        $('#editErrorUsername').text(data.username_error);
                        $('#editErrorEmail').text(data.email_error);
                        $('#editErrorPassword').text(data.password_error);
                        $('#editErrorConfpass').text(data.confpass_error);
                    }
                },
            })
        });
    });
</script>