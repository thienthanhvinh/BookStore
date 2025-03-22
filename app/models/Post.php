<?php

global $conn;
$conn = connectDatabase();

function getListPost()
{
    global $conn;
    $sql = "SELECT * FROM posts";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $listResult = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $listResult[] = $row;
        }
        return $listResult;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
