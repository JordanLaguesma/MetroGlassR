<div class="modal fade" id="modal_set_active_promotions" tabindex="-1" aria-labelledby="modalProductLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Set to Active</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="set_active_promotion">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" name="id" id="setActiveId">
                            <p id="setIdError"></p>
                            <div class="form-group">
                                <div class="form-check form-check-success">
                                    <label class="form-check-label">
                                        <input type="radio" id="setActiveYes" class="form-check-input" name="active" value="Yes"> Active <i class="input-helper"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <div class="form-check form-check-danger">
                                    <label class="form-check-label">
                                        <input type="radio" id="setActiveNo" class="form-check-input" name="active" value="No"> Stop <i class="input-helper"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p id="setActiveError"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>