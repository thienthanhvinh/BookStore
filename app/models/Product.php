<?php
require_once  __DIR__ . "/../models/Product.php";

global $conn;
$conn = connectDatabase();

function getProductsSold($currentTime, $timeMinus7Days)
{
    global $conn;
    $sql = "SELECT * FROM products_sold WHERE buy_at BETWEEN '{$timeMinus7Days}' AND '{$currentTime}'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $resultContent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $resultContent[] = $row;
        }
        // $resultArray = mysqli_fetch_assoc($result);
        // return $resultArray;
        return $resultContent;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

function getTrendingProducts($mostSoldProductsString)
{
    global $conn;
    $sql = "SELECT * FROM products WHERE product_id IN ($mostSoldProductsString) ORDER BY FIELD(product_id, $mostSoldProductsString) ASC";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $resultTrendingProducts = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $resultTrendingProducts[] = $row;
        }
        return $resultTrendingProducts;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

function getDealOfWeek($mostProductsThisWeekString)
{
    global $conn;
    $sql = "SELECT p.product_name, p.product_author, p.product_image, p.price, p.discount_price, SUM(ps.sold) AS total_sold FROM products p JOIN products_sold ps ON p.product_id = ps.product_id WHERE p.product_id IN ( $mostProductsThisWeekString) GROUP BY p.product_id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $resultDealOfWeek = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $resultDealOfWeek[] = $row;
        }
        return $resultDealOfWeek;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}


function getNewProduct($timeMinus3days, $currentTime)
{
    global $conn;
    $sql = "SELECT * FROM products WHERE created_at BETWEEN '{$timeMinus3days}' AND '{$currentTime}'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $resultProduct = [];
        while($row = mysqli_fetch_assoc($result)) {
            $resultProduct[] = $row;
        }
        return $resultProduct;
    }else {
        echo "Error: " . mysqli_error($conn);
    }
}


