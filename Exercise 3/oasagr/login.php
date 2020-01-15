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
if(isset($_SESSION["type"]) && $_SESSION["type"] != ""){
  echo '<script>alert("Already logged in!");</script>';
  header("location: index.php");
  exit;
}


//db connector
require_once('scripts\db-connector.php');



if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  $bla = 0;
if($_POST['email'] === ""){$bla = 1 ; exit; }
if($_POST['password'] === ""){$bla = 1 ; exit; }



if($bla == 0){
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $count = mysqli_num_rows($result);
  
  if($count == 1) {
      $_SESSION['email']= $row['email'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['type'] = $row['type'];
      $_SESSION['last'] = $row['last'];
      echo('<script>alert('. $_SESSION['email'] .');</script>');
      header("location: index.php");
  }else {
     $error = "Your Credentials are invalid";
    echo('<script>alert('.$error.'</script>');
  }
}
}


?>













<div class="login">
  <h2>ΣΥΝΔΕΣΗ ΣΤΟΝ ΙΣΤΟΤΟΠΟ</h2>
  <form method="post">
    <p>Email</p>
    <input name="email" id="email" type="text" title="email" placeholder="Email" />
    <p>Κωδικός</p>
    <input name="password" id="password" type="password" title="password" placeholder="password" />
    <button type="submit" class="btn">Login</button>
    <a class="forgot" href="#">Ξεχάσατε τον Κωδικό σας?</a>
  </form>
</div>

<?php 
//FOOTER
include('./components/footer/footer.php');
?>