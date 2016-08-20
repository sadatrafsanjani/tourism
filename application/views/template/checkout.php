<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Checkout</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>customers/transaction" method="post">
                    <div class="form-group">
                        <label for="bank">Bank Name</label>
                        <select name="bank" class="form-control">
                            <option value="">-SELECT-</option>
                            <option value="dbbl">DBBL</option>
                            <option value="ebl">EBL</option>
                            <option value="pb">PB</option>
                            <option value="abb">ABB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="number">Account No.</label>
                        <input type="number" name="number" class="form-control" id="number" placeholder="Number">
                    </div>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>