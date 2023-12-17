<script>
    // Fetch
    $(document).on('click', '.delete', function() {
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
                    $('#deleteId').val(response.id);
                    $('#deleteFullname').text(response.firstname + ' ' + response.lastname);
                } else {
                    alert('Failed to fetch data...');
                }
            },
        })
    });
    // Execute the deletion
    $(document).ready(function() {
        var name = $('#deleteFullname').text();
        $('#delete_user').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('admin/user/account/delete'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function(data) {
                    if (data.error == 0) {
                        alert('The user ' + name + ' has been deleted!');
                        $('#modal_delete_users').modal('hide');
                        $('#table_users').DataTable().ajax.reload();
                    } else {
                        $('#deleteErrorId').text(data.id_error);
                    }
                }
            })
        })
    });
</script>