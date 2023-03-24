<?php 
session_start();
require_once('db_connect.php');
?>
<html>

<head>
    <title>Luxury Cars</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
            <div class="body-container-shop">
                <div class="container-shop">
                    <div class="price-column-shop">
                            <?php
                            $show_products = $pdo->prepare("SELECT * FROM `assortiment`");
                            $show_products->execute();
                            if ($show_products->rowCount() > 0) {
                                while ($fetch_products = $show_products->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                            <div class="product">
                            <a href="product.php?pid=<?=$fetch_products['productcode'];?>"></a>
                                <img src="db_auto_images/<?= $fetch_products['foto1']; ?>" alt="Luxury Car">
                                <p class="product-description"><?= $fetch_products['product']; ?></p>
                                <p class="year"> <i class="fa fa-car"></i> <b><?= $fetch_products['jaartal']; ?></b> 
                                    <br> <i class="fa fa-road"></i><?= $fetch_products['kilometers']; ?>
                                </p>
                                <p class="product-price"><?= $fetch_products['prijs']; ?></p>
                            </div>
                                    <?php
                                }
                            } else {
                                echo '<p class="empty">Nog geen producten toegevoegd</p>';
                            }
                            ?>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer">
                <div class="column">
                    <div class="title">Koop advies</div>
                    <ul>
                        <a href="#" style="color:grey; text-decoration: none;">
                            <li>Vergelijk modellen</li>
                        </a>
                        <a href="#" style="color:grey; text-decoration: none;">
                            <li>Serviceprijzen</li>
                        </a>
                        <a href="#" style="color:grey; text-decoration: none;">
                            <li>Diplomatic Sales</li>
                        </a>
                        <a href="#" style="color:grey; text-decoration: none;">
                            <li>WLTP</li>
                        </a>
                    </ul>
                </div>
                <div class="column">
                    <div class="title">Online Services</div>
                    <ul>
                        <a href="#" style="color:grey; text-decoration: none;">
                            <li>Aanmelden e-mailnieuwsbrief</li>
                        </a>
                        <a href="#" style="color:grey; text-decoration: none;">
                            <li>Afmelden voor informatie-updates</li>
                        </a>
                        <a href="#" style="color:grey; text-decoration: none;">
                            <li>Apps</li>
                        </a>
                        <a href="#" style="color:grey; text-decoration: none;">
                            <li>Contact</li>
                        </a>
                    </ul>
                </div>
                <div class="column">
                    <div class="title">Achter de schermen</div>
                    <ul>
                        <a href="#" style="color:grey; text-decoration: none;">
                            <li>Autosport</li>
                        </a>
                        <a href="#" style="color:grey; text-decoration: none;">
                            <li>Travel Club</li>
                        </a>
                    </ul>
                </div>
                <div class="column">
                    <div class="title">Winkels in Nederland</div>
                    <ul>
                        <a href="#" style="color:grey; text-decoration: none;">
                            <li>Amsterdam</li>
                        </a>
                        <a href="#" style="color:grey; text-decoration: none;">
                            <li>Den Haag</li>
                        </a>
                        <a href="#" style="color:grey; text-decoration: none;">
                            <li>Maastricht</li>
                        </a>
                    </ul>
                </div>
                <div class="column">
                    <div class="title">Volg ons</div>
                    <ul>
                        <li><a href="https://www.facebook.com/example" style="color:grey; text-decoration: none;"><i
                                    class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li><a href="https://www.instagram.com/example" style="color:grey; text-decoration: none;"><i
                                    class="fab fa-instagram"></i> Instagram</a></li>
                        <li><a href="https://twitter.com/example" style="color:grey; text-decoration: none;"><i
                                    class="fab fa-twitter"></i>Twitter</a></li>
                    </ul>
                </div>
            </div>
        </footer>
</body>

</html>
