<?php
    	include('conn.php');
    
    	$voornaam=$_POST['voornaam'];
    	$achternaam=$_POST['achternaam'];
    	$email=$_POST['email'];
    	$adres=$_POST['adres'];
    	$postcode=$_POST['postcode'];
    	$woonplaats=$_POST['woonplaats'];
    	$geboortedatum=$_POST['geboortedatum'];
    	$gebruikersnaam=$_POST['gebruikersnaam'];
    
    	mysqli_query($conn,"insert into `klant` (voornaam,achternaam,email,adres,postcode,woonplaats,geboortedatum,gebruikersnaam) values ('$voornaam','$achternaam','$email','$adres','$postcode','$woonplaats','$geboortedatum','$gebruikersnaam')");
    	header('location:klanten.php');
    
    ?>