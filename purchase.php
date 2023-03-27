<?php

// Connect to the database
$host = "localhost";
$dbname = "elite_auto_selection";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
// Get form data
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$date = date("Y-m-d");

// Insert purchase into the database
$stmt = $conn->prepare("INSERT INTO purchases (product, quantity, date) VALUES (:product, :quantity, :date)");
$stmt->bindParam(':product', $product);
$stmt->bindParam(':quantity', $quantity);
$stmt->bindParam(':date', $date);
$stmt->execute();
header("Location: thankyou.html");
?>
