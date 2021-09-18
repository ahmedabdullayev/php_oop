<?php

class postsController extends Posts
{
    public function createUser($content, $categoryId){
        $this->setPosts($content, $categoryId);
    }
}