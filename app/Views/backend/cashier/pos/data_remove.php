<script>
    function removeProduct(assumedIndex) {
        var offset = 1;

        var storedData = localStorage.getItem('products');
        var parsedData = JSON.parse(storedData) || [];

        var productToRemove = parsedData.find(function(product) {
            return product.assumedIndex == assumedIndex;
        });

        if (productToRemove) {
            var index = parsedData.indexOf(productToRemove);

            parsedData.splice(index, 1);

            localStorage.setItem('products', JSON.stringify(parsedData));
        } else {
            console.error('Invalid assumed index for removal:', assumedIndex);
        }
        
        displayProductData();
    }
</script>