<?php

class Person
{
    // Properties
    public  $name;
    public  $eyeColor;
    public  $age;

    // Methods
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

