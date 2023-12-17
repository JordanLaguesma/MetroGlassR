<div class="modal fade" data-bs-backdrop="static" id="modal_cashier_checkout" tabindex="-1" aria-labelledby="modalProductLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Checkout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="pos_checkout">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Total</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">₱</span>
              <input type="text" class="form-control" id="total_price" value="12,500.00" aria-label="500" aria-describedby="basic-addon1" disabled>
            </div>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Payment Type</label>
            <select name="paymentType" id="paymentType" class="form-select">
              <option value="Cash">Full Payment</option>
              <option value="installment">Installment</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Cash</label>
            <input type="number" name="cash" id="cash" placeholder="Enter cash" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Print Receipt</button>
        </div>
      </form>
    </div>
  </div>
</div>