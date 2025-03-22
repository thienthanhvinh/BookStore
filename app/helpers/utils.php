<?php

function setFlashMessage($key, $message) {
    $_SESSION[$key] = $message;
}

function getFlashMessage($key) {
    if(isset($_SESSION[$key])) {
        $message = $_SESSION[$key];
        unset($_SESSION[$key]); //xoá session sau khi hiển thị
        return $message;
    }
    return null;
} 