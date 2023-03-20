<?php 
session_start();
require_once('../db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../style.css">

<head>
    <title>Home</title>
</head>

<body>
        <header>
            <div class="navbar">
                <a href="../homepage.php"><img src="../images/logo.png" class="logo"></a>
                <div class="navbar-menu">
                    <ul>
                        <li><a href="../homepage.php">Home</a></li>
                        <li><a href="../shoppagina.php">Assortiment</a></li>
                        <li><a href="../informatie.php">Informatie</a></li>
                        <li><a href="home.php">Jouw Profiel</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <main>
             <div class="container-login">
               <h1>Hallo, <?php echo ucfirst($_SESSION['voornaam']);?></h1>
                <br>
                <br>
                <h2>Dit ben jij:</h2>
                <br>
                <h3> Gebruikersnaam: <?php echo $_SESSION['gebruikersnaam'];?> <h3>
                <br>
                <h3> Naam: <?php echo $_SESSION['voornaam'];?> <h3>
                <br>
                <br>
                <br>
                <a class="hometext" href="../informatie.html">Hier vind je alle relevante informatie<a>
                <br>
                <br>
                <a class="hometext" href="">Pas hier je gegevens aan<a>
                <br>
                <br>
                <a class="hometext" href="../shoppagina.php">Bekijk onze selectie aan super cars<a>
                

        </div>

        <div class="bottom-container">
            <div class="row">
                <div class="col">
                    <a href="logout.php?logout=true" style="color:white" class="btn">Uitloggen</a>
                </div>
                <div class="col">
                    <a href="#" style="color:white" class="btn">Wachtwoord veranderen?</a>
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
