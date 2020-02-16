<?php
$serverName = 'localhost';
$dbName = 'phpCourse';
$user ='root';
$pwd = '';


$isConnect = mysqli_connect($serverName, $user, $pwd, $dbName );

if($isConnect){
    //echo "successfull";
}
else{
    echo "connection failed".mysqli_connect_error();
}


