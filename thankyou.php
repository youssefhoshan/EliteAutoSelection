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
                <ul>
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="shoppagina.php">Assortiment</a></li>
                    <li><a href="informatie.php">Informatie</a></li>
                    <li><a href="./loginsystem/login.php">Login</a></li>
                </ul>
            </div>
        </header>
        <main class="thankspar">
            <h1 class="header-titel-thanks">Super bedankt voor uw aanvraag!</h1>
            <p class="p-thanks">U hoort binnen enkele minuten of u op de dag kunt langs komen voor een proefrit! vergeet uw rijbewijs niet!</p>
            <a class="buybutton" href="informatie.php"><button class="buybuttonthanks" type="button"><span></span>MEER
                    INFO</button></a>
        </main>

    </div>

    <?php include 'components/footer.php'; ?>
    
</body>

</html>
