<?php
class Vehicle {

   protected $wheel=4;

     function __construct($type){
        $this->type=$type;
    }

    function getWheel(){
       echo $this->wheel;
    }

    function getType(){
       
    }

    function getStarring($side = 'right'){
        echo $side;
    }
  
}

class NewVehicle extends Vehicle{
public $newWheel=6;

function getWheel()
{
    echo $this->newWheel;
}


}


//$newObj->getWheel();
$newObj = new NewVehicle("car");
$newObj->getWheel();
//$newObj->getType();

?>