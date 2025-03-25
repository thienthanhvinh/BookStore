<?php

namespace App\Core;

class BaseModel {
    protected $conn;
    
    public function __construct($conn) 
    {
        $this->conn = $conn;
    }
}