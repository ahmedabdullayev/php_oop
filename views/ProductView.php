<?php

class ProductView extends Product
{

    public static function showProducts(){
        $products = parent::getProducts();
        self::iterateRows($products);
    }
    public static function getProductTypes()
    {
        $productTypes = parent::getProductTypes();
        self::iterateRows($productTypes);
    }

    //method to return array of queried data
    public static function iterateRows($items){
        if(!empty($items)) {
            foreach ($items as $items) {
                $itemsArray[] = $items;
            }
            echo json_encode($itemsArray, JSON_NUMERIC_CHECK);
        }else{
            echo json_encode(""); //empty return
        }
    }
}