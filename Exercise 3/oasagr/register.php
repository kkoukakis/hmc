<?php 
//HEADER
include('./components/header/header.php');
?>


<?php
// breadcrumb
$breadcrumb = array('Oasa.gr','Εγγραφή');
$breadlinks = array('index.php','register.php');
include('components\breadcrumbs\breadcrumb.php');
?>


<!-- PAGE CONTENT -->
<div class="register">
  <h2>Εγγραφη στον Ιστότοπο</h2>
  <form>
    <p>Όνομα</p>
    <input id="firstname" type="text" title="Γράψτε το Όνομα σας." placeholder="Όνομα" />
    <p>Επίθετο</p>
    <input id="lastname" type="text" title="Γράψτε το Επίθετο σας." placeholder="Επίθετο" />
    <p>Τηλέφωνο</p>
    <input id="phone" type="text" title="Γράψτε το Τηλέφωνό σας." placeholder="2101234567" />
    <p>Email ~ Ηλεκτρονική Διεύθυνση</p>
    <input id="email" type="text" title="Γράψτε την Ηλεκτρονική Διεύθυνση σας." placeholder="example@example.com" />
    <p>Τύπος Εισιτηρίου</p>
    <select id="type" name="type" class="browser-default">
      <option value="" disabled selected >Τύπος Εισιτηρίου</option>
      <option value="1" >Κανονικό</option>
      <!-- alt="Για τους Κοινούς Επιβάτες, Τουρίστες" -->
      <option value="2" >Μειωμένο</option>
      <!-- alt="Για τους Φοιτητές" -->
      <option value="3" >Δωρεάν</option>    
      <!-- alt="Για τους Άνεργους, Αμέα" -->
    </select>
    <p>Κωδικός Πρόσβασης</p>
    <input id="password" type="password" title="Πληκρολογήστε τον κωδικό πρόσβασης που θέλετε να ορίσετε." placeholder="κωδικός" />
    <p>Επαλήθευση Κωδικού Πρόσβασης</p>
    <input id="rpassword" type="password" title="Ξαναγράψτε τον κωδικό που ορίσατε προηγουμένως." placeholder="επανάληψη κωδικού" />
    <button type="submit" class="btn a1">Εγγραφή</button>
    <a class="forgot" href="#">Ξεχάσατε τον Κωδικό σας?</a>
  </form>
</div>


<?php 
//FOOTER
include('./components/footer/footer.php');
?>