<div class="modal fade" data-bs-backdrop="static" id="modal_view_users" tabindex="-1" aria-labelledby="modalUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fullnameView">Loading...</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="border-bottom text-center pb-4">
                            <img src="<?= base_url('assets/images/faces/face1.jpg') ?>" alt="profile" class="img-lg rounded-circle mb-3">
                            <p><span id="roleView" class="badge round-pill bg-success">Loading...</span></p>
                            <p><small><span id="emailView" class="badge round-pill bg-danger">Loading...</span></small></p>
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