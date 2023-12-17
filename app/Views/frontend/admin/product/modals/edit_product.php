<div class="modal fade" id="modal_edit_product" tabindex="-1" aria-labelledby="modalProductLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="edit_product" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" id="editId" name="id">
                    <div class="mb-3">
                        <label for="editName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="editName" name="name" placeholder="Horizontal glass smoke">
                        <p class="text-danger" id="editErrorName"></p>
                    </div>
                    <div class="mb-3">
                        <label for="editDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="editDescription" name="description" rows="3"></textarea>
                        <p class="text-danger" id="editErrorDescription"></p>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-8">
                                <label for="editType" class="form-label">Product Type</label>
                                <select id="editType" class="form-control form-select-lg mb-3" name="type" aria-label=".form-select-lg example">
                                    <option selected>~Choose~</option>
                                    <option value="1">Horizontal</option>
                                    <option value="2">Smoke</option>
                                    <option value="3">Plain</option>
                                </select>
                                <p class="text-danger" id="editErrorType"></p>
                            </div>
                            <div class="col-4">
                                <label for="editSize" class="form-label">Size</label>
                                <input type="text" class="form-control" id="editSize" name="size" placeholder="27 x 50">
                                <p class="text-danger" id="editErrorSize"></p>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="editPrice" class="form-label">Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">₱</span>
                                    <input type="text" class="form-control" id="editPrice" name="price" placeholder="500" aria-label="500" aria-describedby="basic-addon1">
                                </div>
                                <p class="text-danger" id="editErrorPrice"></p>
                            </div>
                            <div class="col">
                                <label for="editQuantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="editQuantity" name="quantity" placeholder="100">
                                <p class="text-danger" id="editErrorQuantity"></p>
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editImage" class="form-label">Display Image</label>
                        <input class="form-control" type="file" id="editImage" name="image" multiple>
                        <p class="text-danger" id="editErrorImage"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>