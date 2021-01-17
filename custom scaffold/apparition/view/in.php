<?php
require ('../controller/c_log.php');
	$homepage = new Page();
	$homepage->Display();
?>
<?php 
$user_browser = $_SERVER['HTTP_USER_AGENT'];
 echo $user_browser; 
?>
</body>
</html>