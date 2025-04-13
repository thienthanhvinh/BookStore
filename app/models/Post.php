<?php

namespace App\Models;

use App\Core\BaseModel;
use mysqli;

class Post extends BaseModel
{
    public function getListPost()
    {
        $sql = "SELECT * FROM posts LIMIT 3";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $listResult = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $listResult[] = $row;
            }
            return $listResult;
        } else {
            echo "Error: " . mysqli_error($this->conn);
        }
    }

    public function getDetailPost($id)
    {
        // $sql = "SELECT * FROM posts WHERE post_id = '{$id}'";
        $sql = "SELECT p.post_title, p.post_author, p.post_des, p.post_detail, p.post_image, p.category_id, p.created_at, p.created_by, pc.name as category_name, pc.slug
        FROM posts p JOIN post_categories pc ON p.category_id = pc.category_id WHERE p.post_id = '{$id}'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $detailPost = mysqli_fetch_assoc($result);
            return $detailPost;
        } else {
            echo "Error: " . mysqli_error($this->conn);
            echo "Not Found Any Post";
        }
    }

    public function getRecentArticle($timeMinus10days, $currentTime)
    {
        $sql = "SELECT * FROM posts WHERE created_at BETWEEN '{$timeMinus10days}' AND '{$currentTime}' LIMIT 4";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $resultFinal = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $resultFinal[] = $row;
            }
            return $resultFinal;
        } else {
            echo "Not Found Query Available";
        }
    }
}
