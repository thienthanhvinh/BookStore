<?php
require_once __DIR__ . "/../config/database.php";

global $conn;
$conn = connectDatabase();


function userRegister($googleId, $firstName, $lastName, $email, $password = null)
{
    global $conn;
    $sql = "INSERT INTO users (google_id, first_name, last_name, email, password, address, phone, gender, role, created_at, updated_at, reset_token) VALUES ($googleId, '$firstName', '$lastName', '$email', '$password', '', '', 'male', '', '2025-04-18', '2025-04-18', '')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return $result;
    } else {

        echo "Error: " . mysqli_error($conn);
    }
}

function userLogin($email, $passwordHash)
{
    global $conn;
    $sql = "SELECT email, password FROM users WHERE email = '$email' AND password = '$passwordHash'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $lengthUser = mysqli_num_rows($result);
        return $lengthUser;
    } else {

        echo "Error: " . mysqli_error($conn);
    }
}



function checkEmail($email)
{
    global $conn;
    $sql = "SELECT COUNT(*) as count FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $countEmail = mysqli_fetch_assoc($result);
        return $countEmail;
    } else {

        echo "Error: " . mysqli_error($conn);
    }
}

function findEmailUser($email)
{
    global $conn;
    $sql = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $emailUserArray = mysqli_fetch_assoc($result);
        foreach ($emailUserArray as $email) {
            $emailUser = $email;
        }
        return $emailUser;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

function getUserProfile($email)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $userProfile = mysqli_fetch_assoc($result);
        return $userProfile;
    } else {
        echo "Error: " . mysqli_error($conn);
        echo "Not Found Any User Profile";
    }
}

function getPassword()
{
    global $conn;
    $sql = "SELECT password FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $passwordArray = [];
        while ($row = mysqli_fetch_assoc(($result))) {
            $passwordArray[] = $row['password'];
        }
        return $passwordArray;
    } else {
        echo "Error: " . mysqli_error($conn);
        echo "Password Array Empty";
    }
}

function getEmail()
{
    global $conn;
    $sql = "SELECT email FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $emailArray = [];
        while ($row = mysqli_fetch_assoc(($result))) {
            $emailArray[] = $row;
        }
        return $emailArray;
    } else {
        echo "Error: " . mysqli_error($conn);
        echo "Email Array Empty";
    }
}

function isEmailExists($email)
{
    global $conn;
    $email = mysqli_real_escape_string($conn, $email); // để tránh lỗi SQL injection

    $sql = "SELECT EXISTS(SELECT 1 FROM users WHERE email = ?) AS email_exists";
    $stmt = mysqli_prepare($conn, $sql);
    if (!$stmt) {
        echo "Lỗi prepare: " . mysqli_error($conn);
        return false;
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        return (bool)$row['email_exists']; // Trả về true hoặc false
    }

    return false;
}

// function isEmailExists($email)
// {
//     global $conn;
//     $email = mysqli_real_escape_string($conn, $email); // để tránh lỗi SQL injection

//     $sql = "SELECT EXISTS(SELECT 1 FROM users WHERE email = '$email') AS email_exists";
//     $result = mysqli_query($conn, $sql);

//     if ($row = mysqli_fetch_assoc($result)) {
//         return (bool)$row['email_exists'];
//     }

//     return false;
// }
