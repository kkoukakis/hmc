
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

$price = 1.40;
//KANONIKO
if(isset($_SESSION['type']) &&($_SESSION['type']== 1 )){


$price = 1.40;


}
//MEIWMENO
if(isset($_SESSION['type']) &&($_SESSION['type']==2)){



  $price = 0.6;

}

//DWREAN
if(isset($_SESSION['type']) && ($_SESSION['type']==3)){



  $price = 0;

}

//AMEA
if(isset($_SESSION['type']) && ($_SESSION['type']==4)){


  $price = 0.6;


}
?>
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(!isset($_POST['tick'])){
 echo('<script>alert(Αγοράσατε '. $_POST['num'] . ' εισιτηριο(α) των: "'. $_POST['num'] * $price . 'Ευρώ");</script>');
  }else{
    
    echo('<script>alert("Φορτίσατε το εισιτηριο σας με '. $_POST['num'] . ' εισιτήρια των '. $_POST['time'] .' και συνολικά κόστισε: '. $_POST['num'] * $price .'Ευρώ");</script>');
  }

}




if(!isset($_SESSION['type']))
{
  echo('
<div class="login">
  <h2>ΑΓΟΡΑ/ΦΟΡΤΙΣΗ ΕΙΣΙΤΗΡΙΟΥ </h2>
  <form method="post">
    <p>Ποσότητα εισιτηρίων</p>
    <select name="num" id="num" name="num" class="browser-default">
    <option value="1"  title="Για τους Κοινούς Επιβάτες, Τουρίστες" >1</option>
    <option value="2" title="Για τους Φοιτητές" >2</option>
    <option value="3" title="Για τους Άνεργους,Aμέα" >5</option>  
    <option value="3" title="Για τους Άνεργους,Aμέα" >10</option>  
    </select>
    <p>Είδος εισιτηρίων</p>
    <select name="time" id="time" name="time" class="browser-default">
    <option value="90λεπτων"  title="90λεπτα της ώρας" >90λεπτων</option>
    </select>
    <p>Αριθμός Κάρτας</p>
    <input name="card" id="card" type="text" title="password" placeholder="" />
    <p>Αριθμός Εισιτηρίου</p>
    <input name="tick" id="tick" type="text" title="tick" placeholder="Αριθμός Εισιτηρίου" />
    <button type="submit" class="btn">Αγορά / Φορτιση</button>
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



