<?php

namespace App\Controllers\Admin;

use App\Models\Admin\Post;
use App\Helpers\Utils;

require_once __DIR__ . "/../../config/database.php";

class AdminPostController
{
    public $conn;

    function __construct($conn = null)
    {
        if ($conn === null) {
            $this->conn = connectDatabase();
        } else {
            $this->conn = $conn;
        }
    }

    public function store()
    {
        // Title of page
        $title = "Add Post";

        // Get List Post Category
        $categories = new Post($this->conn);
        $postCategoriesOption = $categories->getCategory();


        // Save Post to Database
        if (isset($_POST['addPostButton'])) {
            $postTitle = $_POST['postTitle'];
            $postAuthor = $_POST['postAuthor'];
            $postDes = $_POST['postDes'];
            $postDetail = $_POST['postDetail'];
            $postCategory = $_POST['postCategory'];

            //Save Post Image
            $postImage = $_FILES['postImage']['name'];
            $target_dir = "D:/laragon/www//BookStore/public/uploads/images/";
            $target_file = $target_dir . basename($_FILES['postImage']['name']);
            move_uploaded_file($_FILES['postImage']['tmp_name'], $target_file);

            //Get Time
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $createdAt = date("Y-m-d H:i:s");

            $createdBy = "Admin";

            if (!empty($postTitle && $postAuthor && $postDes &&  $postDetail && $postCategory && $postImage &&  $createdAt && $createdBy)) {

                $post = new Post($this->conn);
                $utils = new Utils();

                if ($post->addPost($postTitle, $postAuthor, $postDes, $postDetail, $postImage, $postCategory, $createdAt, $createdBy)) {
                    
                    $utils->setFlashMessage('success', "Add Post Successfully!");
                } else {
                    $utils->setFlashMessage('error', "Something went wrong!");
                }
            }
            
        }


        include __DIR__ . '/../../views/admin/posts/create.php';
    }

    public function index() {
        $title = "Post List";
        include __DIR__ . "/../../views/admin/posts/list.php";
    }


    public function storeCategory()
    {
        if (isset($_POST['createCategoryButton'])) {
            if (!empty($_POST['categoryName'])) {
                $categoryName = $_POST['categoryName'];
            }
            if (!empty($_POST['slug'])) {
                $slug = $_POST['slug'];
            }

            $createdBy = "admin";

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $createdAt = date('Y-m-d H:i:s');

            if (!empty($categoryName && $slug)) {
                $category = new Post($this->conn);
                if ($category->addCategory($categoryName, $slug, $createdBy, $createdAt)) {
                    echo "Insert Category Successfully";
                } else {
                    echo "Something went wrong";
                }
            }
        }

        include __DIR__ . "/../../views/admin/products/category.php";
    }
}


