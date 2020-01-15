<?php 
//HEADER
include('./components/header/header.php');
?>


<?php
// BREADCRUMB
$breadcrumb = array('Oasa.gr','Συχνές Ερωτήσεις');
$breadlinks = array('index.php','faq.php');
include('components\breadcrumbs\breadcrumb.php');
?>

<?php
include('./components/faq/faq.php');
?>

<?php 
//FOOTER
include('./components/footer/footer.php');
?>