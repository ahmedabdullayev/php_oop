<?php
include "autoloeader.php" // load classes automatically
?>

<?php
use Calculator\Calc;


    $number1 = $_GET['num1'];
    $operator = $_GET['oper'];
    $number2 = $_GET['num2'];

    $operation = new Calc($operator, $number1, $number2);
    echo $operation->calculator();