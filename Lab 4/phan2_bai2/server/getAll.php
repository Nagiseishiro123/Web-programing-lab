<?php
include 'connect.php';

$stmt = $con->prepare("SELECT id, name, description, price FROM products");
$stmt->execute();

$result = $stmt->get_result();
$products = array();

while ($row = $result->fetch_assoc()) {
    $product = array(
        'id' => $row['id'],
        'name' => $row['name'],
        'description' => $row['description'],
        'price' => $row['price']
    );

    $products[] = $product;
}

$stmt->close();
$con->close();

header('Content-Type: application/json');
echo json_encode($products);
?>