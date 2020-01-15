
<?php 
//HEADER
include('./components/header/header.php');
?>

<?php
// BREADCRUMB
$breadcrumb = array('Oasa.gr','Εισιτήρια','Τιμές');
$breadlinks = array('index.php','#','prices.php');
include('components\breadcrumbs\breadcrumb.php');
?>

<?php 

//KANONIKO
if(isset($_SESSION['type']) &&($_SESSION['type']== '1' )){

echo("
  <table style=\"background-color: whitesmoke;\">
  <thead>
    <tr>
        <th>Διάρκεια</th>
        <th>Τιμή</th>
        <th>Ειδος Εισιτηρίου</th>
        <th>Τύπος Επιβάτη</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>90 λεπτά</td>
      <td>1,40Ε</td>
      <td>Λεωφορεία, Τρολλεϋ, Τραμ, Μετρό</td>
      <td>Κανονικό</td>
      
    </tr>
    <tr>
      <td>Ημερήσιο</td>
      <td>4,50Ε</td>
      <td>Λεωφορεία, Τρολλεϋ, Τραμ, Μετρό</td>
      <td>Κανονικό</td>
    </tr>
    <tr>
      <td>5 Ημερών</td>
      <td>9Ε</td>
      <td>Λεωφορεία, Τρολλεϋ, Τραμ, Μετρό</td>
      <td>Κανονικό</td>
    </tr>
    <tr>
      <td>3 Ημερών Τουριστικό</td>
      <td>22Ε</td>
      <td>Όλα τα μέσα και 1 διαδρομμή από & πρός Αεροδρόμιο</td>
      <td>Κανονικό</td>
    </tr>
  </tbody>
</table>");


}
//MEIWMENO
if(isset($_SESSION['type']) &&($_SESSION['type']=='2')){
echo("
  <table style=\"background-color: whitesmoke;\">
  <thead>
    <tr>
        <th>Διάρκεια</th>
        <th>Τιμή</th>
        <th>Ειδος Εισιτηρίου</th>
        <th>Τύπος Επιβάτη</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>90 λεπτά</td>
      <td>0,60Ε</td>
      <td>Λεωφορεία, Τρολλεϋ, Τραμ, Μετρό</td>
      <td>Μειωμένο</td>
    </tr>
  </tbody>
</table>");



}

//DWREAN
if(isset($_SESSION['type']) && ($_SESSION['type']=='3')){


  echo("<h3>Γενικός τιμοκατάλογος</h3>");
  echo("<img class=\"img-invert\" style=\"margin-left: 25%;\" src=\"images\pricetable.png\"></img>");


}

//AMEA
if(isset($_SESSION['type']) && ($_SESSION['type']=='4')){

  echo("<h3>Γενικός τιμοκατάλογος</h3>");
echo("<img class=\"img-invert\" style=\"margin-left: 25%;\" src=\"images\pricetable.png\"></img>");



}
?>


<?php if(isset($_SESSION['type'])===false)
echo("<h3>Γενικός τιμοκατάλογος</h3>");
echo("<img class=\"img-invert\" style=\"margin-left: 25%;\" src=\"images\pricetable.png\"></img>")?>
<?php 
//FOOTER
include('./components/footer/footer.php');
?>



