<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = file_get_contents('php://input');
    $product = json_decode($data);

    $name = $product->name;
    $description = $product->description;
    $price = $product->price;
    $image = $product->image;

    $stmt = $con->prepare("INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssds", $name, $description, $price, $image);

    if ($stmt->execute()) {
        $productId = $stmt->insert_id;

        $response = [
            'id' => $productId,
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'image' => $image
        ];

        http_response_code(201);
        echo json_encode($response);
    } else {
        http_response_code(500);
        echo json_encode(['message' => 'Failed to add product']);
    }

    $stmt->close();
}

$con->close();
?>