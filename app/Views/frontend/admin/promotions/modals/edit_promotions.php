<div class="modal fade" id="modal_edit_promotions" tabindex="-1" aria-labelledby="modalProductLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modify Promotions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="edit_promotion">
                <div class="modal-body">
                    <input type="hidden" id="editPromoId" name="id">
                    <div class="mb-3">
                        <label for="editPromoProduct" class="form-label">Promo Product</label>
                        <select name="product" id="editPromoProduct" class="form-control form-select">
                            <option value="" disabled selected>~ Choose ~</option>
                            <?php
                            for ($i = 0; $i < count($products); $i++) {
                                echo '<option value="' . $products[$i]['id'] . '">' . $products[$i]['name'] . '</option>';
                            }
                            ?>
                        </select>
                        <p id="editErrorPromoProduct" class="text-danger"></p>
                    </div>
                    <div class="mb-3">
                        <label for="editPromoName" class="form-label">Promo Name</label>
                        <input type="text" id="editPromoName" class="form-control" name="name" placeholder="Horizontal glass smoke">
                        <p id="editErrorPromoName" class="text-danger"></p>
                    </div>
                    <div class="mb-3">
                        <label for="editPromoDescription" class="form-label">Description</label>
                        <textarea id="editPromoDescription" class="form-control" name="description" rows="3"></textarea>
                        <p id="editErrorPromoDescription" class="text-danger"></p>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="editStartDate" class="form-label">Start Date</label>
                                <input type="datetime-local" class="form-control" name="start_date" id="editStartDate">
                                <p id="editErrorStartDate" class="text-danger"></p>
                            </div>
                            <div class="col-6">
                                <label for="editEndDate" class="form-label">End Date</label>
                                <input type="datetime-local" class="form-control" name="end_date" id="editEndDate">
                                <p id="editErrorEndDate" class="text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-8">
                                <label for="editPromoType" class="form-label">Discount Type</label>
                                <select id="editPromoType" class="form-control form-select-lg mb-3" name="type" aria-label=".form-select-lg example">
                                    <option selected>~Choose~</option>
                                    <option value="1">Percentage</option>
                                    <option value="2">Fixed</option>
                                </select>
                                <p id="editErrorPromoType" class="text-danger"></p>
                            </div>
                            <div class="col-4">
                                <label for="editPromoValue" class="form-label">Discount Value</label>
                                <input id="editPromoValue" type="number" class="form-control" name="value" placeholder="45.00">
                                <p id="editErrorPromoValue" class="text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="editMinQuantity" class="form-label">Minimum Purchase</label>
                                <input type="text" id="editMinQuantity" class="form-control" name="min_quantity" placeholder="500" aria-label="500">
                                <p id="editErrorMinQuantity" class="text-danger"></p>
                            </div>
                        </div>
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