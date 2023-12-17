<div class="modal fade" id="modal_delete_product" tabindex="-1" aria-labelledby="modalProductLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalProductLabel">Delete Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="delete_product" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id" id="deleteId">
                    <label class="form-label">Do you want to delete this product?</label>
                    <div class="row">
                        <div class="col-6 text-center">
                            <img id="deleteImage" class="img-fluid" src="#" alt="" style="height: 200px; width: auto;">
                        </div>
                        <div class="col-6">
                            <p class="lead mb-0" id="deleteName">Loading...</p>
                            <p class="mb-0" id="deleteType"><small>Loading...</small></p>
                            <p class="mb-0" id="deleteSize"><small>Loading...</small></p>
                            <p class="mb-0" id="deleteQuantity"><small>Loading...</small></p>
                            <p class="mb-0" id="deletePrice">Loading...</p>
                            <p class="mt-3 mb-0">Description:</p>
                            <p class="mt-0" id="deleteDescription">
                                <small>
                                    Loading...
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>