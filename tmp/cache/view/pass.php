<?php
	require 'c_log.php';
	require ('class/page.inc');
	$homepage = new Page();
	$homepage->Display();
?>
<form action="pass_c.php" method="post">
<br>
Old Password<span style = 'color: red;'>*</span>: 
<input type='password' name='password_0' maxlength="60" size="13"> <?php if(!empty($_SESSION['err'])) {echo $_SESSION['err'];} ?>
<br><br>
New Password: 
<input type='password' name='password' maxlength="20" size="13">
<br><br>
<input type='submit' value='Change' maxlength="20" size="13">
</form>
<?php unset($_SESSION['err']); ?>
</body>
</html>