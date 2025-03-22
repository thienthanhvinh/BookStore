<?php

namespace App\Controllers\Admin;

use App\Models\Admin\Product;

require_once __DIR__ . "/../../config/database.php";

class AdminProductController
{
    public $conn;
    function __construct($conn = null)
    {
        // $conn = connectDatabase();
        // $this->conn = $conn;
        if ($conn === null) {
            $this->conn = connectDatabase();
        } else {
            $this->conn = $conn;
        }
    }

    public function store()
    {
        $categories = new Product($this->conn);
        $categoriesOption = $categories->getCategory();
        // print_r($categoriesOption);

        if (isset($_POST['addProductButton'])) {
            $productName = $_POST['productName'];
            $productAuthor = $_POST['productAuthor'];
            $price = $_POST['price'];
            $discountPrice = $_POST['discountPrice'];
            $productDes = $_POST['productDes'];
            $productDetail = $_POST['productDetail'];
            $productLanguage = $_POST['productLanguage'];
            $publisher = $_POST['publisher'];
            $totalWarehouse = $_POST['totalWarehouse'];
            $productCategory = $_POST['productCategory'];
            // echo $productCategory;

            $productImage = $_FILES['productImage']['name'];
            $target_dir = "C:/xampp/htdocs/unitop.vn/back-end/Php/project/BookStore/public/uploads/images/";
            $target_file = $target_dir . basename($_FILES['productImage']['name']);
            move_uploaded_file($_FILES['productImage']['tmp_name'], $target_file);

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $createdAt = date("Y-m-d H:i:s");

            if (!empty($productName && $price && $discountPrice &&  $productDes &&  $productDetail && $productLanguage &&  $publisher &&  $totalWarehouse)) {
                $product = new Product($this->conn);
                if ($product->addProduct($productName, $productAuthor, $productImage, $price, $discountPrice, $productDes, $productDetail, $productLanguage, $publisher, $totalWarehouse, $productCategory, $createdAt)) {
                    echo "Insert succesfully";
                } else {
                    echo "Something went wrong";
                }
            }
        }

        include __DIR__ . '/../../views/admin/products/add.php';
    }

    public function category()
    {
        if (isset($_POST['createCategoryButton'])) {
            if (!empty($_POST['categoryName'])) {
                $categoryName = $_POST['categoryName'];
            }
            if (!empty($_POST['slug'])) {
                $slug = $_POST['slug'];
            }

            $createdBy = "A Nguong";

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $createdAt = date('Y-m-d H:i:s');

            if (!empty($categoryName && $slug)) {
                $category = new Product($this->conn);
                if ($category->addCategory($categoryName, $slug, $createdBy, $createdAt)) {
                    echo "Insert category successfully";
                } else {
                    echo "Something went wrong";
                }
            }
        }

        include __DIR__ . "/../../views/admin/products/category.php";
    }
}
