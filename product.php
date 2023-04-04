<?php 

session_start();
require_once('db_connect.php');
?>
<html>

<head>
    <title>Prijzen</title>
    <script src="./js/carrousel.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <script src="./js/test.js" defer></script>
    <script src="./js/favourite.js" defer></script>
</head>

<body>
    <div class="banner">
        <header>
            <div class="navbar">
                <a href="homepage.php"><img src="./images/logo.png" class="logo"></a>
                <ul>
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="shoppagina.php">Assortiment</a></li>
                    <li><a href="informatie.php">Informatie</a></li>
                    <li><a href="./loginsystem/login.php">Login</a></li>
                </ul>
            </div>
        </header>
<main>
    <form>
        <input class="button-back-product" type="button-product" value="Go back!" onclick="history.back()">
    </form>
<!-- Searching the specific car from the database -->
<?php
     $category = $_GET['category'];
     $select_products = $pdo->prepare("SELECT * FROM `assortiment` WHERE productcode LIKE '%{$category}%';"); 
     $select_products->execute();
if ($select_products->rowCount() > 0) {
    while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
        ?>
    <form action="" method="post" class="product-container">
    <input type="hidden" name="productcode" value="<?= $fetch_product['productcode']; ?>">
    <input type="hidden" name="name" value="<?= $fetch_product['product']; ?>">
    <input type="hidden" name="price" value="<?= $fetch_product['prijs']; ?>">
    <input type="hidden" name="jaartal" value="<?= $fetch_product['jaartal']; ?>">
    <input type="hidden" name="kilometers" value="<?= $fetch_product['kilometers']; ?>">
    <h1 class="h1-product"><?= $fetch_product['product']; ?></h1>
    <a href="quick_view.php?pid=<?= $fetch_product['productcode']; ?>" class="fas fa-eye"></a>
    <div class="content-shop">
        <div id="first"><img class="first" src="./db_auto_images/<?= $fetch_product['foto1']; ?>"/> </div>
        <div id="second"><img class="second" src="./db_auto_images/<?= $fetch_product['foto2']; ?>"/> </div>
        <div id="third"><img class="third" src="./db_auto_images/<?= $fetch_product['foto3']; ?>"/> </div>
    </div>
    </form>
    <div class="container-purchase">
      <div class="container-shop-test">
        <button class="b1" id="b1" onClick="myFunction()"></button>
        <button class="b2" id="b2" onClick="myFunction2()"></button>
        <button class="b3" id="b3" onClick="myFunction3()"></button>
    </div>
    <div class="p-price"><?= $fetch_product['prijs']; ?></div>
    <hr>
      
      <div class="p-jaartal-km-desc">Jaartal - Kilometerstand</div>
        <div class="p-jaartal-km"><?= $fetch_product['jaartal']; ?> - <?= $fetch_product['kilometers']; ?> </div>
        <hr>
      <div class="p-description"><?= $fetch_product['omschrijving']; ?></div>
      <div class="btn-product-container">
        <button id="favorite-btn">Voeg Toe Aan Favorieten</button>
        <button id="boeken-btn"> <a class="a-button-product" href="test.php">Boek een rit!</button>
      </div>
    
      <i class="fas fa-clock"></i>
      
        </div>
        <?php
    }
} else {
    echo '<p class="empty">Nog geen product toegevoegd</p>';
}
?>
    </div>
</main>

<?php include 'components/footer.php'; ?>
</body>

</html>
