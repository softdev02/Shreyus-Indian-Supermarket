<?php

include './config/dbconfig.php';

function fetchAllgallery($conn, $page, $limit) {

    $offset = ($page - 1) * $limit;
    $sql = "SELECT * FROM gallery LIMIT $limit OFFSET $offset";
    $result = $conn->query($sql);
    $galleries = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $galleries[] = $row;
        }
    }
    return $galleries;
}
function getTotalRecords($conn) {
    $sql = "SELECT COUNT(*) as total FROM gallery";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total'];
}
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit =8; 
$totalRecords = getTotalRecords($conn);
$galleries = fetchAllgallery($conn, $page, $limit);
?>
