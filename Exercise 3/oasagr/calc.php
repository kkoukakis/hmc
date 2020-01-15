
<?php 
//HEADER
include('./components/header/header.php');
?>

<?php
// BREADCRUMB
$breadcrumb = array('Oasa.gr','Εισιτήρια','Υπολογισμός');
$breadlinks = array('index.php','#','calc.php');
include('components\breadcrumbs\breadcrumb.php');
?>

<?php 


if($_SERVER["REQUEST_METHOD"] == "POST") {


//KANONIKO
if(isset($_SESSION['type']) &&($_SESSION['type']== "1" )){
 $numoftickets = 1;
  $total = $numoftickets * 1.40;
  echo("<script>alert('Συνολικά:'+$total+'Euro');</script>");


}
//MEIWMENO
if(isset($_SESSION['type']) &&($_SESSION['type']=="2")){

  $numoftickets = 1;
  $total = $numoftickets * 0.60;
  echo("<script>alert('Συνολικά:'+$total+'Euro');</script>");




}

//DWREAN
if(isset($_SESSION['type']) && ($_SESSION['type']=="3")){

  $numoftickets = 1;
  $total = $numoftickets * 0;
  echo("<script>alert('Συνολικά:'+$total+'Euro');</script>");




}

//AMEA
if(isset($_SESSION['type']) && ($_SESSION['type']=="4")){

  $numoftickets = 1;
  $total = $numoftickets * 0.60;
  echo("<script>alert('Συνολικά:'+$total+'Euro');</script>");




}

//xwris logariasmo
if(!isset($_SESSION['type'])){

  //KANONIKO
  if($_POST['type']==="1"){
  $numoftickets = 1;
   $total = $numoftickets * 1.40;
 
 
 }
 //MEIWMENO
 if($_POST['type']==="2"){
 
   $numoftickets = 1;
   $total = $numoftickets * 0.60;
 
 
 
 
 }
 
 //DWREAN
 if($_POST['type']==="3"){
 
   $numoftickets = 1;
   $total = $numoftickets * 0;
 
 
 
 
 }
 
 //AMEA
 if($_POST['type']==="4"){
 
   $numoftickets = 1;
   $total = $numoftickets * 0.60;

 
 }
  $numoftickets = 1;
  echo("<script>alert('Συνολικά:'+$total+'Euro');</script>");




}
}
?>

<div class="register">
  <h2>Yπολογισμός Εισιτηρίου</h2>
  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <p>Από:</p>
    <select name="from" id="from" name="from" class="browser-default">
      <option value="1" title="Για τους Κοινούς Επιβάτες, Τουρίστες" >Παναγίτσα, Καισαριανή</option>
      <option value="2" title="Αστυνομία" >Αστυνομία, Φορμίωνος</option>
    </select><p>Πρός:</p>
    <select name="to" id="to" name="to" class="browser-default">
      <option value="1" title="Ευαγγελισμος" >Ευαγγελισμος</option>
      <option value="2" title="Μοναστηράκι" >Μοναστηράκι</option>
      <option value="3" title="Ελληνικό" >Ελληνικό</option>  
      <option value="4" title="Ανθούπολη" >Ανθούπολη</option>    
    </select> <p>Τύπος Εισιτηρίου</p>
    <?php if(!isset($_SESSION['type'])){
      echo('
    <select name="type" id="type" name="type" class="browser-default">
      <option value="1" title="Για τους Κοινούς Επιβάτες, Τουρίστες" >Κανονικό</option>
      <option value="2" title="Για τους Φοιτητές" >Μειωμένο</option>
      <option value="3" title="Για τους Άνεργους" >Δωρεάν</option>  
      <option value="4" title="Για τους ΑΜΕΑ" >Αμέα</option>    
    </select>');
    }?>
    <button type="submit" class="btn">Υπολογισμός</button>
    <a class="forgot" href="#">Βοήθεια?</a>
  </form>
</div>

<?php 
//FOOTER
include('./components/footer/footer.php');
?>



