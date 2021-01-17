<?php
	require '../controller/c_log.php';
?>
<div class = "Header-View-Label" id = 't'>Update Clients</div>
<div class = "Real-View">
<form action="insert.php" method="post">
<br>
<br>
<input type='text' name='id' maxlength="20" size="50" placeholder = 'ID'>
<br><br>
<span style = 'color: red;'>*</span> 
<input type='text' name='first_name' maxlength="20" size="50" placeholder = 'First Name'>
<br><br>
<span style = 'color: red;'>*</span>
<input type='text' name='last_name' maxlength="20" size="50" placeholder = 'Last Name'>
<br><br>
<input type='text' name='email' maxlength="60" size="50" placeholder = 'Email'>
<br><br>
<br><br>
<input type='text' name='number' maxlength="20" size="50" placeholder = 'Phone Number'>
<br><br>
<br><br>
<input type='text' name='address' maxlength="20" size="50" placeholder = 'Address'>
<br><br>
<br><br>
<input type='text' name='state' maxlength="20" size="50" placeholder = 'State'>
<br><br>
<br><br>
<span style = 'color: red;'>*</span>
<input type='text' name='Country' maxlength="20" size="50" placeholder = 'Country'>
<br><br>
<input type='submit' value='Register' maxlength="20" size="20">
<br>
<br>
</form>
</div>