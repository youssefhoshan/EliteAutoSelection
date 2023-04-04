<?php 
session_start();
require_once('db_connect.php');
?>

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
    <main class="thankspar-afspraak">
    <h1 class="h1-afspraak">Maak uw afspraak</h1>
        <form class="form-afspraak" method="post" action="process.php">
        <label for="name">Naam:</label>
        <input placeholder='Uw naam...' type="text" name="name" id="name" required>
        <label for="email">E-mailadres:</label>
        <input placeholder='Uw E-mailadres...' type="email" name="email" id="email" required>
        <label for="phone">Telefoonnummer:</label>
        <input placeholder='Uw Telefoonnummer...' type="tel" name="phone" id="phone" required>
        <label for="date">Datum:</label>
        <input type="date" name="date" id="date" required>
        <input type="submit" value="Maak afspraak">
        </form>
    </main>
</div>
    <?php include 'components/footer.php'; ?>
    
    </body>
</html>
