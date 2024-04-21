<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['delete_id'])) {
        $id = $_GET['delete_id'];

        $stmt = $con->prepare("DELETE FROM products WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            http_response_code(200);
            echo json_encode(['message' => 'Delete product successfully']);
        } else {
            http_response_code(500);
            echo json_encode(['message' => 'Failed to delete product']);
        }

        $stmt->close();
    } else {
        http_response_code(400);
        echo json_encode(['message' => 'Invalid request. Missing delete_id parameter']);
    }
}

$con->close();
?>