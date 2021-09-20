<?php

class ProductView extends Product
{
    public static function showProducts(){
        $products = parent::getProducts();
        foreach ($products as $product){
            echo $product['name'];
        }
    }
}