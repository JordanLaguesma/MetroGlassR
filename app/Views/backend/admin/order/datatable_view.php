<script src="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.js"></script>
<script>
    $('#table_orders_view').DataTable({
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [0, 1, 2, 3, 4, 5, 6],
        }],
        "order": [],
        "serverSide": true,
        "ajax": {
            url: '<?= site_url('admin/order/view/table'); ?>',
            type: 'POST'
        }
    });
</script>