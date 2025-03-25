<?php

namespace App\Controllers;

use App\Models\Post;
use App\Helpers\Utils;

class PostController
{

    protected $conn;
    public $post;

    public function __construct($conn)
    {
        $this->conn = $conn;

        //Initial Post Use OOP
        $this->post = new Post($this->conn);
    }

    public function index()
    {
        $listPost = $this->post->getListPost();

        include __DIR__ . '/../views/post/list.php';
    }

    public function show($id)
    {
        $detailPost = $this->post->getDetailPost($id);

        // Get Recent Article
        $getTime = new Utils();
        $timeMinus10Days = $getTime->getTimeByDays($days = '-10 days');
        $currentTime = $getTime->getCurrentTime();
        $recentArticle = $this->post->getRecentArticle($timeMinus10Days, $currentTime);

        include __DIR__ . '/../views/post/detail.php';
    }
}
