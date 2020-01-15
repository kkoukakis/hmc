<?php 

//HEADER
include('./components/header/header.php');
?>

<?php
// BREADCRUMB
$breadcrumb = array('Oasa.gr','Χάρτης','Διαδρομές');
$breadlinks = array('index.php','#','index.php');
include('components\breadcrumbs\breadcrumb.php');
?>

<table style="background-color: whitesmoke; text-align:center;">
  <thead>
    <tr>
        <th>Από ξεκινάτε:</th>
        <th>Πρός τα που θέλετε να πάτε:</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td><input type="text" id="autocomplete-input" class="autocomplete">
          <label for="autocomplete-input">Πλατεία Γλυφάδας</label></td>
      
          <td><input type="text" id="autocomplete-input" class="autocomplete">
          <label for="autocomplete-input">Λεωφόρος Βουλιαγμένης</label></td>
          
    </tr>
  </tbody>


</table>



<div id="map" style="width: 100%; height: 600px; top: 90px;"></div>

<script>

 $(document).ready(function(){
    $('input.autocomplete').autocomplete({
      data: {
        "Πλατεία Γλυφάδας": "790",
        "Λεωφόρος Βουλιαγμένης": "154,790"
      },
    });
  });

    var map = L.map('map',{
    center: [37.859945, 23.754214],
    zoom: 14
    });

<?php //ADD MARKERS ?>
    L.marker([37.859945, 23.754214]).bindTooltip("<a href=\"#\">Από</a>", 
    {
        permanent: true, 
        direction: 'bottom',
        
        
    }).addTo(map);
    L.marker([37.848248, 23.768891]).bindTooltip("Πρός", 
    {
        permanent: true, 
        direction: 'bottom'
    }).addTo(map);
        
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
</script>

<?php





//MAP


//TABS

?>

<?php 
//FOOTER
include('./components/footer/footer.php');
?>