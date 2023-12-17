<div class="modal fade" data-bs-backdrop="static" id="modal_view_customer" tabindex="-1" aria-labelledby="modalUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewFullName">Loading...</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="border-bottom text-center pb-4">
                            <img src="<?= base_url('assets/images/faces/face12.jpg'); ?>" alt="profile" id="viewProfile" class="img-lg rounded-circle mb-3">
                            <p><span id="viewStatusSmall" class="badge badge-sm round-pill bg-secondary"><small>loading...</small> </span></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm px-5">
                        <div class="py-4">
                            <p class="clearfix">
                                <span class="float-left"> Status </span>
                                <span id="viewStatusBig" class="float-right text-muted"> Loading... </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left"> Phone </span>
                                <span id="viewPhone" class="float-right text-muted"> Loading... </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left"> Mail </span>
                                <span id="viewEmail" class="float-right text-muted"> Loading... </span>
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