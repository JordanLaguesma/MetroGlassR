<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .bordered {
            border: 1px solid #000;
        }

        .action {
            list-style: none;
        }
    </style>
</head>

<body>
    <section>
        <p>Customer Name: </p>
        <p>Customer Email: </p>
        <p>Customer Phone: </p>
        <p>Customer Address: </p>
        <div class="table-responsive">
            <table id="table_receipt" class="bordered">
                <thead>
                    <tr>
                        <th class="bordered">Product Name</th>
                        <th class="bordered">Quantity</th>
                        <th class="bordered">Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td class="bordered" colspan="3">Total Items</td>
                        <td class="bordered">NaN</td>
                    </tr>
                    <tr>
                        <td class="bordered" colspan="3">Total Price</td>
                        <td class="bordered">NaN</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <ul class="action">
            <li class="ship">
                <button type="button">Ship</button>
            </li>
            <li class="ship">
                <button type="button">Deliver</button>
            </li>
        </ul>
    </section>
</body>

<script>
    var table = document.getElementById('table_receipt');

    var existingBody = table.querySelector('tbody');
    if (existingBody) {
        table.removeChild(existingBody);
    }

    var tableBody = document.createElement('tbody');
    table.appendChild(tableBody);
</script>

</html>