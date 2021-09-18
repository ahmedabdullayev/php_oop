<?php
namespace Calculator;
class Calc
{
    public $operator;
    public $num1;
    public $num2;

    public function __construct($operator, $num1, $num2){
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculator(){
        $result = 0;
        switch ($this->operator){
            case 'add':
                $result = $this->num1 + $this->num2;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                break;
            default:
                echo "Error!";
                break;
        }
        return $result;
    }
}