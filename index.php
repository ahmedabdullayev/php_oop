<?php
/*
 * Load MVC automatically
 */
require_once ('loader.php');
require_once ('constants.php');

//Routes
require_once('Routes/web.php');

?>

<html>
<head>

</head>
<body>
<?php


    $postsObj = new postsView();
    $postsObj->showPosts(1);
//
//    $postsObj2 = new postsController();
//    $postsObj2->createPost("Content is coming", 1)
?>


</body>
</html>