<?php

class Posts extends Dbh
{
    const loer = "ddd";
    protected function getPosts($categoryId){
        $sql = "SELECT * FROM posts WHERE category_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$categoryId]);

        return $stmt->fetchAll();
    }

    protected function setPosts($content, $categoryId){
        $sql = "INSERT INTO posts(content, category_id) values(?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$content, $categoryId]);
    }
}