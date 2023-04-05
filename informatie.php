<?php
session_start();
require_once('db_connect.php');
?>
<html>


<head>
    <title>FAQ</title>
    <link rel="stylesheet" href="style.css">
    <script src="./js/script.js" defer></script>
    <script src="./js/scroll.js" defer></script>
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
        <main>
            <div class="body-container">
                <div class="content">
                    <h1 class="typing-header">Veel Gestelde Vragen</h1>
                    <p>Bekijk hieronder de veelgestelde vragen.<br> Mocht het antwoord op uw vraag er niet tussen zitten
                        stuur ons dan gerust een mailtje op <a href="Elite@EAC.com"
                            style="color: lightblue;">Elite@EAC.com</a> <br>
                    </p>
                    <div>

                        <a class="buybutton" href="#footer" onclick="scrollToFooter()">
                            <button type="button">
                                <span></span>MEER INFO
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="containertest" id="naardit">
                <div class="sectiontest1">
                    <a href="informatie.php"><img src="images/winkel.jpg" alt="image1" class="winkel"></a>
                    <br>
                    <h1>Kalverstraat 74</h1> <br>
                    <p>Op de kalverstraat kunt u onze showroom bezoeken en uw auto zelf ontwerpen!</p>
                </div>
                <div class="sectiontest2">
                    <a href="shoppagina.php"> <img src="images/lambo.jpg" alt="image2" class="flower"></a>
                    <h1>Configureer Nu</h1>
                    <p>Kunt u toch niet wachten? Configureer nu al uw droom auto via onze Online Showroom</p>
                </div>
            </div>
        </main>
    </div>
    
    <?php include 'components/footer.php'; ?>

</body>

</html>
