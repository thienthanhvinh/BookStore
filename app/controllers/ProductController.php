<?php

namespace App\Controllers;

require __DIR__ . "/../models/Cart.php";

class ProductController
{
    public function detail($id)
    {
        $detailProduct = getDetailProductById($id);
        $categoryId = $detailProduct['category_id'];
        $relatedProduct = getRelatedProducts($categoryId);

        include __DIR__ . "/../views/products/detail.php";
    }

    public function addToCart($product_id = null)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product_id = $_POST['product_id'] ?? null;
            if ($product_id) {
                // echo "Đã nhận được product_id: $product_id";
                addCart($product_id);
            } else {
                echo "Không nhận được product_id!";
            }
        } else {
            echo "Phương thức không phải POST!";
        }
    }

    public function list()
    {
        include __DIR__ . "/../views/products/list.php";
    }
}
