<?php


namespace App\Models;

use App\Core\BaseModel;

class Product extends BaseModel
{

    public function getAllProduct()
    {
        $sql = "SELECT * FROM products LIMIT 6";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $resultFinal = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $resultFinal[] = $row;
            }
            return $resultFinal;
        } else {
            echo "Not Found Product";
            echo "Error: " . mysqli_error($this->conn);
        }
    }

    public function getProductsSold($currentTime, $timeMinus14Days)
    {
        $sql = "SELECT * FROM products_sold WHERE buy_at BETWEEN '{$timeMinus14Days}' AND '{$currentTime}'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $resultContent = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $resultContent[] = $row;
            }
            return $resultContent;
        } else {
            echo "Error: " . mysqli_error($this->conn);
        }
    }

    public function getTrendingProducts($mostSoldProductsString)
    {
        $sql = "SELECT * FROM products WHERE product_id IN ($mostSoldProductsString) ORDER BY FIELD(product_id, $mostSoldProductsString) ASC";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $resultTrendingProducts = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $resultTrendingProducts[] = $row;
            }
            return $resultTrendingProducts;
        } else {
            echo "Error: " . mysqli_error($this->conn);
        }
    }

    public function getDealOfWeek($mostProductsThisWeekString)
    {
        // products p, products_sold ps 

        $sql = "SELECT p.product_name, p.product_author, p.product_image, p.price, p.discount_price, SUM(ps.sold) AS total_sold FROM products p JOIN products_sold ps ON p.product_id = ps.product_id WHERE p.product_id IN ( $mostProductsThisWeekString) GROUP BY p.product_id";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $resultDealOfWeek = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $resultDealOfWeek[] = $row;
            }
            return $resultDealOfWeek;
        } else {
            echo "Error: " . mysqli_error($this->conn);
        }
    }

    public function getNewProduct($timeMinus3days, $currentTime)
    {
        $sql = "SELECT * FROM products WHERE created_at BETWEEN '{$timeMinus3days}' AND '{$currentTime}'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $resultProduct = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $resultProduct[] = $row;
            }
            return $resultProduct;
        } else {
            echo "Error: " . mysqli_error($this->conn);
        }
    }

    public function getDetailProductById($id = 10)
    {
        $sql = "SELECT * FROM products WHERE product_id = '{$id}'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $detailProduct = mysqli_fetch_assoc($result);
            return $detailProduct;
        }
    }

    public function getRelatedProducts($categoryId)
    {
        $sql = "SELECT product_name, product_author, product_image, price, discount_price FROM products WHERE category_id = '{$categoryId}' LIMIT 4";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $resultProducts = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $resultProducts[] = $row;
            }
            return $resultProducts;
        } else {
            echo "Error: " . mysqli_error($this->conn);
        }
    }
}
