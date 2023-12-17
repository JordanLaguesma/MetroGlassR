<div class="modal fade" id="modal_add_users" tabindex="-1" aria-labelledby="modalUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Users</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="add_user">
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="newFirstname" class="form-label">First Name</label>
                            <input type="text" name="firstname" class="form-control" id="newFirstname" placeholder="Juan Dela Cruz">
                            <p class="text-danger" id="newErrorFirstname"></p>
                        </div>
                        <div class="col-6">
                            <label for="newLastname" class="form-label">Last Name</label>
                            <input type="text" name="lastname" class="form-control" id="newLastname" placeholder="Juan Dela Cruz">
                            <p class="text-danger" id="newErrorLastname"></p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="newRole" class="form-label">Role</label>
                        <select name="role" id="newRole" class="form-select">
                            <option value="" selected disabled>--Choose Role--</option>
                            <option value="1">Co-admin</option>
                            <option value="2">Cashier</option>
                            <option value="3">Delivery</option>
                        </select>
                        <p class="text-danger" id="newErrorRole"></p>
                    </div>
                    <div class="mb-3">
                        <label for="newUsername" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="newUsername" placeholder="Horizontal glass smoke">
                        <p class="text-danger" id="newErrorUsername"></p>
                    </div>
                    <div class="mb-3">
                        <label for="newEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="newEmail" placeholder="juandelacruz@gmail.com">
                        <p class="text-danger" id="newErrorEmail"></p>
                    </div>
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="newPassword">
                        <p class="text-danger" id="newErrorPassword"></p>
                    </div>
                    <div class="mb-3">
                        <label for="newConfpass" class="form-label">Confirm Password</label>
                        <input type="password" name="confpass" class="form-control" id="newConfpass">
                        <p class="text-danger" id="newErrorConfpass"></p>
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