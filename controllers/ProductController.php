<?php

class ProductController extends Product
{
    public static function createProduct($name, $productTypeId, $price, $size){
        $sku = self::skuGenerate($name, $productTypeId);
        parent::addProduct($name, $productTypeId, $sku, $price, $size);
        echo "add!";
    }
    //generate SKU based on name and product type
    public static function skuGenerate($name, $productTypeId){
        $nPart = substr($name,0,4);
        $uniqPart = substr(uniqid('', true), -5);
        return $nPart.$productTypeId.$uniqPart;
    }
}