<?php
include "abstract/paymentTypes.php"; // load classes automatically
include "classes/BuyProduct.php"; // load classes automatically

$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();
?>

<html>
<head>

</head>
<body>



</body>
</html>