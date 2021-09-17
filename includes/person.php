<?php

class Person
{
    protected $first = "Ahmed";
    private $last = "Abdullajev";
    public function maga(){
        return "dovn";
    }
}

class Pet extends Person {
    public function owner(){
        $a = $this->first;
        echo $this->maga();
        return $a;
    }

}