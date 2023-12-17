<div class="modal fade" id="modal_add_product" tabindex="-1" aria-labelledby="modalProductLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="add_product" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="newProductName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="newProductName" name="name" placeholder="Horizontal glass smoke">
                        <p class="text-danger" id="newErrorName"></p>
                    </div>
                    <div class="mb-3">
                        <label for="newProductDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="newProductDescription" name="description" rows="3"></textarea>
                        <p class="text-danger" id="newErrorDescription"></p>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-8">
                                <label for="newProductType" class="form-label">Product Type</label>
                                <select class="form-control form-select-lg mb-3" id="newProductType" name="type" aria-label=".form-select-lg example">
                                    <option value="" disabled selected>~ Choose ~</option>
                                    <option value="1">Horizontal</option>
                                    <option value="2">Smoke</option>
                                    <option value="3">Plain</option>
                                </select>
                                <p class="text-danger" id="newErrorType"></p>
                            </div>
                            <div class="col-4">
                                <label for="newProductSize" class="form-label">Size</label>
                                <input type="text" class="form-control" id="newProductSize" name="size" placeholder="27 x 50">
                                <p class="text-danger" id="newErrorSize"></p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="newProductPrice" class="form-label">Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">₱</span>
                                    <input type="text" class="form-control" id="newProductPrice" name="price" placeholder="500" aria-label="500" aria-describedby="basic-addon1">
                                    <p class="text-danger" id="newErrorPrice"></p>
                                </div>
                            </div>
                            <div class="col">
                                <label for="newProductQuantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="newProductQuantity" name="quantity" placeholder="100">
                                <p class="text-danger" id="newErrorQuantity"></p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="newProductImage" class="form-label">Display Image</label>
                        <input class="form-control" type="file" id="newProductImage" name="image" multiple>
                        <p class="text-danger" id="newErrorImage"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add New Product</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->include('backend/admin/product/add'); ?>