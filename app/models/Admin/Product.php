<?php
namespace App\Models\Admin;

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
    

    public function addProduct($productName, $productImage, $price, $discountPrice, $productDes, $productDetail, $productLanguage, $publisher, $totalWarehouse) 
    {
        $sql = "INSERT INTO products (product_name, product_image, price, discount_price, product_des, product_detail, product_language, publisher, total_warehouse) VALUES ('$productName', '$productImage', '$price', '$discountPrice', '$productDes', '$productDetail', '$productLanguage', '$publisher', '$totalWarehouse')";
        $result = mysqli_query($this->conn, $sql);
        if($result) {
            return $result;
            // echo "Insert succesfully";
        }else {
            "Error: " . mysqli_error($this->conn);
        }
    }
}
