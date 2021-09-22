<?php

Route::set('add-post', function (){
    postsController::createPost($_POST['content'], $_POST['category_id']);
});

Route::set('get-posts', function (){
    ProductView::showProducts();
});

Route::set('delete-products', function (){
   // print_r($_GET['ids']);
    //print_r($_POST['name']);
//    $ids = implode(",",$_GET['ids']);
//    echo $ids;
    //echo $_GET['ids'];
    $string = $_GET['ids'];
    ProductController::deleteProducts($string);
});