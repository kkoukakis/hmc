<?php 
//HEADER
include('./components/header/header.php');
?>

<div class="login">
  <h2>Login to your account</h2>
  <form>
    <p>Email</p>
    <input id="email" type="text" title="email" placeholder="Email" />
    <p>Κωδικός</p>
    <input id="password" type="password" title="password" placeholder="password" />
    <button type="submit" class="btn">Login</button>
    <a class="forgot" href="#">Ξεχάσατε τον Κωδικό σας?</a>
  </form>
</div><!--end log form -->

<?php 
//FOOTER
include('./components/footer/footer.php');
?>