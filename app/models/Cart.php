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

    public function addCart($productId, $quantity)
    {

        $inforProduct = $this->productModel->getDetailProductById($productId);
        $quantity = $quantity ? $quantity : 1;

        // Thêm hoặc cập nhật sản phẩm trong giỏ hàng
        if (isset($_SESSION['cart']['buy'][$productId])) {
            // Nếu sản phẩm đã có, tăng quantity
            $_SESSION['cart']['buy'][$productId]['quantity'] += $quantity;
        } else {
            // Nếu sản phẩm chưa có, thêm mới
            $_SESSION['cart']['buy'][$productId] = [
                'product_id' => $inforProduct['product_id'],
                'product_image' => $inforProduct['product_image'],
                'product_name' => $inforProduct['product_name'],
                'price' => $inforProduct['price'],
                'quantity' => $quantity,
                'total' => $quantity * $inforProduct['price'],
            ];
        }

        print_r($_SESSION['cart']['buy']);

        // Cập nhật total
        $newQuantity = $_SESSION['cart']['buy'][$productId]['quantity'] ?? 1;
        $_SESSION['cart']['buy'][$productId]['total'] =  $newQuantity * $inforProduct['price'];
        // unset($_SESSION['cart']['buy']);
    }

    public function totalPrice()
    {
        $total = 0;
        if (isset($_SESSION['cart']['buy'])) {

            foreach ($_SESSION['cart']['buy'] as $item) {
                $total += $item['total'];
            }
        }
        return $total;
    }


    public function createPaymentRequest()
    {
        $config = require __DIR__ . '/../config/momo_config.php';

        $orderInfo = "Thanh toán sách";
        $amount = "10000"; // Giá đơn hàng
        $orderId = time() . "";
        $requestId = time() . "";
        $extraData = "";


        // Chữ ký dùng để xác thực giao dịch
        $rawHash = "accessKey=" . $config['accessKey'] .
            "&amount=" . $amount .
            "&extraData=" . $extraData .
            "&ipnUrl=" . $config['notifyUrl'] .
            "&orderId=" . $orderId .
            "&orderInfo=" . $orderInfo .
            "&partnerCode=" . $config['partnerCode'] .
            "&redirectUrl=" . $config['returnUrl'] .
            "&requestId=" . $requestId .
            "&requestType=captureWallet";

        $signature = hash_hmac("sha256", $rawHash, $config['secretKey']);


        // Request gửi tới momo
        $data = [
            'partnerCode' => $config['partnerCode'],
            'accessKey' => $config['accessKey'],
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $config['returnUrl'],
            'ipnUrl' => $config['notifyUrl'],
            'extraData' => $extraData,
            'requestType' => "captureWallet",
            'signature' => $signature,
            'lang' => 'vi'
        ];

        $ch = curl_init($config['endpoint']);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            error_log("cURL Error: " . curl_error($ch));
            curl_close($ch);
            return false;
        }
        curl_close($ch);
        $jsonResult = json_decode($result, true);

        if (!$jsonResult || !isset($jsonResult['resultCode'])) {
            error_log("MoMo API Error: Invalid response - " . $result);
            return false;
        }

        if ($jsonResult['resultCode'] !== 0) {
            error_log("MoMo API Error: resultCode=" . $jsonResult['resultCode'] . ", message=" . ($jsonResult['message'] ?? 'No message'));
            return false;
        }

        return $jsonResult['payUrl'] ?? false;
    }
}
