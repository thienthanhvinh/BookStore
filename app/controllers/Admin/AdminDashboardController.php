<?php

namespace App\controllers\Admin;

class AdminDashboardController {
    public function index() {
        $title = "Dashboard";
        include __DIR__ . "/../../views/admin/dashboard/detail.php";
    }

}
