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
                <div class="navbar-menu">
                    <ul>
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="shoppagina.php">Assortiment</a></li>
                        <li><a href="informatie.php">Informatie</a></li>
                        <?php
                        if (isset($_SESSION["voornaam"])) {
                            ?>
                            <li><a href="profile.php"><?php echo $_SESSION["voornaam"]; ?></a></li>
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
            <section class="category">
            <div class="body-container-shop">
                <div class="container-shop">

                    <div class="price-column-shop">
                        <div class="product">
                            <a href="product.php?category=1">
                                <img src="db_auto_images/lambo_m1.jpg" alt="Luxury Car 1">
                                <p class="product-description">Lamborghini Murcielago
                                </p>
                                <p class="year"> <i class="fa fa-car"></i> <b>2007</b> <br> <i class="fa fa-road"></i>
                                    7.000 km</p>
                                <p class="product-price"> &#8364;309.402</p>
                            </a>
                        </div>
                        <div class="product">
                            <a href="product.php?category=2">
                                <img src="db_auto_images/porsche1.png" alt="Porsche">
                                <p class="product-description">Porsche 911 Turbo S <br>Cabriolet</p>
                                <p class="year"> <i class="fa fa-car"></i> <b>2023</b> <br> <i class="fa fa-road"></i>
                                    50.000 km</p>
                                <p class="product-price"> &#8364;265,000</p>
                            </a>
                        </div>
                        <div class="product">
                            <a href="product.php?category=3">
                                <img src="db_auto_images/bugatti1.png" alt="Luxury Car 3">
                                <p class="product-description">Bugatti Chiron AWD</p>
                                <p class="year"> <i class="fa fa-car"></i> <b>2018</b> <br> <i class="fa fa-road"></i>
                                    200 km</p>
                                <p class="product-price"> &#8364;2.600,000</p>
                            </a>
                        </div>
                        <div class="product">
                            <a href="product.php?category=4">
                                <img src="db_auto_images/ferrari1.png" alt="Luxury Car 4">
                                <p class="product-description">Ferrari 812 Superfast RWD</p>
                                <p class="year"> <i class="fa fa-car"></i> <b>2019</b> <br> <i class="fa fa-road"></i>
                                    8.000 km</p>
                                <p class="product-price"> &#8364;436,280</p>
                            </a>
                        </div>
                        <div class="product">
                            <a href="product.php?category=5">
                                <img src="db_auto_images/mclaren1.png" alt="Luxury Car 5">
                                <p class="product-description">McLaren P1 GTR</p>
                                <p class="year"> <i class="fa fa-car"></i> <b>2020</b> <br> <i class="fa fa-road"></i>
                                    20.000 km</p>
                                <p class="product-price"> &#8364;2,450,000</p>
                            </a>
                        </div>
                        <div class="product">
                            <a href="product.php?category=6">
                                <img src="db_auto_images/mercedes1.png" alt="Luxury Car 6">
                                <p class="product-description">Mercedes-Benz AMG GT</p>
                                <p class="year"> <i class="fa fa-car"></i> <b>2020</b> <br> <i class="fa fa-road"></i>
                                    20.000 km</p>
                                <p class="product-price">&#8364;179,814</p>
                            </a>
                        </div>
                        <div class="product">
                            <a href="product.php?category=7">
                                <img src="db_auto_images/pagani1.png" alt="Luxury Car 7">
                                <p class="product-description">Pagani Huayra</p>
                                <p class="year"> <i class="fa fa-car"></i> <b>2020</b> <br> <i class="fa fa-road"></i>
                                    20.000 km</p>
                                <p class="product-price"> &#8364;2,809,144</p>
                            </a>
                        </div>
                        <div class="product">
                            <a href="product.php?category=8">
                                <img src="db_auto_images/lambo_v1.png" alt="Luxury Car 8">
                                <p class="product-description">Lamborghini Veneno</p>
                                <p class="year"> <i class="fa fa-car"></i> <b>2020</b> <br> <i class="fa fa-road"></i>
                                    20.000 km</p>
                                <p class="product-price"> &#8364;8,891,642</p>
                            </a>
                        </div>
            </section>
        </main>

        <?php include 'components/footer.php'; ?>
        
</body>

</html>
