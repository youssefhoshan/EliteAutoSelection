<?php

// Verbinding maken met de database
$dsn = 'mysql:dbname=elite_auto_selection;host=localhost';
$user = 'root';
$password = '';

try {
	$pdo = new PDO($dsn, $user, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "PDO error" . $e->getMessage();
	die();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elite_auto_selection";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


// Gegevens van het formulier ophalen
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];

// Controleren of alle velden zijn ingevuld
if (empty($name) || empty($email) || empty($phone) || empty($date)) {
    echo "Vul alle velden in";
    exit;
}

// Gegevens opslaan in de database
$stmt = $conn->prepare("INSERT INTO afspraken (naam, email, telefoon, datum) VALUES (:naam, :email, :telefoon, :datum)");
$stmt->bindParam(':naam', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telefoon', $phone);
$stmt->bindParam(':datum', $date);

if ($stmt->execute()) {
    header("Location: thankyou.php");
} else {
    echo "Er is een fout opgetreden bij het maken van de afspraak";
}
