<div class="modal fade" id="modal_delete_promotions" tabindex="-1" aria-labelledby="modalProductLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Promotions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="delete_promotion">
                <div class="modal-body">
                    <input type="hidden" id="deletePromoId" name="id">
                    <p id="deleteErrorId" class="text-danger"></p>
                    <div class="row">
                        <div class="col-6 text-center">
                            <div class="position-relative">
                                <div id="deletePromoValue" class="ribbon">Loading...</div>
                                <img id="deletePromoProductImage" class="img-fluid" src="#" alt="" style="height: 200px; width: auto;">
                            </div>
                        </div>
                        <div class="col-6">
                            <p id="deletePromoProductName" class="lead mb-0">Loading...</p>
                            <p id="deletePromoProductType" class="mb-0"><small>Loading...</small></p>
                            <p id="deletePromoProductSize" class="mb-0"><small>Loading...</small></p>
                            <p id="deletePromoProductQuantity" class="mb-0"><small>Loading...</small></p>
                            <p id="deletePromoProductPrice" class="mb-0">Loading...</p>
                            <p class="mt-3 mb-0">Description:</p>
                            <p id="deletePromoProductDescription" class="mt-0">
                                <small>
                                    Loading...
                                </small>
                            </p>
                        </div>
                    </div>
                    <div class="row"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>