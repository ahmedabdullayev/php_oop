<?php

class postsController extends Posts
{
    public static function createPost($content, $categoryId){
        parent::setPosts($content, $categoryId);
        echo "Added!";
    }

}