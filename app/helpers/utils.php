<?php

namespace App\Helpers;


class Utils
{
    public function setFlashMessage($key, $message)
    {
        $_SESSION[$key] = $message;
    }

    public function getFlashMessage($key)
    {
        if (isset($_SESSION[$key])) {
            $message = $_SESSION[$key];
            unset($_SESSION[$key]); //xoá session sau khi hiển thị
            return $message;
        }
        return null;
    }

    public function getTimeByDays($days = '-14 days')
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $timeMinusByDays = date('Y-m-d H:i:s', strtotime($days));
        return $timeMinusByDays;
    }

    public function getCurrentTime()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $currentTime = date('Y-m-d H:i:s');
        return $currentTime;
    }
}
