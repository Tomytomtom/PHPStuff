<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/05/2018
 * Time: 9:02 PM
 */

class Car
{
    const HATCHBACK = 1;
    const STATION_WAGON = 2;
    const SUV = 3;
     public $Model;
     public $Color;
     public $Type;
     public $Manufacturer;
     public $MilesPerGallon;
     static public $numberSold = 123;
     private $_speed = 0;

     public function GetSpeed()
     {
        return $this->_speed;
     }

     public static function calcMpg ($miles, $gallons){
         return ($miles / $gallons);
     }
    public static function displayMpg($miles, $gallons){
        echo "this car’s MPG is: " . self::calcMpg($miles, $gallons);
 }
}