<?php

namespace App\Controllers;

require __DIR__ . "/../models/Product.php";

class HomeController
{
    public function index()
    {

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $currentTime = date('Y-m-d H:i:s');
        // echo "Current time is: " . $currentTime;

        $timeMinus14Days = date('Y-m-d H:i:s', strtotime('-14 days'));
        // echo "Current time minus 7days is: " . $timeMinus7Days;

        $soldProduct = getProductsSold($currentTime, $timeMinus14Days);

        // foreach ($soldProduct as $product) {
        //     $productArray = [];
        //     $productArray[] = $product['product_id'];
        //     $productArray[] = $product['sold'];
        // }
        // print_r($productArray);
        // print_r($soldProduct);

        $productSales = [];

        foreach($soldProduct as $product) {
            $product_id = $product['product_id'];
            if(!isset($productSales[$product_id])) {
                $productSales[$product_id] = 0;
            }
            $productSales[$product_id] += $product['sold'];
        }

        // Sap xep san pham theo tong so luong ban ra tu lon den be
        arsort($productSales);
        // print_r($productSales);

        //Lay nhung san pham co so luong mua nhieu nhat
        $mostSoldProducts = [];
        $maxSold = max($productSales);
        $minSold = min($productSales);
        foreach($productSales as $product_id => $totalSold) {
            if($minSold < $totalSold && $totalSold <= $maxSold) {
                $mostSoldProducts [] = $product_id;
                // $mostSoldProducts[] = ['product_id' => $product_id];
            }
        }
        echo "<br>";
        print_r($mostSoldProducts);
        
        // $productIds = [7, 6, 5]; // Chuyển đổi mảng product_id thành một chuỗi để sử dụng trong câu lệnh SQL 
        // $productIdsString = implode(',', $productIds);

        $mostSoldProductsString = implode(',', $mostSoldProducts);
        // echo $mostSoldProductsString;

        $trendingProducts = getTrendingProducts($mostSoldProductsString);
        


        // Deal of this week
        $timeMinus7Days = date('Y-m-d H:i:s', strtotime('-7 days'));
        // echo "Current time minus 7days is: " . $timeMinus7Days;

        $soldProductThisWeek = getProductsSold($currentTime, $timeMinus7Days);

        $productThisWeek = [];

        foreach($soldProductThisWeek as $product) {
            $product_id = $product['product_id'];
            if(!isset($productThisWeek[$product_id])) {
                $productThisWeek[$product_id] = 0;
            }
            $productThisWeek[$product_id] += $product['sold'];
        }

        // Sap xep san pham theo tong so luong ban ra tu lon den be
        arsort($productThisWeek);
        // print_r($productThisWeek);

        //Lay nhung san pham co so luong mua nhieu nhat
        $mostProductsThisWeek = [];
        $maxSold = max($productThisWeek);
        $minSold = min($productThisWeek);
        foreach($productThisWeek as $product_id => $totalSold) {
            if($minSold < $totalSold && $totalSold <= $maxSold) {
                $mostProductsThisWeek [] = $product_id;
                // $mostSoldProducts[] = ['product_id' => $product_id];
            }
        }
        echo "<br>";
        // print_r($mostProductsThisWeek);
        
        // $productIds = [7, 6, 5]; // Chuyển đổi mảng product_id thành một chuỗi để sử dụng trong câu lệnh SQL 
        // $productIdsString = implode(',', $productIds);

        $mostProductsThisWeekString = implode(',', $mostProductsThisWeek);
        // echo $mostProductsThisWeekString;

        $dealOfWeek = getDealOfWeek($mostProductsThisWeekString);


        //New Arrivals
        $timeMinus3days = date('Y-m-d H:i:s', strtotime('-3 days'));

        $newProduct = getNewProduct($timeMinus3days, $currentTime);


        // foreach($newProduct as $product) {
        //     $product_id = $product['product_id'];
        //     $productIds[] = $product_id;
        // }
        // echo "<br>";
        // print_r($productIds);

        // $productIdsString = implode(',', $productIds);
        // print_r($productIdsString);

    

        include __DIR__ . "/../views/home/index.php";
    }
}
