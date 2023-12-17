<div class="modal fade" data-bs-backdrop="static" id="modal_product_info_add" tabindex="-1" aria-labelledby="modalProductLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Purchase</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="add_info">
                <div class="modal-body">
                    <input type="hidden" id="addInfoId" name="id" readonly>
                    <input type="hidden" id="addInfoPrice" name="price" readonly>
                    <div class="mb-3">
                        <p id="addInfoName" class="lead">Glass Door</p>
                    </div>
                    <div class="mb-3">
                        <label for="addInfoQuantity" class="form-label">Quantity</label>
                        <input type="number" name="quantity" id="addInfoQuantity" placeholder="Enter quantity" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add Purchase</button>
                </div>
            </form>
        </div>
    </div>
</div>