<?php

namespace App\Models;

use App\Core\BaseModel;
use App\Models\Product;

class Cart extends BaseModel
{
    public $productModel;

    public function __construct($conn)
    {
        parent::__construct($conn); 
        $this->productModel = new Product($this->conn);
    }

    public function addCart($productId)
    {
        // $product = new Product($this->conn);
        $inforProduct = $this->productModel->getDetailProductById($productId);
        // print_r($inforProduct);

        $quantity = 1;

        $_SESSION['cart']['buy'][$productId] = array(
            'product_id' => $inforProduct['product_id'],
            'product_image' => $inforProduct['product_image'],
            'product_name' => $inforProduct['product_name'],
            'price' => $inforProduct['price'],
            'quantity' => $quantity,
            'total' => $quantity * $inforProduct['price'],
        );

        print_r($_SESSION['cart']);
    }
}
