<?php 
session_start();
//echo $_SESSION['greet'];
//session_destroy();
if(isset($_SESSION['loggedin'])){
  header('location:submit.php');
  }
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<form action="" method="post">

  <div style="margin-bottom: 25px" class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="login-username" type="text" class="form-control" name="username" value=""
      placeholder="username or email" required>
  </div>

  <div style="margin-bottom: 25px" class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
  </div>


  <div style="margin-top:10px" class="form-group">
    <!-- Button -->

    <div class="col-sm-12 controls">
      <input type="submit" id="btn-login" class="btn btn-success" value="Login" name="submit" />

    </div>
  </div>


  </div>
</form>
<?php 
if(isset($_POST['username'])){
  // exit;
 if($_POST['username']=='' ||  $_POST['password']==''){
  echo "Username or password can not be empty";
 //header('location:index.php');

}else{
  $_SESSION['loggedin']=$_POST['username'];
  header('location:submit.php');
}
}
?>