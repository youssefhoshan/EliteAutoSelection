<html>

<head>
    <title>Elite Auto Selection</title>
    <link rel="stylesheet" href="style.css">
    <script src="./js/script.js" defer></script>
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
                        <li><a href="./loginsystem/login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <main>
            <div class="body-container">
                <div class="content">
                    <h1 class="typing-header">Elite Auto Selection</h1>
                    <p>Welkom bij Elite Auto Collection. High-end auto's, deskundige verkoopteams, kwaliteit en
                        uitmuntendheid. Bezoek onze showroom.<br> klik de knop hieronder voor meer info!<br>
                    </p>
                    <div>
                        <a class="buybutton" href="shoppagina.php"><button type="button"><span></span>KOOP
                                NU</button></a>
                        <a class="buybutton" href="informatie.php"><button type="button"><span></span>MEER
                                INFO</button></a>
                    </div>
                </div>
            </div>
            <div class="containertest">
                <div class="sectiontest1">
                    <a href="informatie.php"><img src="images/winkel.jpg" alt="image1" class="winkel"></a>
                    <br>
                    <h1>Kalverstraat 74</h1> <br>
                    <p>Op de kalverstraat kunt u onze showroom bezoeken en uw auto zelf ontwerpen!</p>
                </div>
                <div class="sectiontest2">
                    <a href="shoppagina.php"> <img src="images/lambo.jpg" alt="image2" class="flower"></a>
                    <h1>Configureer Nu</h1>
                    <p>Kunt u toch niet wachten? <br> Configureer nu al uw droom auto via onze Online Showroom</p>
                </div>
            </div>
            <div class="container2">
                <h1 class="containertext1">Vind uw droom auto!</h1>
            </div>
            <div class="video-home">
                <video autoplay muted loop id="myVideo">
                    <source src="images/video.mp4" type="video/mp4">
                </video>
            </div>
        </main>
    </div>
    
    <?php include 'components/footer.php'; ?>



</body>

</html>
