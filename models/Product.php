<?php

class Product extends Dbh
{
    public static function getProducts(){
        $sql = "SELECT p.id, p.SKU, p.name, p.price,p.product_type_id, ptp.size, ptp.height, 
                ptp.width, ptp.length, ptp.weight FROM product p 
                JOIN product_type_params ptp ON p.id = ptp.product_id ORDER BY id DESC";
        $stmt = parent::connect()->query($sql);
        return $stmt->fetchAll();
    }
    public static function addProduct($sku,$name, $price, $productTypeId, $size = null, $height = null, $width = null, $length = null, $weight = null){
        $sql = "INSERT INTO product(SKU, name, price, product_type_id) values(?, ?, ?, ?)";
        $stmt = parent::connect();
        $stmt->prepare($sql)->execute([$sku, $name, $price, $productTypeId]);
        $lastId = $stmt->lastInsertId();
        self::addProductParams($productTypeId, $lastId, $size, $height, $width, $length, $weight);
    }
    public static function checkForSku($sku){
        $sql = "SELECT SKU FROM product WHERE sku = ?";
        $stmt = parent::connect()->prepare($sql);
        $stmt->execute([$sku]);
        return $stmt->fetch();
    }
    public static function addProductParams($productTypeId, $productId, $size, $height, $width, $length, $weight){
        $sql2 = "INSERT INTO product_type_params(product_type_id, product_id, size, height, width, length, weight) values(?,?,?,?,?,?,?)";
        $stmt2 = parent::connect()->prepare($sql2);
        $stmt2->execute([$productTypeId,$productId,$size, $height, $width, $length, $weight]);
    }
    public static function deleteProducts($productIds){
        $sql = "DELETE FROM product WHERE id IN ($productIds)";
        parent::connect()->query($sql);
    }
    public static function getProductTypes(){
        $sql = "SELECT * FROM product_type";
        $stmt = parent::connect()->query($sql);
        return $stmt->fetchAll();
    }
}