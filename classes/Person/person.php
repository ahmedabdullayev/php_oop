<?php
namespace Person;


class Person
{
    // Properties
    public  $name;
    public  $eyeColor;
    public  $age;

    const EXAMPLE = "Hello Constanta";

    public static $drinkingAge = 21;

    //constructor
    public function __construct($name, $eyeColor, $age){
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    // Methods
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public static function setDrinkingAge($newDA){
        self::$drinkingAge = $newDA;
    }
    public function getDA(){
        return self::$drinkingAge;
    }
    //desctructor
    public function __destruct()
    {

    }
}

