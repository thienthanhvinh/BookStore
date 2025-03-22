<?php

namespace App\Models\Admin;

use mysqli;

require_once __DIR__ . "/../../config/database.php";



class Product
{
    public $conn;
    public function __construct($conn = null)
    {
        // $conn = connectDatabase();
        // $this->conn->$conn;
        if ($conn === null) {
            $this->conn = connectDatabase();
        } else {
            $this->conn = $conn;
        }
    }


    public function addProduct($productName, $productAuthor, $productImage, $price, $discountPrice, $productDes, $productDetail, $productLanguage, $publisher, $totalWarehouse, $productCategory, $createdAt)
    {
        $sql = "INSERT INTO products (product_name, product_author, product_image, price, discount_price, product_des, product_detail, product_language, publisher, total_warehouse, category_id, created_at) VALUES ('$productName', '$productAuthor', '$productImage', '$price', '$discountPrice', '$productDes', '$productDetail', '$productLanguage', '$publisher', '$totalWarehouse', '$productCategory', '$createdAt')";
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            return $result;
            // echo "Insert succesfully";
        } else {
            "Error: " . mysqli_error($this->conn);
        }
    }

    public function addCategory($categoryName, $slug, $createdBy, $createdAt) {
        $sql = "INSERT INTO product_categories (category_name, slug, created_by, created_at) VALUES ('$categoryName', '$slug', '$createdBy', '$createdAt')";
        $result = mysqli_query($this->conn, $sql);
        if($result) {
            return $result;
        }else {
            'Error: ' . mysqli_error($this->conn);
        }
    }

    public function getCategory() {
        $sql = "SELECT * FROM product_categories";
        $result = mysqli_query($this->conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            $resultCategories = [];
            while($row = mysqli_fetch_assoc($result)) {
                $resultCategories[] = $row;
            };
            return $resultCategories;
        }else {
            echo "Error: " . mysqli_error($this->conn);
        }
    }
}
