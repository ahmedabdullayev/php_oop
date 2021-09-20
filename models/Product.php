<?php

class Product extends Dbh
{
    public static function getProducts(){
        $sql = "SELECT * FROM product";
        $stmt = parent::connect()->query($sql);
        return $stmt->fetchAll();
    }
    public static function addProduct($name, $productTypeId, $sku, $price ,$size = null, $height = null, $width = null, $length = null, $weight = null){
        $sql = "INSERT INTO product(SKU, name, price, product_type_id) values(?, ?, ?, ?)";
        $stmt = parent::connect();
        $stmt->prepare($sql)->execute([$sku, $name, $price, $productTypeId]);
        $lastId = $stmt->lastInsertId();
        self::addProductParams($productTypeId, $lastId, $size, $height, $width, $length, $weight);

    }
    public static function addProductParams($productTypeId, $productId, $size, $height, $width, $length, $weight){
        $sql2 = "INSERT INTO product_type_params(product_type_id, product_id, size, height, width, length, weight) values(?,?,?,?,?,?,?)";
        $stmt2 = parent::connect()->prepare($sql2);
        $stmt2->execute([$productTypeId,$productId,$size, $height, $width, $length, $weight]);
    }

}