<?php

namespace App\Models\Admin;

require_once __DIR__ . "/../../config/database.php";

class Page
{
    // public $conn;
    
    // public function __construct($conn = null)
    // {
    //     if ($conn === null) {
    //         $this->conn = connectDatabase();
    //     } else {
    //         $this->conn = $conn;
    //     }
    // }

    // public function getAll()
    // {
    //     $sql = "SELECT * FROM pages ORDER BY page_id DESC";
    //     $result = mysqli_query($this->conn, $sql);
        
    //     $pages = [];
    //     if (mysqli_num_rows($result) > 0) {
    //         while ($row = mysqli_fetch_assoc($result)) {
    //             $pages[] = $row;
    //         }
    //     }
        
    //     return $pages;
    // }
    
    // public function findById($id)
    // {
    //     $sql = "SELECT * FROM pages WHERE page_id = '{$id}'";
    //     $result = mysqli_query($this->conn, $sql);
        
    //     if (mysqli_num_rows($result) > 0) {
    //         return mysqli_fetch_assoc($result);
    //     }
        
    //     return null;
    // }
    
    // public function create($data)
    // {
    //     $title = mysqli_real_escape_string($this->conn, $data['title']);
    //     $slug = mysqli_real_escape_string($this->conn, $data['slug']);
    //     $content = mysqli_real_escape_string($this->conn, $data['content']);
    //     $status = isset($data['status']) ? 1 : 0;
        
    //     $sql = "INSERT INTO pages (title, slug, content, status, created_at) 
    //             VALUES ('{$title}', '{$slug}', '{$content}', {$status}, NOW())";
        
    //     if (mysqli_query($this->conn, $sql)) {
    //         return mysqli_insert_id($this->conn);
    //     }
        
    //     return false;
    // }
    
    // public function update($id, $data)
    // {
    //     $title = mysqli_real_escape_string($this->conn, $data['title']);
    //     $slug = mysqli_real_escape_string($this->conn, $data['slug']);
    //     $content = mysqli_real_escape_string($this->conn, $data['content']);
    //     $status = isset($data['status']) ? 1 : 0;
        
    //     $sql = "UPDATE pages SET 
    //             title = '{$title}', 
    //             slug = '{$slug}', 
    //             content = '{$content}', 
    //             status = {$status}, 
    //             updated_at = NOW() 
    //             WHERE page_id = '{$id}'";
                
    //     return mysqli_query($this->conn, $sql);
    // }
    
    // public function delete($id)
    // {
    //     $sql = "DELETE FROM pages WHERE page_id = '{$id}'";
    //     return mysqli_query($this->conn, $sql);
    // }
}