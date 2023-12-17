<div class="modal fade" id="modal_add_promotions" tabindex="-1" aria-labelledby="modalProductLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Promotions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="add_promotion">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="newPromoProduct" class="form-label">Promo Product</label>
                        <select name="product" id="newPromoProduct" class="form-select form-control">
                            <option value="" disabled selected>~ Choose ~</option>
                            <?php
                            for ($i = 0; $i < count($products); $i++) {
                                echo '<option value="' . $products[$i]['id'] . '">' . $products[$i]['name'] . '</option>';
                            }
                            ?>
                        </select>
                        <p id="newErrorProduct" class="text-danger"></p>
                    </div>
                    <div class="mb-3">
                        <label for="newPromoName" class="form-label">Promo Name</label>
                        <input type="text" class="form-control" id="newPromoName" name="name" placeholder="Horizontal glass smoke">
                        <p id="newErrorPromoName" class="text-danger"></p>
                    </div>
                    <div class="mb-3">
                        <label for="newPromoDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="newPromoDescription" name="description" rows="3"></textarea>
                        <p id="newErrorPromoDescription" class="text-danger"></p>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="newDateStart" class="form-label">Start Date</label>
                                <input type="datetime-local" class="form-control" name="start_date" id="newDateStart">
                                <p id="newErrorStartDate" class="text-danger"></p>
                            </div>
                            <div class="col-6">
                                <label for="newDateEnd" class="form-label">End Date</label>
                                <input type="datetime-local" class="form-control" name="end_date" id="newDateEnd">
                                <p id="newErrorEndDate" class="text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-8">
                                <label for="newType" class="form-label">Discount Type</label>
                                <select id="newType" name="type" class="form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option value="" selected>~Choose~</option>
                                    <option value="1">Percentage</option>
                                    <option value="2">Fixed</option>
                                </select>
                                <p id="newErrorPromoType" class="text-danger"></p>
                            </div>
                            <div class="col-4">
                                <label for="newValue" class="form-label">Discount Value</label>
                                <input type="number" class="form-control" id="newValue" name="value" placeholder="45.00">
                                <p id="newErrorPromoValue" class="text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="newMinQuantity" class="form-label">Minimum Purchase</label>
                                <input type="text" class="form-control" id="newMinQuantity" name="min_quantity" placeholder="500" aria-label="500">
                                <p id="newErrorMinQuantity" class="text-danger"></p>
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