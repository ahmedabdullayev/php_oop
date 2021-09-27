<?php

class ProductController extends Product
{
    public static function createProduct($sku,$name, $price, $productTypeId, $size = null, $height = null, $width = null, $length = null, $weight = null){

        if(self::checkForSkuLength($sku) == true){
            http_response_code(402);
            echo json_encode(["message" => "empty_or_big"]);
        }
        else if(!empty(parent::checkForSku($_GET['sku']))){
            http_response_code(402);
            echo json_encode(["message" => "same_sku"]);
        }else{
        parent::addProduct($sku,$name, $price, $productTypeId, $size, $height, $width, $length, $weight);
         echo json_encode(["message" => "added!"]);
        }

    }
    public static function deleteProducts($productIds)
    {
        parent::deleteProducts($productIds);
    }

    public static function checkForSkuLength($sku){
        if(strlen($sku) > 10 || empty($sku)){
            return true;
        }
    }


}