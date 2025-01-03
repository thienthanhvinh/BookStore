<?php
require_once __DIR__ . "/../config/database.php";

global $conn;
$conn = connectDatabase();



function userRegister($firstName, $lastName, $email, $password) {
    global $conn;
    $sql = "INSERT INTO users (firstName, lastName, email, password, address, phone, gender, role, createdAt, updatedAt, resetToken) VALUES ('$firstName', '$lastName', '$email', '$password', '', '', '', '', '', '', '')";
    $result = mysqli_query($conn, $sql);
    if($result) {
        return $result;
    }else {
        echo "Error: " . mysqli_error($conn);
    }
}

function userLogin($email, $password) {
    global $conn;
    $sql = "SELECT email, password FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if($result) {
        $lengthUser = mysqli_num_rows($result);
        return $lengthUser;
    }else {
        echo "Error: " . mysqli_error($conn);
    }
}

function checkEmail($email){
    global $conn;
    $sql = "SELECT COUNT(*) as count FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $countEmail = mysqli_fetch_assoc($result);
        return $countEmail;
    }else {
        echo "Error: " . mysqli_error($conn);
    }
}

function findEmailUser($email) {
    global $conn;
    $sql = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $emailUser = mysqli_fetch_assoc($result);
        return $emailUser;
    }else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>

