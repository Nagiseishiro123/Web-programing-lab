<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['edit_id'])) {
        $id = $_GET['edit_id'];

        $stmt = $con->prepare("SELECT id, name, description, price, image FROM products WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $product = $result->fetch_assoc();

            if ($product) {
                $productData = [
                    'id' => $product['id'],
                    'name' => $product['name'],
                    'description' => $product['description'],
                    'price' => $product['price'],
                    'image' => $product['image']
                ];

                header('Content-Type: application/json');
                echo json_encode($productData);
            }
        }

        $stmt->close();
    }
}

$con->close();
?>