<nav>
     <div class="nav-wrapper">
          <a href="index.php" class="brand-logo left">Oasa.gr</a>
     <ul id="nav-mobile" class="right">
     <li class="d">
          <div class="dropdownk"><button class="dropbtnk">Χάρτης</button>
          <div class="dropdown-contentk">
               <a href="index.php">Διαδρομμές</a>
               <a href="stops.php">Στάσεις</a>
               <a href="buses.php">Λεωφορεία</a>
          </div>
     </li>
     <li class="d">
          <div class="dropdownk"><button class="dropbtnk">Εισιτήρια</button>
          <div class="dropdown-contentk">
               <a href="tickets.php">Αγορά-Φόρτιση</a>
               <a href="prices.php">Τιμές</a>
               <a href="calc.php">Υπολογισμός</a>
          </div>
     </li>
     <?php ?>
     <li><a  href="news.php"       class="d">Νέα</a></li>
     <li><a  href="contact.php"    class="d">Επικοινωνία</a></li>
     <li><a  href="faq.php"        class="d">Συχνές Ερωτήσεις</a></li>
     <li><a href="#"               class="d"> <img src="components\navbar\English-Language-Flag-1-icon.png" title="English?" height="17" width="17" ></a></li>
     <?php 
     
     if(isset($_SESSION['type'])){
          
          echo("
          <li><a href=\"favorites.php\" class=\"d\"> 
          <img class=\"img-invert\" src=\"components\\navbar\heart.png\" title=\"favorites\" height=\"20\" width=\"20\" style=\"padding-top: 8px;\"> Αγαπημένα </a></li>
          <li><a href=\"editprofile.php\"    class=\"d\">Προφίλ</a></li>
          <li><a href=\"scripts\logout.php\"    class=\"d\">Αποσύνδεση</a></li>");
     }
     else{
          echo("<li><a href=\"login.php\"       class=\"d\"> <img class=\"img-invert\" src=\"components\\navbar\login.png\" title=\"login\" height=\"20\" width=\"20\" style=\"padding-top: 8px;\"> Σύνδεση </a></li>
          <li><a href=\"register.php\"    class=\"d\">Εγγραφή</a></li>");
     }
     ?>
     
     </ul>
     </div>
</nav>
