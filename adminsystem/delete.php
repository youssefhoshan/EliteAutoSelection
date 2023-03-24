<?php

    	$id = $_GET['id'];
    	include('./conn.php');
    	mysqli_query($conn, "delete from `klant` Where id='$id' ");
    	header('location:klanten.php');
?>
