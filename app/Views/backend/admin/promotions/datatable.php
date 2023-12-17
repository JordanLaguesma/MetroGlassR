<script src="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.js"></script>
<script>
    $('#table_promotions').DataTable({
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [0, 1, 2, 3, 4, 5, 6, 7, 8]
        }],
        "order": [],
        "serverSide": true,
        "ajax": {
            url: '<?= site_url('admin/promotions/table'); ?>',
            type: 'POST'
        }
    });
</script>