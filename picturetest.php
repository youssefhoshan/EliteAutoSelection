
<?php 

session_start();
require_once('db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
    <script src="test.js" defer></script>
</head>
<body>
<?php
     $category = $_GET['category'];
     $select_products = $pdo->prepare("SELECT * FROM `assortiment` WHERE productcode LIKE '%{$category}%';"); 
     $select_products->execute();
if ($select_products->rowCount() > 0) {
    while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
        ?>
    <section>
        <div class="container">
        <div id="first"><img class="first" src="./db_auto_images/<?= $fetch_product['foto1']; ?>"/> </div>
        <div id="second"><img class="second" src="./db_auto_images/<?= $fetch_product['foto2']; ?>"/> </div>
        <div id="third"><img class="third" src="./db_auto_images/<?= $fetch_product['foto3']; ?>"/> </div>
        </div>
    </section>
    
</body>
</html>

<?php
    }
} else {
    echo '<p class="empty">Nog geen product toegevoegd</p>';
}
?>