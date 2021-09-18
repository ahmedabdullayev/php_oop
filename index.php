<?php
//include "includes/autoload.php"; // load classes automatically
//spl_autoload_register();

require_once ('loader.php');
require_once ('constants.php');
?>

<html>
<head>

</head>
<body>
<?php

    $postsObj = new postsView();
    $postsObj->showPosts(1);

    $postsObj2 = new postsController();
    $postsObj2->createUser("Content is coming", 1)
?>


</body>
</html>