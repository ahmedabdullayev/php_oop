<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");
/*
 * Load MVC automatically
 */
require_once ('loader.php');
require_once ('constants.php');

//Routes
require_once('Routes/web.php');

?>

<?php


//    $postsObj = new postsView();
//    $postsObj->showPosts(1);
//
//    $prodObj = new ProductController();
//    $prodObj->createProduct("League 3",1,0.99, 600);

//    $post = new Product();
//    $post->deleteProducts();
//
//    $postsObj2 = new postsController();
//    $postsObj2->createPost("Content is coming", 1)
?>
