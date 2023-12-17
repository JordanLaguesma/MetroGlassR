<div class="modal fade" id="modal_change_password" tabindex="-1" aria-labelledby="modalUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="change_password">
                <div class="modal-body">
                    <input type="hidden" id="changePassId" name="id" value="Loading...">
                    <p class="text-danger" id="changePassErrorId"></p>
                    <div class="mb-3">
                        <label for="changePassPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="changePassPassword" name="password">
                        <p class="text-danger" id="changePassErrorPassword"></p>
                    </div>
                    <div class="mb-3">
                        <label for="changePassConfpass" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="changePassConfpass" name="confpass">
                        <p class="text-danger" id="changePassErrorConfpass"></p>
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