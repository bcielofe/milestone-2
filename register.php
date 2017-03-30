<div class="modal fade" id="RegModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="font-weight: bold"> CREATE ACCOUNT </h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="POST">
            <div class="form-group">
              <label for="username"> Username: </label>
              <input type="username" class="form-control" id="username" name="username"  placeholder="Enter username" required>
            </div>

            <div class="form-group">
              <label for="psw"> Password: </label>
              <input type="password" class="form-control" id="pwd" name="password"  placeholder="Enter password" required>
            </div>

            <div class="form-group">
              <label for="psw"> Confirm Password: </label>
              <input type="password" class="form-control" id="conpwd" name="confirmpw" placeholder="Enter password" required>
            </div>

            <!-- <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div> -->
              <button type="submit" class="btn btn-default btn-block" name="register"> Sign Up </button>
          </form>
        </div>
        
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#RegBtn").click(function(){
        $("#RegModal").modal();
    });
});
</script>