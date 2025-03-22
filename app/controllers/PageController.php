<?php

namespace App\Controllers;

class PageController {
    public function about() {
        include __DIR__ . '/../views/pages/about.php';
    }
    public function contact() {
        include __DIR__ . '/../views/pages/contact.php';
    }

} 