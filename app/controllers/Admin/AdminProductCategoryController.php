<?php
namespace App\Controllers\Admin;

use App\Helpers\Utils;

class AdminProductCategoryController {

    public function __construct()
    {
        
    }

    public function index() {
        $title = "Product List Category";
        include __DIR__ . "/../../views/admin/products/listCategory.php";
    }

}

