<?php

namespace App\Models;

class Search
{
    protected $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function search($table, $name, $keyword)
    {
        $sql = "SELECT * FROM $table WHERE $name LIKE '%$keyword%' LIMIT 2";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $searchResults = [];
            while ($row = $result->fetch_assoc()) {
                $searchResults[] = $row; 
            }
            return $searchResults;
        } else {
            echo "Not Found Result";
        }
    }
}
