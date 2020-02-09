<?php 

class User {

    private $username = "abc";
    private $pwd = "123"; 

    function getMyUSer() {
       echo $this->username;
    }


}





class Login {

function getUserName() {
    $userObj = new User;
    $user = $userObj->getMyUSer();
    echo $user;

}

}


$obj = new Login;
echo $obj->getUserName();
?>