<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['food_id'])) {
    $food_id = (int)$_POST['food_id'];
    $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;

    // Check if the food item exists
    $stmt = $pdo->prepare("SELECT * FROM food_item WHERE id = ?");
    $stmt->execute([$food_id]);
    $food = $stmt->fetch();

    if ($food) {
        // Insert into cart (you can improve logic to check existing cart items and update quantity)
        $stmt = $pdo->prepare("INSERT INTO cart (food_id, quantity) VALUES (?, ?)");
        $stmt->execute([$food_id, $quantity]);
        $_SESSION['message'] = "Added {$food['name']} to cart!";
    } else {
        $_SESSION['message'] = "Food item not found.";
    }
} else {
    $_SESSION['message'] = "Invalid request.";
}

header('Location: index.php'); // Redirect back to the main page
exit;
?>


<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['food_id'])) {
    $food_id = (int)$_POST['food_id'];
    $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;

    // Check if the food item exists
    $stmt = $pdo->prepare("SELECT * FROM food_item WHERE id = ?");
    $stmt->execute([$food_id]);
    $food = $stmt->fetch();

    if ($food) {
        // Insert into cart (you can improve logic to check existing cart items and update quantity)
        $stmt = $pdo->prepare("INSERT INTO cart (food_id, quantity) VALUES (?, ?)");
        $stmt->execute([$food_id, $quantity]);
        $_SESSION['message'] = "Added {$food['name']} to cart!";
    } else {
        $_SESSION['message'] = "Food item not found.";
    }
} else {
    $_SESSION['message'] = "Invalid request.";
}

header('Location: index.php'); // Redirect back to the main page
exit;
?>