<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="table-responsive">
            <table id="table_receipt" class="table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </section>
</body>
<script>
    let table = document.getElementById('table_receipt');
    let existingBody = document.querySelector('tbody');
    if (existingBody) {
        existingBody.remove();
    }
</script>

</html>