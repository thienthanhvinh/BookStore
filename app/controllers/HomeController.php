<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Post;
use App\Helpers\Utils;

require __DIR__ . "/../models/Product.php";
require __DIR__ . "/../helpers/utils.php";

class HomeController
{
    protected $conn;
    public $post;
    public $product;
    public $getTime;

    public function __construct($conn)
    {
        $this->conn = $conn;

        $this->post = new Post($this->conn);

        // Use Product Model
        $this->product = new Product($this->conn);

        // Use Get Time In Ultis
        $this->getTime = new Utils();
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
        $timeMinus7Days = $getTime->getTimeByDays($days = '- 12 days');
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
        // $dealOfWeek = null;



        // New Arrivals
        $timeMinus3Days = $getTime->getTimeByDays($days = '- 80 days');
        // Final Result New Product for New Arrivals
        $timeMinus3Days = $getTime->getTimeByDays($days = '- 80 days');
        $newProduct = $product->getNewProduct($timeMinus3Days, $currentTime);

        $listPost = $this->post->getListPost();



        include __DIR__ . "/../views/home/index.php";
    }

    public function dealWeek()
    {

        // Get Current Time
        $currentTime = $this->getTime->getCurrentTime();

        $timeMinus7Days = $this->getTime->getTimeByDays($days = '- 90 days');
        $soldProductThisWeek = $this->product->getProductsSold($currentTime, $timeMinus7Days);
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
        $dealOfWeek = $this->product->getDealOfWeek($mostProductsThisWeekString);

        include __DIR__ . "/../views/components/deal-week.php";
    }

    public function newArrivals()
    {

        $timeMinus3Days = $this->getTime->getTimeByDays($days = '- 3 days');
        // Final Result New Product for New Arrivals
        $timeMinus3Days = $this->getTime->getTimeByDays($days = '- 3 days');
        $newProduct = $this->product->getNewProduct($timeMinus3Days, $this->getTime->getCurrentTime());

        $listPost = $this->post->getListPost();
        // print_r($listPost);

        include __DIR__ . "/../views/components/new-arrivals.php";
    }

    public function trendingBooks()
    {


        // Get Current Time And Get Time 14 Days Before
        $timeMinus14Days = $this->getTime->getTimeByDays($days = '- 120 days');

        // Get Sold Products 14 Days Lasted
        $soldProduct = $this->product->getProductsSold($this->getTime->getcurrentTime(), $timeMinus14Days);
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
        $trendingProducts = $this->product->getTrendingProducts($mostSoldProductsString);

        include __DIR__ . "/../views/components/trending-books.php";
    }

    public function latestBlogs()
    {
        $listPost = $this->post->getListPost();

        include __DIR__ . "/../views/components/latest-blog.php";
    }
}
