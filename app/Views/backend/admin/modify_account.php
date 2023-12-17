<script>
    // Fetch Data for Account Modification
    $(document).on('click', '.modify-account', function () {
        var id = $(this).data('id');
        $.ajax({
            url: '<?= site_url('user/fetch'); ?>',
            type: 'POST',
            data: {
                id: id,
            },
            dataType: 'JSON',
            success: function(response) {
                if (response) {
                    $('#modAccId').val(response.id);
                    $('#modAccFullname').val(response.fullname);
                    $('#modAccUsername').val(response.username);
                    $('#modAccEmail').val(response.email);
                } else {
                    alert('Data not found...');
                    $('#modal_modify_account').modal('hide');
                }
            }
        })
    })
    // Fetch Data for Password Change
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
        // Change the account settings
        $('#modify_account').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('user/modify_account'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function (data) {
                    if (data.error == 0) {
                        alert(`Updated account settings!\nLogout and login again to see the changes.`);
                        $('#modal_modify_account').modal('hide');
                    } else {
                        $('#modAccErrorId').text(data.id_error);
                        $('#modAccErrorFullname').text(data.fullname_error);
                        $('#modAccErrorUsername').text(data.username_error);
                        $('#modAccErrorEmail').text(data.email_error);
                    }
                }
            })
        })
        // Change the password
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