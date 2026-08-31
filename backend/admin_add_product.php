
<?php
require_once 'db.php';

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_POST['image'];

$sql = "INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssds", $name, $description, $price, $image);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
?>
