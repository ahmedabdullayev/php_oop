<?php

Route::set('add-post', function (){
    postsController::createPost($_POST['content'], $_POST['category_id']);
});

Route::set('get-posts', function (){
    ProductView::showProducts();
});