<div class="modal fade" id="TakeModal<?php echo $id; ?>" role="dialog">
  <div class="modal-dialog">
  <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 style="font-weight: bold"> TAKE STUDENT </h4>
        <p> By submitting this form, you certify that you have taught the student <br> OR have encountered the incident you reported. </p>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form" method="POST">
          <div class="form-group">
            <label for="notes">Report an Incident or Just Leave a Note:</label>
            <textarea class="form-control" rows="5" id="notes" name="notes" placeholder="Not a required field when you are not reporting an incident."></textarea>
          </div>
          <div class="form-group" style="display: inline-block;">
            <label for="incident">Is this an incident report?</label>
            <ul>
              <li style="list-style-type: none; ">
                <input type="radio"  id="yes" name="incident" required="required">
                <label for="yes">Yes</label>
                <div class="check"></div>
              </li>
              <li style="list-style-type: none;">
                <input type="radio"  id="no" name="incident" required="required">
                <label for="no">No</label>
                <div class="check"><div class="inside"></div>
                </div>
              </li>
            </ul>
          </div>
          <button type="submit" class="btn btn-default btn-block" name="agree"> Submit </button>
        </form>
      </div>
    </div>
  </div>
</div>