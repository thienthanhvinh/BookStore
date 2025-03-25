<?php

namespace App\Controllers;

use App\Models\Product;
use App\Helpers\Utils;

require __DIR__ . "/../models/Product.php";
require __DIR__ . "/../helpers/utils.php";

class HomeController
{
    protected $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;

        if (!$this->conn) {
            die("Error: Database connection failed!");
        }
    }

    public function index()
    {

        // Use Product Model
        $product = new Product($this->conn);

        // Use Get Time In Ultis
        $getTime = new Utils();

        // Get Current Time And Get Time 14 Days Before
        $currentTime = $getTime->getCurrentTime();
        $timeMinus14Days = $getTime->getTimeByDays($days = '- 120 days');

        // Get Sold Products 14 Days Lasted
        $soldProduct = $product->getProductsSold($currentTime, $timeMinus14Days);
        $productSales = [];
        foreach ($soldProduct as $soldItem) {
            $product_id = $soldItem['product_id'];
            if (!isset($productSales[$product_id])) {
                $productSales[$product_id] = 0;
            }
            $productSales[$product_id] += $soldItem['sold'];
        }
        // Sap xep san pham theo tong so luong ban ra tu lon den be
        arsort($productSales);
        //Lay nhung san pham co so luong mua nhieu nhat (Get Products have most count)
        $mostSoldProducts = [];
        $maxSold = max($productSales);
        $minSold = min($productSales);
        foreach ($productSales as $product_id => $totalSold) {
            if ($minSold < $totalSold && $totalSold <= $maxSold) {
                $mostSoldProducts[] = $product_id;
            }
        }
        $mostSoldProductsString = implode(',', $mostSoldProducts);

        // Final Result 
        $trendingProducts = $product->getTrendingProducts($mostSoldProductsString);

        // Deal of this week
        $timeMinus7Days = $getTime->getTimeByDays($days = '- 90 days');
        $soldProductThisWeek = $product->getProductsSold($currentTime, $timeMinus7Days);
        $productThisWeek = [];
        foreach ($soldProductThisWeek as $soldItem) {
            $product_id = $soldItem['product_id'];
            if (!isset($productThisWeek[$product_id])) {
                $productThisWeek[$product_id] = 0;
            }
            $productThisWeek[$product_id] += $soldItem['sold'];
        }
        arsort($productThisWeek);
        // Get Products have most count
        $mostProductsThisWeek = [];
        $maxSold = max($productThisWeek);
        $minSold = min($productThisWeek);
        foreach ($productThisWeek as $product_id => $totalSold) {
            if ($minSold < $totalSold && $totalSold <= $maxSold) {
                $mostProductsThisWeek[] = $product_id;
            }
        }
        $mostProductsThisWeekString = implode(',', $mostProductsThisWeek);

        // Final Result Deal of This Week
        $dealOfWeek = $product->getDealOfWeek($mostProductsThisWeekString);



        // New Arrivals
        $timeMinus3Days = $getTime->getTimeByDays($days = '- 80 days');
        // Final Result New Product for New Arrivals
        $timeMinus3Days = $getTime->getTimeByDays($days = '- 80 days');
        $newProduct = $product->getNewProduct($timeMinus3Days, $currentTime);



        include __DIR__ . "/../views/home/index.php";
    }
}
