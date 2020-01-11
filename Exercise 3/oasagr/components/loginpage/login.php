<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="main.css" rel="stylesheet" />
<title> Registration </title>
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: center;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Login')">Login</button>
  <button class="tablinks" onclick="openCity(event, 'Register')">Register</button>
</div>

<div id="Login" class="tabcontent">
  <center>
	<p>
		Email:<input type="text" name="email">
	</p>
	<p>
		Κωδικός:<input type="text" name="password">
	</p>
	<button type="button">Είσοδος</button> 
	</center>
</div>

<div id="Register" class="tabcontent">
  <center>
	<p>
		Όνομα: 
		<input type="text" name="firstname">
	</p>
	
	<p>
		Επίθετο:<input type="text" name="lastname">
	</p>
	<p>
		Email:<input type="text" name="email">
	</p>
	<p>
		Τηλέφωνο:<input type="text" name="phonenumber">
	</p>
	<p>
		Τύπος Εισιτηρίου:<div class="input-field">
			<div class="input-select">
                <select data-trigger="" name="choices-single-defaul">
                  <option placeholder="" value="">Κανονικό</option>
                  <option>Κανονικό</option>
                  <option>Μειωμένο</option>
                </select>
            </div>
        </div>
	</p>
	
	<p>
		Κωδικός:<input type="text" name="password">
	</p>
	<p>
		Επαλήθευση Κωδικού:<input type="text" name="password">
	</p>
	<button type="button">Εγγραφή</button> 
	</center>
</div>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>