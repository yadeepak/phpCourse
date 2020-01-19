<?php

class Car {

    private  $engine='secret';
    function __construct($wheel){
    $this->starring='normal';
     $this->wheel=$wheel;
    }   

    // function getStarring(){
    //     echo $this->starring;
    // }

    // function getSecret(){
    //     echo $this->secret;
    // }

    function getWheel(){
        echo $this->wheel;
    }

}

$carobj=new Car;

$carobj2=new Car("4");

// echo $carobj->getStarring();
// echo $carobj->starring;
echo $carobj->wheel;
echo $carobj2->wheel;

//$carobj2->getWheel();

?>