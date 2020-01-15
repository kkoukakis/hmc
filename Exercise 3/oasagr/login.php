<?php 
//HEADER
include('./components/header/header.php');
?>

<?php
// BREADCRUMB
$breadcrumb = array('Oasa.gr','Σύνδεση');
$breadlinks = array('index.php','login.php');
include('components\breadcrumbs\breadcrumb.php');
?>


<?php

//already logged in?
if(isset($_SESSION["user"]) && $_SESSION["user"] != ""){
  echo '<script>alert("Already logged in!");</script>';
  header("location: index.php");
  exit;
}


//db connector
require_once('scripts\db-connector.php');

$email = "";
$password = "";

?>













<div class="login">
  <h2>ΣΥΝΔΕΣΗ ΣΤΟΝ ΙΣΤΟΤΟΠΟ</h2>
  <form method="post">
    <p>Email</p>
    <input id="email" type="text" title="email" placeholder="Email" />
    <p>Κωδικός</p>
    <input id="password" type="password" title="password" placeholder="password" />
    <button type="submit" class="btn">Login</button>
    <a class="forgot" href="#">Ξεχάσατε τον Κωδικό σας?</a>
  </form>
</div>

<?php 
//FOOTER
include('./components/footer/footer.php');
?>