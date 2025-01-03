<?php
namespace App\Controllers;

require_once __DIR__ . '/../helpers/EmailHelper.php';

require __DIR__ . "/../models/User.php";




function registerUser()
{
    $message = [];

    if (isset($_POST['registerButton'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $password = $_POST['password'];


        $firstName = checkFirstNameAjax(false);
        $lastName = checkLastNameAjax(false);
        $email = checkEmailAjax(false);
        $password = checkPasswordAjax(false);

        if (!empty($firstName && $lastName && $email && $password)) {
            userRegister($firstName, $lastName, $email, $password);
            $message['successfully'] = "Register sucessfully";
        } else {
            $message['error'] = "Something went wrong";
        }
    }
    include __DIR__ . '/../views/users/register.php';
}

function checkEmailAjax($isAjax = true)
{

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'] ?? '';

        $response = [];

        if (empty($_POST['email'])) {
            $response = ['status' => 'error', 'message' => 'Email cannot be blank'];
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response = ['status' => 'error', 'message' => 'Invalid email format'];
        }

        $countEmail = checkEmail($email);
        // echo "Count email: " . $countEmail['count'];
        if ($countEmail['count'] > 0) {
            $response = ['status' => 'error', 'message' => 'Email already exists'];
        } else {
            $response = ['status' => 'success', 'message' => 'Email is ok'];
        }

        if ($isAjax) {
            echo json_encode($response);
            exit;
        }
        if ($countEmail['count'] == 0 && $isAjax == false) {
            return $email;
        }
    }
}

function checkFirstNameAjax($isAjax = true)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstName = $_POST['firstName'] ?? '';
        $response = [];

        if (empty($firstName)) {
            $response = ['status' => 'error', 'message' => 'First name can not be blank'];
        } elseif (!preg_match("/^[A-Za-z]+$/", $firstName)) {
            $response = ['status' => 'error', 'message' => 'First name can not have number'];
        } else {
            $response = ['status' => 'success', 'message' => 'First name ok'];
        }
        if ($isAjax) {
            echo json_encode($response);
            exit;
        } else {
            return $isAjax ? $response : $firstName;
        }
    }
}

function checkLastNameAjax($isAjax = true)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $lastName = $_POST['lastName'] ?? '';
        $response = [];

        if (empty($lastName)) {
            $response = ['status' => 'error', 'message' => 'Last name can not be blank'];
        } elseif (!preg_match("/^[A-Za-z]+$/", $lastName)) {
            $response = ['status' => 'error', 'message' => 'Last name can not have number'];
        } else {
            $response = ['status' => 'success', 'message' => 'Last name ok'];
        }

        if ($isAjax) {
            echo json_encode($response);
            exit;
        } else {
            return $lastName;
        }
    }
}

function checkPasswordAjax($isAjax = true)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $password = $_POST['password'] ?? "";

        if (empty($password)) {
            $response = ['status' => 'error', 'message' => 'Password can not be blank'];
        } elseif (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).+$/", $password)) {
            $response = ['status' => 'error', 'message' => 'Password must have one CapsLock, number and abc'];
        } else {
            $response = ['status' => 'success', 'message' => 'Password ok'];
        }

        if ($isAjax) {
            echo json_encode($response);
        } else {
            return $password;
        }
    }
}

function loginUser()
{
    $message = [];
    if (isset($_POST['loginButton'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $checkLogin = userLogin($email, $password);
        if ($checkLogin > 0) {
            $_SESSION['email'] = $email;
            $_SESSIon['is_login'] = true;
            $message['successfully'] = "Login Successfully";
            header('Location:index.php?controller=user&action=forgot');
        } else {
            $message['error'] = "Email or Password not exists";
        }
    }


    include __DIR__ . '/../views/users/login.php';
}

function forgotPassword()
{
    echo "Ok roi";
    // if (isset($_POST['sendPasswordButton'])) {
    //     if (!empty($_POST['email'])) {
    //         $email = $_POST['email'];
    //     } else {
    //         return false;
    //     }

    //     $emailUser = findEmailUser($email);
    //     echo $emailUser;
    // };

    // $to = 'recipient_email@example.com';
    // $subject = 'Test Email';
    // $body = '<b>Hello!</b> This is a test email sent via PHPMailer.';
    // $altBody = 'Hello! This is a test email sent via PHPMailer.';

    // $result = \App\Helpers\EmailHelper::sendEmail($to, $subject, $body, $altBody);

    // if ($result === true) {
    //     echo 'Email has been sent successfully.';
    // } else {
    //     echo $result; // Hiển thị lỗi nếu có
    // }

    // include __DIR__ . "/../views/users/forgot.php";
}
?>