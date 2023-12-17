<div class="modal fade" id="modal_edit_users" tabindex="-1" aria-labelledby="modalUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Users</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="edit_user">
                <div class="modal-body">
                    <input type="hidden" id="editId" name="id" value="Loading...">
                    <p class="text-danger" id="editErrorId"></p>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="editFirstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="editFirstname" name="firstname" value="Loading..." placeholder="Horizontal glass smoke">
                            <p class="text-danger" id="editErrorFirstname"></p>
                        </div>
                        <div class="col-6">
                            <label for="editLastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="editLastname" name="lastname" value="Loading..." placeholder="Horizontal glass smoke">
                            <p class="text-danger" id="editErrorLastname"></p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editRole" class="form-label">Role</label>
                        <select name="role" id="editRole" class="form-select">
                            <option value="-1" selected disabled>-- Choose Role --</option>
                            <option value="0" disabled>Admin</option>
                            <option value="1">Co-admin</option>
                            <option value="2">Cashier</option>
                            <option value="3">Delivery</option>
                        </select>
                        <p class="text-danger" id="editErrorRole"></p>
                    </div>
                    <div class="mb-3">
                        <label for="editUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" id="editUsername" name="username" value="Loading..." placeholder="Horizontal glass smoke">
                        <p class="text-danger" id="editErrorUsername"></p>
                    </div>
                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="editEmail" name="email" value="Loading..." placeholder="Horizontal glass smoke">
                        <p class="text-danger" id="editErrorEmail"></p>
                    </div>
                    <div class="mb-3">
                        <label for="editPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="editPassword" name="password" placeholder="Horizontal glass smoke">
                        <p class="text-danger" id="editErrorPassword"></p>
                    </div>
                    <div class="mb-3">
                        <label for="editConfpass" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="editConfpass" name="confpass" placeholder="Horizontal glass smoke">
                        <p class="text-danger" id="editErrorConfpass"></p>
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