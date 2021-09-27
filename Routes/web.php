<?php

Route::set('add-product', function (){
    //print_r($_GET);
//    echo /*fd;
//    http_response_code(402);
//    echo json_encode(["message" => "same_sku"]);
//    print_r(Product::checkForSku($_GET['sku']));
//    if(empty(Product::checkForSku($_GET['sku']))){
//        echo "EMpty";
//    }
    ProductController::createProduct($_GET['sku'],$_GET['name'], $_GET['price'],
        $_GET['type'],$_GET['size'],$_GET['height'],$_GET['width'], $_GET['length'], $_GET['weight']);
});

Route::set('get-posts', function (){
    ProductView::showProducts();
});
Route::set('get-producttypes', function (){
    ProductView::getProductTypes();
});

Route::set('delete-products', function (){
    $ids = $_GET['ids'];
    ProductController::deleteProducts($ids);
});