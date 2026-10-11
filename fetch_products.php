<?php
include 'db_connect.php';

$sql = "SELECT * FROM products";

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql .= " WHERE name LIKE '%$search%'";
}

if (isset($_GET['sort'])) {
    if ($_GET['sort'] == "low") {
        $sql .= " ORDER BY price ASC";
    } else if ($_GET['sort'] == "high") {
        $sql .= " ORDER BY price DESC";
    }
}

if (isset($_GET['brand'])) {
    $brand = $_GET['brand'];
    $sql .= " WHERE brand='$brand'";
}

$result = $conn->query($sql);
$products = [];

while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

echo json_encode($products);
?>
