
<?php 
//HEADER
include('./components/header/header.php');
?>

<?php
// BREADCRUMB
$breadcrumb = array('Oasa.gr','Εισιτήρια','Αγορά');
$breadlinks = array('index.php','#','tickets.php');
include('components\breadcrumbs\breadcrumb.php');
?>

<?php 

//KANONIKO
if(isset($_SESSION['type']) &&($_SESSION['type']== 4 )){





}
//MEIWMENO
if(isset($_SESSION['type']) &&($_SESSION['type']==4)){





}

//DWREAN
if(isset($_SESSION['type']) && ($_SESSION['type']==4)){





}

//AMEA
if(isset($_SESSION['type']) && ($_SESSION['type']==4)){





}
?>
<?php
if(!isset($_SESSION['type']))
{
  echo('
<div class="login">
  <h2>ΑΓΟΡΑ/ΦΟΡΤΙΣΗ ΕΙΣΙΤΗΡΙΟΥ </h2>
  <form method="post">
    <p>Ποσότητα εισιτηρίων</p>
    <select name="num" id="num" type="text" title="Πόσα εισιτήρια θα πάρετε" placeholder="1" />
    <p>Είδος εισιτηρίων</p>
    <input name="password" id="password" type="password" title="password" placeholder="password" />
    <button type="submit" class="btn">Αγορά</button>
    <a class="forgot" href="login.php">Δικαιούστε μειωμένο κάντε σύνδεση?</a>
  </form>
</div>
');
}
?>

<?php 
//FOOTER
include('./components/footer/footer.php');
?>



