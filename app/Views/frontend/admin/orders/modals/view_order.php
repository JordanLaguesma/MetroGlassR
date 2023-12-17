<div class="modal fade" data-bs-backdrop="static" id="modal_view_orders" tabindex="-1" aria-labelledby="modalUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewName">Loading...</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="border-bottom text-center pb-4">
                            <img src="<?= base_url('assets/images/faces/face12.jpg'); ?>" alt="profile" class="img-lg rounded-circle mb-3">
                            <p><span class="badge badge-sm rounded-pill bg-outline-success"><small>confirmed</small> </span></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm px-5">
                        <div class="py-4">
                            <p class="clearfix">
                                <span class="float-left px-2"> Product </span>
                                <span id="viewProduct" class="float-right text-muted">Loading...</span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left px-2"> Type </span>
                                <span id="viewType" class="float-right text-muted">Loading...</span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left px-2"> Request Date </span>
                                <span id="viewDate" class="float-right text-muted">Loading...</span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left px-2"> Quantity </span>
                                <span id="viewQuantity" class="float-right text-muted">Loading...</span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left px-2"> Total Amount </span>
                                <span id="viewSubtotal" class="float-right text-muted">Loading...</span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <button class="btn btn-primary btn-block">Transaction History</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>