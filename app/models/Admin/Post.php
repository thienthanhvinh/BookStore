<?php

namespace App\Models\Admin;

require_once __DIR__ . "/../../config/database.php";

class Post
{
    public $conn;
    public function __construct($conn = null)
    {
        if ($conn === null) {
            $this->conn = connectDatabase();
        } else {
            $this->conn = $conn;
        }
    }

    public function addPost($postTitle, $postAuthor, $postDes, $postDetail, $postImage, $postCategory, $createdAt, $createdBy)
    {
        $sql = "INSERT INTO posts (post_title, post_author, post_des, post_detail, post_image, category_id, created_at, created_by) VALUES ('$postTitle', '$postAuthor', '$postDes', '$postDetail', '$postImage', '$postCategory', '$createdAt', '$createdBy')";
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            return $result;
        } else {
            "Error: " . mysqli_error($this->conn);
        }
    }

    public function addCategory($categoryName, $slug, $createdBy, $createdAt)
    {
        $sql = "INSERT INTO post_categories (category_name, slug, created_by, created_at) VALUES ('$categoryName', '$slug', '$createdBy', '$createdAt')";
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            return $result;
        } else {
            'Error: ' . mysqli_error($this->conn);
        }
    }

    public function getCategory()
    {
        $sql = "SELECT * FROM post_categories";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $resultCategories = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $resultCategories[] = $row;
            };
            return $resultCategories;
        } else {
            echo "Error: " . mysqli_error($this->conn);
        }
    }
}
