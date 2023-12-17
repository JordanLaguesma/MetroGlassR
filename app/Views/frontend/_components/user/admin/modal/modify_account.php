<!-- Modify Account -->
<div class="modal fade" id="modal_modify_account" tabindex="-1" aria-labelledby="modalUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modify Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="modify_account">
                <div class="modal-body">
                    <input type="hidden" id="modAccId" name="id" value="Loading...">
                    <p class="text-danger" id="modAccErrorId"></p>
                    <div class="mb-3">
                        <label for="modAccFullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="modAccFullname" name="fullname" value="Loading..." placeholder="Horizontal glass smoke">
                        <p class="text-danger" id="modAccErrorFullname"></p>
                    </div>
                    <div class="mb-3">
                        <label for="modAccUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" id="modAccUsername" name="username" value="Loading..." placeholder="Horizontal glass smoke">
                        <p class="text-danger" id="modAccErrorUsername"></p>
                    </div>
                    <div class="mb-3">
                        <label for="modAccEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="modAccEmail" name="email" value="Loading..." placeholder="Horizontal glass smoke">
                        <p class="text-danger" id="modAccErrorEmail"></p>
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
<!-- Change Password -->
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