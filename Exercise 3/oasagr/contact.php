<?php 
//HEADER
include('./components/header/header.php');
?>

<?php
// BREADCRUMB
$breadcrumb = array('Oasa.gr','Επικοινωνία');
$breadlinks = array('index.php','contact.php');
include('components\breadcrumbs\breadcrumb.php');
?>

<?php
include('./components/contact/contact.php');
?>

<?php 
//FOOTER
include('./components/footer/footer.php');
?>