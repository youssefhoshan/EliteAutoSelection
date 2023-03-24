<?php
    	include('conn.php');
    	$id=$_GET['id'];
    
    	$voornaam=$_POST['voornaam'];
    	$achternaam=$_POST['achternaam'];
    	$email=$_POST['email'];
    	$adres=$_POST['adres'];
    	$postcode=$_POST['postcode'];
    	$woonplaats=$_POST['woonplaats'];
    	$geboortedatum=$_POST['geboortedatum'];
    	$gebruikersnaam=$_POST['gebruikersnaam'];
    
    	mysqli_query($conn,"update `klant` set voornaam='$voornaam', achternaam='$achternaam', email='$email', adres='$adres', postcode='$postcode', woonplaats='$woonplaats', geboortedatum='$geboortedatum', gebruikersnaam='$gebruikersnaam' where id='$id'");
    	header('location:klanten.php');
    ?>