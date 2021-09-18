<?php

class postsView extends Posts
{
    public function showPosts($categoryId){
        $results = $this->getPosts($categoryId);
        foreach ($results as $post){
            echo $post['content'].'<br>';
        }
    }
}