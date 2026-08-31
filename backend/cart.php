
<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$action = $_POST['action'];
$product_id = $_POST['product_id'];
$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

switch ($action) {
    case 'add':
        $_SESSION['cart'][$product_id] = $quantity;
        break;
    case 'remove':
        unset($_SESSION['cart'][$product_id]);
        break;
    case 'update':
        $_SESSION['cart'][$product_id] = $quantity;
        break;
    case 'empty':
        $_SESSION['cart'] = [];
        break;
}

echo json_encode(['cart' => $_SESSION['cart']]);
?>
