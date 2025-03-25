<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Search;


class ProductController
{
    protected $conn;
    public $product;

    public function __construct($conn)
    {
        $this->conn = $conn;
        if (!$this->conn) {
            die("Error: Database connection failed!");
        }

        $this->product = new Product($this->conn);
    }

    public function index($isAjax = true)
    {
        $allProduct = $this->product->getAllProduct();


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $keyword = $_POST['search'] ?? '';
            $response = [];

            $searchResults = new Search($this->conn);
            $results = $searchResults->search($table = 'products', $name = 'product_name', $keyword);
            $response = ['status' => 'success', 'message' => 'Find Product is successfully', 'data' => $results];

            if ($isAjax) {
                echo json_encode($response);
                exit;
            }

        }
        include __DIR__ . "/../views/products/list.php";
    }

    public function detail($id)
    {
        $detailProduct = $this->product->getDetailProductById($id);
        $categoryId = $detailProduct['category_id'];
        $relatedProduct = $this->product->getRelatedProducts($categoryId);

        include __DIR__ . "/../views/products/detail.php";
    }

    public function addToCart($product_id = null)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product_id = $_POST['product_id'] ?? null;
            if ($product_id) {
                $cart = new Cart($this->conn);
                $cart->addCart($product_id);
            } else {
                echo "Không nhận được product_id!";
            }
        } else {
            echo "Phương thức không phải POST!";
        }
    }


    public function search()
    {
        $searchResults = new Search($this->conn);

        $keyword = isset($_GET['search']) ? $_GET['search'] : '';
        $results = $searchResults->search($table = 'products', $name = 'product_title', $keyword);

        include __DIR__ . '/../views/products/list.php';
    }
}
