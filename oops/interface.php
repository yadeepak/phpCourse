<?php 
interface Food {

    public function getFoods();

}

interface Room {

    public function getRooms();

}

class Hotel implements Food , Room {
    public function getFoods()
    {
        
    }

    public function getRooms()
    {
        
    }
}


class Hotel2 implements Food {
    public function getFoods()
    {
        
    }
}