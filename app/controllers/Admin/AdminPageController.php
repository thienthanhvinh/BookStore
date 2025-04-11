<?php

namespace App\Controllers\Admin;

use App\Models\Admin\Page;

class AdminPageController
{

    private $pageModel;


    public function __construct()
    {
        $this->pageModel = new Page();
    }

    public function index()
    {
        $title = "List Page";
        // $pages = $this->pageModel->getAll();
        include __DIR__ . "/../../views/admin/pages/list.php";
    }

    public function create()
    {
        $title = "Create Page";
        include __DIR__ . "/../../views/admin/pages/create.php";
    }

    public function store()
    {
        // Xử lý thêm trang mới
    }

    // public function show($id) {
    //     $page = $this->pageModel->findById($id);
    //     $title = "Chi tiết trang";
    //     include __DIR__ . "/../../views/admin/pages/show.php";
    // }

    public function edit() {
        // $page = $this->pageModel->findById($id);
        $title = "Edit Page";
        include __DIR__ . "/../../views/admin/pages/edit.php";
    }

    public function update($id) {
        // Xử lý cập nhật trang
    }

    // public function delete($id) {
    //     // Xử lý xóa trang
    // }
}
