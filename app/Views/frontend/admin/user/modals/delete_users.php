<div class="modal fade" id="modal_delete_users" tabindex="-1" aria-labelledby="modalUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Users</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="delete_user">
                <div class="modal-body">
                    <input type="hidden" id="deleteId" name="id" value="Loading...">
                    <div class="mb-3">
                        <label class="form-label">Do you want to delete this user?</label>
                        <p id="deleteFullname">Loading...</p>
                        <p id="deleteErrorId"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>