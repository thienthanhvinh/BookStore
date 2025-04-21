<?php


namespace App\Controllers;

use App\Models\Cart;
// require __DIR__ . "/../models/Cart.php";

class CartController
{
    protected $conn;
    public $cartModel;
    public function __construct($conn)
    {
        $this->conn = $conn;
        if (!$this->conn) {
            die("Error: Database connection failed!");
        }

        $this->cartModel = new Cart($this->conn);
    }

    public function addToCart()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product_id = $_POST['product_id'] ?? 10;
            if ($product_id) {
                // echo "Đã nhận được product_id: $product_id";
                $this->cartModel->addCart($product_id);
            } else {
                echo "Không nhận được product_id!";
            }
        } else {
            echo "Phương thức không phải POST!";
        }
    }

    public function detail()
    {
        $listProduct = $_SESSION['cart']['buy'];
        $product_id = $_GET['product_id'] ?? null;
        // $quantity = $_GET['quantity'] ?? null;
        print_r($_SESSION['cart']['buy'][$product_id]);
        // $price = $_SESSION['cart']['buy'][$product_id]['price'];
        // $response = $_SESSION['cart']['buy'][$product_id] = array(
        //     'quantity' => $quantity,
        //     'total' => $quantity * $price,
        // );

        // echo json_encode($response);

        include __DIR__ . "/../views/cart/detail.php";
    }

    public function payment()
    {

        include __DIR__ . "/../views/cart/payment.php";
    }
}
