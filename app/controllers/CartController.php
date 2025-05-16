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
            // var_dump($_POST);
            $quantity = isset($_POST['quantityProduct']) ? $_POST['quantityProduct'] : 1;
            $product_id = $_POST['product_id'] ?? 10;
            if ($product_id) {
                $this->cartModel->addCart($product_id, $quantity);
            } else {
                echo "Không nhận được product_id!";
            }
        } else {
            echo "Phương thức không phải POST!";
        }
    }

    public function detail()
    {
        if (isset($_SESSION['cart']['buy'])) {
            $listProduct = $_SESSION['cart']['buy'];
        }

        $product_id = $_GET['product_id'] ?? null;
        $totalPrice = $this->cartModel->totalPrice();

        include __DIR__ . "/../views/cart/detail.php";
    }


    public function payment()
    {
        include __DIR__ . "/../views/cart/payment.php";
    }

    public function paymentMoMo()
    {
        $paymentUrl = $this->cartModel->createPaymentRequest();

        if ($paymentUrl) {
            header("Location: $paymentUrl");
            exit();
        } else {
            echo "Không thể tạo yêu cầu thanh toán.";
        }
    }

    public function paymentSuccess()
    {

        // $config = require __DIR__ . '/../config/momo_config.php';

        // // Nhận dữ liệu từ MoMo gửi về qua webhook
        // if($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $data = json_decode(file_get_contents('php://input'), true);
        //     var_dump($data);
        // } else {
        //     $data = $_GET;
        // }

        // // Kiểm tra chữ ký để đảm bảo dữ liệu từ MoMo là hợp lệ
        // $rawHash = "accessKey=" . $config['accessKey'] .
        //     "&amount=" . $data['amount'] .
        //     "&extraData=" . $data['extraData'] .
        //     "&message=" . $data['message'] .
        //     "&orderId=" . $data['orderId'] .
        //     "&orderInfo=" . $data['orderInfo'] .
        //     "&orderType=" . $data['orderType'] .
        //     "&partnerCode=" . $data['partnerCode'] .
        //     "&payType=" . $data['payType'] .
        //     "&requestId=" . $data['requestId'] .
        //     "&responseTime=" . $data['responseTime'] .
        //     "&resultCode=" . 0 .
        //     "&transId=" . $data['transId'];

        // $signature = hash_hmac("sha256", $rawHash, $config['secretKey']);

        // // So sánh chữ ký
        // if ($signature !== $data['signature']) {
        //     // Chữ ký không hợp lệ, từ chối xử lý
        //     http_response_code(401);
        //     return "Invalid signature";
        // }

        // // Xử lý trạng thái giao dịch
        // if ($data['resultCode'] == 0) {
        //     // Thanh toán thành công, cập nhật trạng thái đơn hàng trong database
        //     $orderId = $data['orderId'];
        //     // Ví dụ: Cập nhật trạng thái đơn hàng trong database
        //     // $this->updateOrderStatus($orderId, 'PAID');
        //     return "Success";
        // } else {
        //     // Thanh toán thất bại, ghi log hoặc xử lý lỗi
        //     // Ví dụ: $this->logError($orderId, $data['message']);
        //     return "Failed: " . $data['message'];
        // }

        // include __DIR__ . "/../views/cart/paymentSuccess.php";
    }

    public function notify()
    {
        $config = require __DIR__ . '/../config/momo_config.php';

        // Nhận dữ liệu từ MoMo qua webhook (POST)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);
        } else {
            http_response_code(400);
            error_log("MoMo Notify: Invalid request method");
            return "Invalid request method";
        }

        if (!$data || !isset($data['signature'])) {
            http_response_code(400);
            error_log("MoMo Notify: Invalid data");
            return "Invalid data";
        }

        // Chuỗi ký (theo tài liệu MoMo)
        $rawHash = "accessKey=" . $config['accessKey'] .
            "&amount=" . $data['amount'] .
            "&extraData=" . $data['extraData'] .
            "&message=" . $data['message'] .
            "&orderId=" . $data['orderId'] .
            "&orderInfo=" . $data['orderInfo'] .
            "&partnerCode=" . $data['partnerCode'] .
            "&requestId=" . $data['requestId'] .
            "&resultCode=" . 0;

        $signature = hash_hmac("sha256", $rawHash, $config['secretKey']);

        // Kiểm tra chữ ký
        if ($signature !== $data['signature']) {
            http_response_code(401);
            error_log("MoMo Notify: Invalid signature");
            return "Invalid signature";
        }

        // Xử lý trạng thái giao dịch
        if ($data['resultCode'] == 0) {
            $orderId = $data['orderId'];
            // Cập nhật trạng thái đơn hàng
            // $this->updateOrderStatus($orderId, 'PAID');
            error_log("MoMo Notify: Payment success for order $orderId");
            return "Success";
        } else {
            error_log("MoMo Notify: Payment failed for order " . $data['orderId'] . ", message=" . $data['message']);
            return "Failed: " . $data['message'];
        }
    }

    public function callback()
    {
        $config = require __DIR__ . '/../config/momo_config.php';

        // Nhận dữ liệu từ redirectUrl (GET)
        $data = $_GET;

        if (!isset($data['signature'])) {
            error_log("MoMo Callback: Invalid data");
            include __DIR__ . "/../views/cart/paymentError.php";
            return;
        }

        // Chuỗi ký
        $rawHash = "accessKey=" . $config['accessKey'] .
            "&amount=" . $data['amount'] .
            "&extraData=" . $data['extraData'] .
            "&message=" . $data['message'] .
            "&orderId=" . $data['orderId'] .
            "&orderInfo=" . $data['orderInfo'] .
            "&partnerCode=" . $data['partnerCode'] .
            "&requestId=" . $data['requestId'] .
            "&resultCode=" . 0;

        $signature = hash_hmac("sha256", $rawHash, $config['secretKey']);

        // Kiểm tra chữ ký
        if ($signature !== $data['signature']) {
            error_log("MoMo Callback: Invalid signature");
            include __DIR__ . "/../views/cart/paymentError.php";
            return;
        }

        // Xử lý trạng thái giao dịch
        if ($data['resultCode'] == 0) {
            $orderId = $data['orderId'];
            // Cập nhật trạng thái đơn hàng (nếu chưa xử lý ở notify)
            // $this->updateOrderStatus($orderId, 'PAID');
            include __DIR__ . "/../views/cart/paymentSuccess.php";
        } else {
            error_log("MoMo Callback: Payment failed for order " . $data['orderId'] . ", message=" . $data['message']);
            include __DIR__ . "/../views/cart/paymentError.php";
        }
    }
}
