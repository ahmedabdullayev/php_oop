<?php

class Person
{
    // Properties
    public  $name;
    public  $eyeColor;
    public  $age;

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
    //desctructor
    public function __destruct()
    {

    }
}

