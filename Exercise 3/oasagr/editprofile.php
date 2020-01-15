<?php 
//==================
// HEADER / NAVBAR
//==================
include('./components/header/header.php');
?>


<?php
//==================
//   breadcrumb
//==================
$breadcrumb = array('Oasa.gr','Εγγραφή');
$breadlinks = array('index.php','register.php');
include('components\breadcrumbs\breadcrumb.php');
?>

<?php 


if(!isset($_SESSION['type'])){
	header('location: index.php');
}


//==================
//EDIT PROCEDURE
//==================
require('scripts\db-connector.php');

//after submit
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // email and password sent from form 
  $error = 0;

  
  if(rtrim($_POST['phone']," ") === ""){echo('<script>alert(\''. 'Σφάλμα: Το τηλέφωνο είναι κενό ' .'\')</script>'); $error=1;}
  if(!is_numeric($_POST['phone'])===true){
    echo('<script>alert(\''. 'Σφάλμα: Το τηλέφωνο είναι λανθασμένο. ' .'\')</script>'); $error=1;
  }
  if($_POST['password']  === ""){echo('<script>alert(\''. 'Σφάλμα: Το πεδίο κωδικός είναι κενό ' .'\')</script>'); $error=1;}
  if($_POST['rpassword']  === ""){echo('<script>alert(\''. 'Σφάλμα: Το πεδίο επαλήθευση κωδικού είναι κενό ' .'\')</script>'); $error=1;}
  if($_POST['password']  != $_POST['rpassword'] ){echo('<script>alert(\''. 'Σφάλμα: Το πεδίο επαλήθευση κωδικού είναι διαφορετικό με το κωδικό που δώσατε. ' .'\')</script>'); $error=1;}
  
  //--------------//

 if($error == 0){

  $password = mysqli_real_escape_string($db,$_POST['password']);
  $type = mysqli_real_escape_string($db,$_POST['type']); 
  $phone = mysqli_real_escape_string($db,$_POST['phone']); 
 


  // $sql = "SELECT * FROM users WHERE email = '$email'"; 
  // $result = mysqli_query($db,$sql);
  // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  // $count = mysqli_num_rows($result);
  // if($result->mysqli_num_rows){echo('<script>alert(\''. 'Σφάλμα: Υπάρχει ήδη χρήστης με αυτό το email. ' .'\')</script>'); $error=1;}




  if($error== 0){
  $sql = "UPDATE users SET password =". $password .", phone=".$phone.", type=".$type." WHERE email=".$_SESSION['email'];
  $result = mysqli_query($db,$sql);
  echo $result;

  if($result) {
     $_SESSION['type'] = $type;
     echo('<script>alert(\"Αλλαγές ολοκληρώθηκαν\");</script>');
     header("location: index.php");
  }else {
     $error = "Something went wrong...";
     echo('<script>alert('.$error.');</script>');
     header("location: error.php");
  }
  }
}else{
  
  echo('<script>alert(\'Δοκιμάστε ξανά.\');</script>');
}
}

?>


<!-- PAGE CONTENT -->
<div class="register">
  <h2>Αλλαγές στο προφιλ σας</h2>
  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <p>Τηλέφωνο</p>
    <input name="phone" id="phone" type="text" title="Γράψτε το Τηλέφωνό σας." placeholder="2101234567" />
    <p>Τύπος Εισιτηρίου</p>
    <select name="type" id="type" name="type" class="browser-default">
      <option value="1"  title="Για τους Κοινούς Επιβάτες, Τουρίστες" >Κανονικό</option>
      <option value="2" title="Για τους Φοιτητές" >Μειωμένο</option>
      <option value="3" title="Για τους Άνεργους,Aμέα" >Δωρεάν</option>  
    </select>
    <p>Κωδικός Πρόσβασης</p>
    <input name="password" id="password" type="password" title="Πληκρολογήστε τον κωδικό πρόσβασης που θέλετε να ορίσετε." placeholder="κωδικός" />
    <p>Επαλήθευση Κωδικού Πρόσβασης</p>
    <input name="rpassword" id="rpassword" type="password" title="Ξαναγράψτε τον κωδικό που ορίσατε προηγουμένως." placeholder="επανάληψη κωδικού" />
    <button type="submit" class="btn">Αλλαγή</button>
  </form>
</div>


<?php 
//FOOTER
include('./components/footer/footer.php');
?>