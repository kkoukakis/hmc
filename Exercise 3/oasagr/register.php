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



//==================
//REGISTER PROCEDURE
//==================
require('scripts\db-connector.php');

//after submit
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // email and password sent from form 
  $error = 0;

  //checking input//
  if(rtrim($_POST['name'] ," ") === ""){echo('<script>alert(\''. 'Σφάλμα: Το όνομα είναι κενό ' .'\')</script>'); $error=1;}
  if(rtrim($_POST['last'] ," ") === ""){echo('<script>alert(\''. 'Σφάλμα: Το επίθετο είναι κενό ' .'\')</script>'); $error=1;}
  if(rtrim($_POST['email']," ") ===""){echo('<script>alert(\''. 'Σφάλμα: Το email ειναι κενό ' .'\')</script>'); $error=1;}
  if ( !checkEmail($_POST['email']) ) {echo('<script>alert(\''. 'Σφάλμα: Λανθασμένο email. ' .'\')</script>'); $error=1; }
  
  if(rtrim($_POST['phone']," ") === ""){echo('<script>alert(\''. 'Σφάλμα: Το τηλέφωνο είναι κενό ' .'\')</script>'); $error=1;}
  if(!is_numeric($_POST['phone'])===true){
    echo('<script>alert(\''. 'Σφάλμα: Το τηλέφωνο είναι λανθασμένο. ' .'\')</script>'); $error=1;
  }
  if($_POST['password']  === ""){echo('<script>alert(\''. 'Σφάλμα: Το πεδίο κωδικός είναι κενό ' .'\')</script>'); $error=1;}
  if($_POST['rpassword']  === ""){echo('<script>alert(\''. 'Σφάλμα: Το πεδίο επαλήθευση κωδικού είναι κενό ' .'\')</script>'); $error=1;}
  if($_POST['password']  != $_POST['rpassword'] ){echo('<script>alert(\''. 'Σφάλμα: Το πεδίο επαλήθευση κωδικού είναι διαφορετικό με το κωδικό που δώσατε. ' .'\')</script>'); $error=1;}
  
  //--------------//

 if($error == 0){

  $name = mysqli_real_escape_string($db,$_POST['name']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  $email = mysqli_real_escape_string($db,$_POST['email']); 
  $type = mysqli_real_escape_string($db,$_POST['type']); 
  $phone = mysqli_real_escape_string($db,$_POST['phone']); 
  $last = mysqli_real_escape_string($db,$_POST['last']); 
 


  // $sql = "SELECT * FROM users WHERE email = '$email'"; 
  // $result = mysqli_query($db,$sql);
  // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  // $count = mysqli_num_rows($result);
  // if($result->mysqli_num_rows){echo('<script>alert(\''. 'Σφάλμα: Υπάρχει ήδη χρήστης με αυτό το email. ' .'\')</script>'); $error=1;}




  if($error== 0){
  $sql = "INSERT INTO users VALUES ('$email','$password','$type','$name','$last', '$phone',1)";
  $result = mysqli_query($db,$sql);
  echo $result;

  if($result) {
     $_SESSION['first'] = $name;
     $_SESSION['email'] = $email;
     $_SESSION['type'] = $type;
     $_SESSION['name'] = $last;
     echo('<script>alert(\"Welcome\");</script>');
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
  <h2>Εγγραφη στον Ιστότοπο</h2>
  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <p>Όνομα</p>
    <input name="name" id="name" type="text" title="Γράψτε το Όνομα σας." placeholder="Όνομα" />
    <p>Επίθετο</p>
    <input name="last" id="last" type="text" title="Γράψτε το Επίθετο σας." placeholder="Επίθετο" />
    <p>Τηλέφωνο</p>
    <input name="phone" id="phone" type="text" title="Γράψτε το Τηλέφωνό σας." placeholder="2101234567" />
    <p>Email ~ Ηλεκτρονική Διεύθυνση</p>
    <input name="email" id="email" type="text" title="Γράψτε την Ηλεκτρονική Διεύθυνση σας." placeholder="example@example.com" />
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
    <button type="submit" class="btn">Εγγραφή</button>
    <a class="forgot" href="login.php">Έχετε ήδη λογαριασμό?</a>
  </form>
</div>


<?php 
//FOOTER
include('./components/footer/footer.php');
?>