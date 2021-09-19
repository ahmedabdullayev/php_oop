<?php

class Posts extends Dbh
{
    protected static function getPosts($categoryId){
        $sql = "SELECT * FROM posts WHERE category_id = ?";
        $stmt = parent::connect()->prepare($sql);
        $stmt->execute([$categoryId]);

        return $stmt->fetchAll();
    }

    protected static function setPosts($content, $categoryId){
        $sql = "INSERT INTO posts(content, category_id) values(?, ?)";
        $stmt = parent::connect()->prepare($sql);
        $stmt->execute([$content, $categoryId]);
    }
}