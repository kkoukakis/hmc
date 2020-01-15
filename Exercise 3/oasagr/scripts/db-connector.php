<?php
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '1234');
   define('DB_DATABASE', 'sdi1400289');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if($db === false){
      die('Error:' . mysqli_connect_error());
   }

//LIBRARY OF FUNCTIONS
   function checkEmail($email) {
      $find1 = strpos($email, '@');
      $find2 = strpos($email, '.');
      return ($find1 !== false && $find2 !== false && $find2 > $find1);
    }
?>