<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = file_get_contents('php://input');
    $product = json_decode($data);

    $id = mysqli_real_escape_string($con, $product->id);
    $name = mysqli_real_escape_string($con, $product->name);
    $description = mysqli_real_escape_string($con, $product->description);
    $price = mysqli_real_escape_string($con, $product->price);
    $image = mysqli_real_escape_string($con, $product->image);

    $stmt = $con->prepare("UPDATE products SET name = ?, description = ?, price = ?, image = ? WHERE id = ?");
    $stmt->bind_param("ssdsi", $name, $description, $price, $image, $id);

    if ($stmt->execute()) {
        $response = [
            'id' => $id,
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'image' => $image
        ];

        http_response_code(200);
        echo json_encode($response);
    } else {
        http_response_code(500);
        echo json_encode(['message' => 'Failed to update product']);
    }

    $stmt->close();
}

$con->close();
?>