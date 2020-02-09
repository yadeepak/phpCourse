<?php 

trait Pureveg { //no nonveg

    function getVeg(){
        echo "veg food";
    }
}

trait nonVeg {  // Pureveg 

    function getNonVeg(){
        echo "some nonveg food";
    }
}

trait sweets {

    function getSweets(){
        echo "sweet abc";
    }
}

class Foods {
    use Pureveg , nonVeg , sweets;

    function hoteName(){
        
    }

}



$obj = new Foods;
$obj->getSweets();
$obj->getVeg();
$obj->getNonVeg();


?>