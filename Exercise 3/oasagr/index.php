<?php 

//HEADER
include('./components/header/header.php');
?>

<table style="background-color: whitesmoke;">
  <thead>
    <tr>
        <th>Από</th>
        <th>Πρός</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td><select>123<option>1</option><option>2</option></select></td>
      <td><select><option>1</option><option>2</option></select></td></tr>
  </tbody>


</table>



<div id="map" style="width: 100%; height: 800px;"></div>

<script>
    var map = L.map('map',{
    center: [37.859945, 23.754214],
    zoom: 14
    });

<?php //ADD MARKERS ?>
    L.marker([37.859945, 23.754214]).bindTooltip("Από", 
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