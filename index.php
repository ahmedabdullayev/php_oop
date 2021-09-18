<?php
include "includes/autoloeader.php"; // load classes automatically
echo "index";
?>
<?php


?>
<html>
<head>

</head>
<body>

    <form action="includes/calc.php" method="GET" >
        <p>Calculator</p>
        <input type="number" name="num1" placeholder="First number">
        <select name="oper">
            <option value="add">Addition</option>
            <option value="sub">Substraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input type="number" name="num2" placeholder="Second number">
        <button type="submit" name="submit">Calculate</button>
    </form>

</body>
</html>