<?php
	require '../controller/c_log.php';
?>
<div class = "Header-View-Label" id = 't'>Search For Clients</div>
<div class = "Real-View" id = "slide">
<form action="#" method="post" class="demoForm" id="demoForm">
<strong>Choose Search Type:</strong><br /><br>

<select name="searchtype" id='sc'>
<option value="first_name">First Name</option>
<option value="last_name">Sur Name</option>
<option value="number">Phone Number</option>
<option value="address">Address</option>
<option value="email">Email</option>
<option value="state">State</option>
<option value="Country">Country</option>
</select>
<br /><br>
<br>
<input name="searchterm" type="text" placeholder = "Search" value="" id ='sn' size='50'>
<br><br><br>
<input type="submit" value="Search" id="SSS" onclick = 'event.preventDefault(); get();'>
<br>
</form>
</div>
<!--
<br><br>
<form action="email.php" method="post">
<input type="submit" value="Get All Emails" name="getE">
</form>
<br><br>
<form action="all.php" method="post">
  <input id="demoPost" type="button" name="submit" value="Submit" />
</form>
<br><br>
</div>-->

