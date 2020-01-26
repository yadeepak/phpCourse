<?php 
session_start();

//echo $_SESSION['loggedin'];
if($_SESSION['loggedin']!=''){
echo "welcome".$_SESSION['loggedin'];
}else{
  header('location:index.php');
}

// print_r($_POST);
// exit;
//  if($_POST['username']=='' ||  $_POST['password']==''){
//    $_SESSION['error']="Username or password can not be empty";
//   header('location:index.php');

//  };
?>
<a href="logout.php" >logout</a>

