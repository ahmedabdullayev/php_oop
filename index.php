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


//    $postsObj = new postsView();
//    $postsObj->showPosts(1);

    $prodObj = new ProductController();
    $prodObj->createProduct("League 3",1,0.99, 600);

    $products = new ProductView();
    $products->showProducts();
//
//    $postsObj2 = new postsController();
//    $postsObj2->createPost("Content is coming", 1)
?>


</body>
</html>