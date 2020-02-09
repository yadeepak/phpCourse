<?php 
class Food {

   static public $foodName = "biryani"; //

  static  public function getFood () { //
        echo "some food";
      
    }

}


class OneMore {

    function onemorefunction() {
       echo Food :: getFood();
    }
}
// $obj =new OneMore;
// $obj->onemorefunction();

 Food :: getFood();

?>