<?php

class Test extends Dbh
{
    public function getPosts(){
        $sql = "SELECT * FROM posts";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()){
            echo $row['content'].'<br>';
        }
    }

    public function getPostsStmt($categoryId){
        $sql = "SELECT * FROM posts WHERE category_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$categoryId]);
        $posts = $stmt->fetchAll();
        foreach ($posts as $post){
            echo $post['content'].'<br>';

        }
    }

    public function setPostsStmt($content, $categoryId){
        $sql = "INSERT INTO posts(content, category_id) values(?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$content, $categoryId]);
    }
}