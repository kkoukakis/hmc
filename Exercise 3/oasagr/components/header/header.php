<!DOCTYPE html>
<html >
<head>

  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Transportation">
	<meta name="author" content="Oasa.gr">
  <title>Oasa.gr</title>
  
  
      <link rel="stylesheet" href="styles\materialize.css">
      <link rel="stylesheet" href="styles\styles.css">
      <link rel="stylesheet" href="styles\leaflet.css">
      <script src="styles\leaflet.js"></script>
      <script src="styles\jquery-3.4.1.js"></script>
      <script src="styles\popper.min.js"></script>
      <script src="styles\bootstrap.min.js"></script>
      <script src="styles\materialize.min.js">  </script>    
</head>

<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
    //user connected to the site
} ?>



<?php 

//NAVBAR
include('components\navbar\navbar.php');

?>
