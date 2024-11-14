<div id="form_modal" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nhập thông tin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-10 input-mask">
                  <input type="text" class="form-control number-format" name="price_mask">
                  <input type="hidden" class="form-control number-unmask" name="price">
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="javascript:void()" class="btn btn-primary btn-save-modal">Save</a>
      </div>
    </div>
  </div>
</div>