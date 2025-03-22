<?php
namespace App\Controllers;

require __DIR__ . "/../models/Post.php";

class PostController {
    public function list() {
        $listPost = getListPost();
        
        include __DIR__ . '/../views/post/list.php';
    }

    public function detail() {
        include __DIR__ . '/../views/post/detail.php';
    }
}



?>