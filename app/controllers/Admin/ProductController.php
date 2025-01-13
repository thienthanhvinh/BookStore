<?php

namespace App\Controllers\Admin;

use App\Models\Admin\Product;

require_once __DIR__ . "/../../config/database.php";

class ProductController
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

    public function create()
    {

        if (isset($_POST['addProductButton'])) { 
            $productName = $_POST['productName'];
            $price = $_POST['price'];
            $discountPrice = $_POST['discountPrice'];
            $productDes = $_POST['productDes'];
            $productDetail = $_POST['productDetail'];
            $productLanguage = $_POST['productLanguage'];
            $publisher = $_POST['publisher'];
            $totalWarehouse = $_POST['totalWarehouse'];

            $productImage = $_FILES['productImage']['name']; 
            $target_dir = "C:/xampp/htdocs/unitop.vn/back-end/Php/project/BookStore/public/uploads/images/";
            $target_file = $target_dir . basename($_FILES['productImage']['name']);
            move_uploaded_file($_FILES['productImage']['tmp_name'], $target_file);

            // $productThumbnail = $_FILES['productThumbnail']['name']; 
            // $target_dir = "C:/xampp/htdocs/unitop.vn/back-end/Php/project/BookStore/public/uploads/images/";
            // $target_file = $target_dir . basename($_FILES['productThumbnail']['name']);
            // move_uploaded_file($_FILES['productThumbnail']['tmp_name'], $target_file);

            if (!empty($productName && $price && $discountPrice &&  $productDes &&  $productDetail && $productLanguage &&  $publisher &&  $totalWarehouse)) {
                $product = new Product($this->conn);
                if ($product->addProduct($productName, $productImage, $price, $discountPrice, $productDes, $productDetail, $productLanguage, $publisher, $totalWarehouse)) {
                    echo "Insert succesfully";
                }else {
                    echo "Something went wrong";
                }
            }
        }

        include __DIR__ . '/../../views/admin/products/add.php';
    }
}
