<?php
	require 'c_log.php';
	require ('class/page.inc');
	$homepage = new Page();
	$homepage->Display();
		$pa = new db();
	$db = $pa->connect_db();
?>
<div>
<?php
if ($pa->get_error())
		{
			$pa->display_error();
		}
		else
		{
			$eee = 'email';
			$q = "select email from rf.clients";
			$pa->select_db($q, $eee, $db);
		}
?>
</div>
</body>
</html>