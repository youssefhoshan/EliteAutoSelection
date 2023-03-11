<?php
session_start();
require_once('../db_connect.php');

if (isset($_POST['submit'])) {
	if (isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$sql = "select * from klanten where email = :email ";
			$handle = $pdo->prepare($sql);
			$params = ['email' => $email];
			$handle->execute($params);
			if ($handle->rowCount() > 0) {
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				if (password_verify($password, $getRow['wachtwoord'])) {
					unset($getRow['wachtwoord']);
					$_SESSION = $getRow;
					header('location:home.php');
					exit();
				} else {
					$errors[] = "Wrong Email or Password";
				}
			} else {
				$errors[] = "Wrong Email or Password";
			}
		} else {
			$errors[] = "Email address is not valid";	
		}
	} else {
		$errors[] = "Email and Password are required";	
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../style.css">

<head>
    <title>Login</title>
</head>

<body>
<header>
            <div class="navbar">
                <a href="../homepage.html"><img src="../images/logo.png" class="logo"></a>
                <div class="navbar-menu">
                    <ul>
                        <li><a href="../homepage.html">Home</a></li>
                        <li><a href="../shoppagina.html">Assortiment</a></li>
                        <li><a href="../informatie.html">Informatie</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </header>
    <main>
<div class="container-login">
	<div class="row h-100 mt-5 justify-content-center align-items-center">
		<div class="col-md-5 mt-5 pt-2 pb-5 align-self-center border bg-light">
			<h1 class="mx-auto w-25" >Login</h1>
			<?php 
            if (isset($errors) && count($errors) > 0) {
                foreach ($errors as $error_msg) {
                    echo '<div class="error">' . $error_msg . '</div>';
                }
            }
			?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" placeholder="Enter Email" class="form-control">
				</div>
				<div class="form-group">
				<label for="email">Password:</label>
					<input type="password" name="password" placeholder="Enter Password" class="form-control">
				</div>

				<button type="submit" name="submit" class="button-login">Submit</button>
				
				<a href="register.php" class="btn">Register</a>
			</form>
		</div>
	</div>
</div>

        <div class="bottom-container">
            <div class="row">
                <div class="col">
                    <a href="register.php" style="color:white" class="btn">Account aanmaken</a>
                </div>
                <div class="col">
                    <a href="#" style="color:white" class="btn">Wachtwoord vergeten?</a>
                </div>
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
