

<?php

  function display_forms(){

  $message = "";
  include('connection.php');
    if(isset($_SESSION['message']))
    {
      $message = "<div class='alert alert-success'>".$_SESSION['message']."</div>";
      unset($_SESSION['message']);
    }

  if(isset($_POST['login']))
  {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $sql = "SELECT * FROM teachers WHERE teacher_name = '$username' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result))
    {
      extract(mysqli_fetch_assoc($result));
      // session_start();
      $_SESSION['message'] = "Login Successful";
      $_SESSION['username'] = $username;
      $_SESSION['role'] = $role;
      if($role=='admin')
        header('location:classes_admin.php');
      else
        header('location:dashboard.php');        
    }
  }

  if(isset($_POST['register']))
  {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    $exist_user = "SELECT teacher_name FROM teachers WHERE teacher_name='$username'";
    $result = mysqli_query($conn,$exist_user);
    if (mysqli_num_rows($result)>0) 
    {
      echo "Username already exists.";
    }

    elseif($_POST['password']==$_POST['confirmpw'])
    {
      $sql = "INSERT INTO teachers (teacher_name,password,role) VALUES ('$username','$password','regular')";
      $result = mysqli_query($conn,$sql);
      if($result)
      {
        $_SESSION['message'] = "Registration Successful";
        echo $_SESSION['message'];
        //header('location:classes.php');
      }
    } 
  }

  if(isset($_POST['resetpw']))
  {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $confirmpw = sha1($_POST['confirmpw']);

    $sql = "SELECT * FROM teachers WHERE teacher_name = '$username' AND reset = 2";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0 && $password==$confirmpw)
    {
      extract(mysqli_fetch_assoc($result));
      if($role=='admin')
      {
        $query = "UPDATE teachers SET password = '$password' WHERE teacher_name = '$username'";
      } else 
      {
        $query = "UPDATE teachers SET password = '$password', reset = 1 WHERE teacher_name = '$username'";
      }
      mysqli_query($conn,$query);
      echo "Password Reset Successful!";
    }
    else 
    {
      echo "Please ask permission to reset password.";
    }
  } 
?>

<form method="POST">

<!-- style was inserted to emphasize -->
  <h3 style="font-weight: bold;"> LOGIN </h3> 
  <br>

  <div class="form-group">
    <label for="username">Username:</label>
    <input type="username" class="form-control" id="username" name="username" placeholder="Enter username" required>
  </div>

  <div class="form-group">
    <div>
      <span class="leftLogin">
      <label for="pwd"> Password: </label>
      </span>
      <span class="rightLogin"> 
      <a href="#" id="PwdBtn"> Forgot your password? </a> 
    </span>
    </div>
    
    <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" required>
  </div>

  <div class="clear">
    <button type="submit" class="btn btn-default leftLogin" name="login" data-dismiss="modal">
      Login
    </button>
    </form>
    <span class="rightLogin">
      New Teacher? <br>
      <a href="#" id="RegBtn"> Sign Up </a> 
    </span>
  </div>

<!-- Modal -->
  <?php require_once ('register.php') ?>

<!-- Modal for Forget password-->
  <?php require_once ('forgetpw.php') ?>

<?php } ?>

