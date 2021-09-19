<?php

Route::set('add-post', function (){
    postsController::createPost($_POST['content'], $_POST['category_id']);
});

Route::set('contact-us', function (){
    echo "contact us";
});