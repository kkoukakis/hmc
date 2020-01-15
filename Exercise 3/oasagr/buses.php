<?php 

//HEADER
include('./components/header/header.php');
?>


<?php
// BREADCRUMB
$breadcrumb = array('Oasa.gr','Λεωφορεία');
$breadlinks = array('index.php','buses.php');
include('components\breadcrumbs\breadcrumb.php');
?>

<table style="background-color: whitesmoke;">
  <thead>
    <tr>
        <th>Λεωφορεια</th>
        <th>Αφετηρία - Τερματισμός</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td><a>790</a></td>
      <td>Πλατεία γλυφάδας  -  Σταθμός Μεταξουργίου</td>
    </tr>
  </tbody>

  <tbody>
    <tr>
      <td><a>154</a></td>
      <td>Ιπποκράτους(στη Πριγκιπος Πέτρου) - Πλατεία Γλυφάδας</td>
    </tr>
  </tbody>

  <tbody>
    <tr>
      <td><a>A1</a></td>
      <td>Ανδρέα Παππανδρέου(στη λεωφ. βουλιαγμένης)   -  Αλιμου(Ποσειδώνος)</td>
    </tr>
  </tbody>
</table>



<div id="map" style="width: 100%; height: 620px"></div>

<script>
  var map = L.map('map',{
    center: [37.859945, 23.754214],
    zoom: 14
    });

<?php //ADD MARKERS ?>
    L.marker([37.859945, 23.754214]).bindTooltip("790", 
    {
        permanent: true, 
        direction: 'bottom'
    }).addTo(map);
    L.marker([37.848248, 23.768891]).bindTooltip("Α1", 
    {
        permanent: true, 
        direction: 'bottom'
    }).addTo(map);
    L.marker([37.853495, 23.760672]).bindTooltip("154", 
    {
        permanent: true, 
        direction: 'bottom'
    }).addTo(map);
    
    
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

</script>

<?php