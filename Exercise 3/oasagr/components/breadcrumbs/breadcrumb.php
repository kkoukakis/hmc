<!-- DYNAMIC BREADCRUMB -->
<?php 
echo '<script> console.log(' . count($breadcrumb) . ')</script>';
// echo $breadlinks[0];
// echo $breadlinks[1];
$i = count($breadcrumb);

if($i > 1){
?> 
 <nav>
    <div class="nav-wrapper">
      <div class="col s12 b">
      <?php
         
         $j = 0;
         
         for($j;$j<$i;$j++){
          
           echo('<a href="'. $breadlinks[$j] .'" class=\"b\">' . $breadcrumb[$j] . '</a>');
         
          
         }
         
        
       ?>
      </div>
    </div>
  </nav>

<?php
}
?>
