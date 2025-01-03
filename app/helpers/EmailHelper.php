<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailHelper {
    public static function sendEmail($to, $subject, $body, $altBody = '') {
        require 'vendor/autoload.php';

        $mail = new PHPMailer(true);

        try {
            // Cấu hình SMTP
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'nguyenthienthanhvinh@gmail.com'; // Email của bạn
            $mail->Password   = ''; // Mật khẩu ứng dụng email
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            // Cấu hình người gửi và người nhận
            $mail->setFrom('nguyenthienthanhvinh@gmail.com', 'Thanh Vinh');
            $mail->addAddress($to);

            // Nội dung email
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = $altBody ?: strip_tags($body);

            $mail->send();
            return true; // Gửi thành công
        } catch (Exception $e) {
            return "Mailer Error: {$mail->ErrorInfo}"; // Trả về lỗi nếu thất bại
        }
    }
}
