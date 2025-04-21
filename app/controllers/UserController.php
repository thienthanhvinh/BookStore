<?php

namespace App\Controllers;

use App\Helpers\EmailHelper;
use Google\Client;
use Google\Service\BeyondCorp;
use Google\Service\Oauth2;

require __DIR__ . "/../models/User.php";

class UserController
{
    public function registerUser()
    {
        $message = [];

        if (isset($_POST['registerButton'])) {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $password = $_POST['password'];


            $firstName = $this->checkFirstNameAjax(false);
            $lastName = $this->checkLastNameAjax(false);
            $email = $this->checkEmailAjax(false);
            $password = $this->checkPasswordAjax(false);

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            if (!empty($firstName && $lastName && $email && $hashedPassword)) {
                userRegister($firstName, $lastName, $email, $hashedPassword);
                $message['successfully'] = "Register sucessfully";
            } else {
                $message['error'] = "Something went wrong";
            }
        }
        include __DIR__ . '/../views/users/register.php';
    }

    public function checkEmailAjax($isAjax = true)
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
    public function checkFirstNameAjax($isAjax = true)
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

    public function checkLastNameAjax($isAjax = true)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $lastName = $_POST['lastName'] ?? '';
            echo $lastName;
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

    public function checkPasswordAjax($isAjax = true)
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

    public function loginUser()
    {
        $message = [];
        if (isset($_POST['loginButton'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordArray = getPassword();
            // print_r($passwordArray);
            foreach ($passwordArray as $passwordHash) {
                if (password_verify($password, $passwordHash)) {
                    $checkLogin = userLogin($email, $passwordHash);
                    if ($checkLogin > 0) {
                        $_SESSION['email'] = $email;
                        $_SESSION['is_login'] = true;
                        $message['successfully'] = "Login Successfully";
                        header('Location:index.php?controller=home&action=index');
                    } else {
                        $message['error'] = "Email or Password not exists";
                    }
                }
            }

            // if (password_verify($password, $passwordHash)) {
            //     $checkLogin = userLogin($email, $passwordHash);
            //     if ($checkLogin > 0) {
            //         $_SESSION['email'] = $email;
            //         $_SESSION['is_login'] = true;
            //         $message['successfully'] = "Login Successfully";
            //         header('Location:index.php?controller=home&action=index');
            //     }
            //     $message['error'] = "Email or Password not exists";
            // }
            // if(password_verify($password,))
            // $checkLogin = userLogin($email, $password);
            // if ($checkLogin > 0) {
            //     $_SESSION['email'] = $email;
            //     $_SESSION['is_login'] = true;
            //     $message['successfully'] = "Login Successfully";
            //     header('Location:index.php?controller=home&action=index');
            // } else {
            //     $message['error'] = "Email or Password not exists";
            // }
        }


        include __DIR__ . '/../views/users/login.php';
    }

    public function loginGoogle()
    {
        $client = new Client();
        $client->setClientId('493035413905-vgi7blctd513fg3qg1rgv9r1v5vtrs3g.apps.googleusercontent.com'); // Thay bằng Client ID của bạn
        $client->setClientSecret('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'); // Thay bằng Client Secret của bạn
        $client->setRedirectUri('http://localhost/BookStore/public/index.php?controller=user&action=loginGoogle');

        if (isset($_GET['code'])) {
            // Lấy access token từ Google
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            $client->setAccessToken($token);

            // Lấy thông tin người dùng
            $oauth = new Oauth2($client);
            $userInfo = $oauth->userinfo->get();
            // $json = json_encode($userInfo);
            // var_dump($json);

            // // Debug hoặc xử lý thông tin người dùng
            // echo 'User ID: ' . $userInfo->id . '<br>';
            // echo 'Name: ' . $userInfo->name . '<br>';
            // echo 'Email: ' . $userInfo->email . '<br>';

            // $emailArray = getEmail();

            // foreach ($emailArray as $item) {
            //     if ($item['email'] === $userInfo->email) {
            //         $emailExists = true;
            //         break;
            //     }
            // }
            // if ($emailExists) {
            //     $_SESSION['email'] = $userInfo->email;
            //     $_SESSION['is_login'] = true;
            //     header('Location:index.php?controller=home&action=index');
            // } else {
            //     userRegister($userInfo->givenName, $userInfo->familyName, $userInfo->email, null);
            //     $_SESSION['email'] = $userInfo->email;
            //     $_SESSION['is_login'] = true;
            //     header('Location:index.php?controller=home&action=index');
            // }

            if (!isEmailExists($userInfo->email)) {
                userRegister($userInfo->givenName, $userInfo->familyName, $userInfo->email, null);
                $_SESSION['email'] = $userInfo->email;
                $_SESSION['is_login'] = true;
                header('Location:index.php?controller=home&action=index');
            }
            $_SESSION['email'] = $userInfo->email;
            $_SESSION['is_login'] = true;
            header('Location:index.php?controller=home&action=index');
        }
    }

    public function logoutUser()
    {
        unset($_SESSION['email']);
        unset($_SESSION['is_login']);
        session_destroy();
        header('Location:index.php?controller=home&action=index');
    }


    public function forgotPassword()
    {

        if (isset($_POST['sendPasswordButton'])) {
            if (!empty($_POST['email'])) {
                $email = $_POST['email'];
            }

            $emailUser = findEmailUser($email);

            if ($emailUser) {
                $to = $emailUser;
                $subject = 'Test Email';
                $body = '<b>Hello!</b> This is a test email sent via PHPMailer.';
                $altBody = 'Hello! This is a test email sent via PHPMailer.';

                $result = EmailHelper::sendEmail($to, $subject, $body, $altBody);

                if ($result === true) {
                    echo 'Email has been sent successfully.';
                } else {
                    echo $result; // Hiển thị lỗi nếu có
                }
            } else {
                echo "Email not exists";
            }
        };


        include __DIR__ . "/../views/users/forgot.php";
    }

    public function checkAjax()
    {
        // if(isset($_GET['id'])) {
        //     $id = $_GET['id'];
        //     echo $id;
        // }else {
        //     echo "Something went wrong";
        // }

        $id = $_GET['id'] ?? 'Ok';
        echo $id;

        include __DIR__ . '/../views/users/register.php';
    }

    public function profile()
    {
        $email =  $_SESSION['email'];
        $userProfile = getUserProfile($email);

        include __DIR__ . "/../views/users/profile.php";
    }

    public function changePassword()
    {
        include __DIR__ . "/../views/users/change.php";
    }
}
