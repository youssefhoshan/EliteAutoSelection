<?php
    	include('conn.php');
    	$id=$_GET['id'];
    	$query=mysqli_query($conn,"select * from `klant` ");
    	$row=mysqli_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Basic MySQLi Commands</title>
    </head>
    <body>
    	<h2>Edit</h2>
    	<form method="POST" action="update.php?id=<?php echo $id; ?>">
    		<label>voornaam:</label><input type="text" value="<?php echo $row['voornaam']; ?>" name="voornaam"><br>
    		<label>achternaam:</label><input type="text" value="<?php echo $row['achternaam']; ?>" name="achternaam"><br>
			<label>email:</label><input type="text" value="<?php echo $row['email']; ?>" name="email"><br>
    		<label>adres:</label><input type="text" value="<?php echo $row['adres']; ?>" name="adres"><br>
    		<label>postcode:</label><input type="text" value="<?php echo $row['postcode']; ?>" name="postcode"><br>
    		<label>woonplaats:</label><input type="text" value="<?php echo $row['woonplaats']; ?>" name="woonplaats"><br>
    		<label>geboortedatum:</label><input type="text" value="<?php echo $row['geboortedatum']; ?>" name="geboortedatum"><br>
    		<label>gebruikersnaam:</label><input type="text" value="<?php echo $row['gebruikersnaam']; ?>" name="gebruikersnaam"><br>

    		<input type="submit" name="submit">
    		<a href="klanten.php">Back</a>
    	</form>
    </body>
    </html>