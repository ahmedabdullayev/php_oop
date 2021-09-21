<?php

class ProductView extends Product
{
    public static $productsArray = array();
    public static function showProducts(){
        $products = parent::getProducts();
        foreach ($products as $product){
            $productsArray[] = $product;
        }
        echo json_encode($productsArray,JSON_NUMERIC_CHECK);
    }
}