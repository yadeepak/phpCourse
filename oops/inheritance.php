<?php 

abstract class University { //parent class

  //  public $name = "Mumbai"; // property

   abstract function getUniversityName ($name); 
}

class Universityjaipur extends University { //child 

    //public $name2 =" Jaipur"; 

    function getUniversityName($uname)
    {
          echo $uname;
         
    }
}

class UniversityMumbai extends University { //child 

   // public $name2 =" Jaipur"; 

    function getUniversityName($uname)
    {
          echo $uname;
    }
}

$obj = new Universityjaipur ;
$obj->getUniversityName( "jaipur");


?>




<html>
<h1><?php ?></h1>
<script>

  //  alert();
</script>
</html>