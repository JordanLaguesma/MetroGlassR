<script src="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.js"></script>
<script>
    $('#table_users').DataTable({
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [0, 1, 2, 3]
        }],
        "order": [],
        "serverSide": true,
        "ajax": {
            url: "<?= site_url('admin/user/account/table') ?>",
            type: 'POST'
        }
    });
</script>