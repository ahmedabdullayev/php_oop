<?php
include "includes/autoload.php"; // load classes automatically
//spl_autoload_register();
?>

<html>
<head>

</head>
<body>
<?php

    $test = new Test();
    $test->setPostsStmt("New content coming soon", 1);
    $test->getPostsStmt(1);
?>


</body>
</html>