<?php 

session_start();
require_once('db_connect.php');
?>
<html>

<head>
    <title>Prijzen</title>
    <link rel="stylesheet" href="style.css">
    <script src="./js/carrousel.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="banner">
    <header>
            <div class="navbar">
                <a href="homepage.php"><img src="./images/logo.png" class="logo"></a>
                <div class="navbar-menu">
                    <ul>
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="shoppagina.php">Assortiment</a></li>
                        <li><a href="informatie.php">Informatie</a></li>
                        <?php
                        if (isset($_SESSION["voornaam"])) {
                            ?>
                            <li><a href="home.php"><?php echo $_SESSION["voornaam"]; ?></a></li>
                            <li><a href="logout.php">Logout</a></li>
                            <?php
                        } else {
                            ?>
                        <li><a href="register.php">Registreer</a></li>
                        <li><a href="login.php">Login</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
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
    <input type="hidden" name="image1" value="<?= $fetch_product['foto1']; ?>">
    <input type="hidden" name="image2" value="<?= $fetch_product['foto2']; ?>">
    <input type="hidden" name="image3" value="<?= $fetch_product['foto3']; ?>">
    <h1 class="h1-product"><?= $fetch_product['product']; ?></h1>
    <a href="quick_view.php?pid=<?= $fetch_product['productcode']; ?>" class="fas fa-eye"></a>
    <div class="carousel">
        <div class="carousel-images">
        <img src="./db_auto_images/<?= $fetch_product['foto1']; ?>"/> </div>
        <img src="./db_auto_images/<?= $fetch_product['foto2']; ?>"/> </div>
        <img src="./db_auto_images/<?= $fetch_product['foto3']; ?>"/> </div>
    </div>
    <div class="carousel-prev"></div>
    <div class="carousel-next"></div>
    </div>
    <div class="p-price"><?= $fetch_product['prijs']; ?></div>
    <div class="p-description"><?= $fetch_product['omschrijving']; ?></div>
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <div class="flex">
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <div class="container-purchase">
            <label for="product">Select Product:</label>
                <select id="product" name="product">
                    <option value="Product 1">Bouquette</option>
                    <option value="Product 2">Special Bouquette</option>
                    <option value="Product 3">Premium Bouquette</option>
                </select>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1">
            <input type="submit" value="Purchase">
        </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
    </form>
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
