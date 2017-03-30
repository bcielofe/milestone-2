<div class="modal fade" id="PwdModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="font-weight: bold;"> RESET PASSWORD </h4>
          <p> Before filling out this form, please inform the ADMIN that you need to reset your password. </p>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="POST">

            <div class="form-group">
              <label for="username"> Username: </label>
              <input type='text' name="username" class="form-control" id="username" placeholder="Enter username" required>
            </div>

            <div class="form-group">
              <label for="psw"> New Password: </label>
              <input type="password" class="form-control" id="pwd" name="password"  placeholder="Enter new password" required>
            </div>

            <div class="form-group">
              <label for="psw"> Confirm New Password: </label>
              <input type="password" class="form-control" id="conpwd" name="confirmpw" placeholder="Enter new password" required>
            </div>
            
            <input type="submit" name='resetpw' class="btn btn-default btn-block" >
            
          </form>
        </div>
        
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#PwdBtn").click(function(){
        $("#PwdModal").modal();
    });
});
</script>