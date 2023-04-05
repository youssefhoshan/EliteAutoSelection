<html>

<head>
    <title>Bedankt!</title>
    <link rel="stylesheet" href="style.css">
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
        <main class="thankspar">
            <h1 class="header-titel-thanks">Super bedankt voor je bestelling!</h1>
            <p class="p-thanks">Je hoort binnen enkele minuten een bestellingsconfirmatie te ontvangen. <br> Zodra de
                factuur is betaald mailen wij je direct met een confirmatie!</p>
            <a class="buybutton" href="informatie.html"><button class="buybuttonthanks" type="button"><span></span>MEER
                    INFO</button></a>
        </main>

    </div>

    <?php include 'components/footer.php'; ?>
    
</body>

</html>
