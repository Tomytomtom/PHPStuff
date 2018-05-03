<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/05/2018
 * Time: 12:34 PM
 */

class MyCar
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



    public static function displayMpg($miles, $gallons){
        $MilesPerGallon = ($miles / $gallons);
        return $MilesPerGallon;
    }

}