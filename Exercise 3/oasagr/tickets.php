
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
<table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Item Name</th>
              <th>Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>

<?php 
//FOOTER
include('./components/footer/footer.php');
?>



