<?php
require_once ('core/flesh/_phantom_.php');
if(!isset($_SESSION['login_user']))
{
	header("location: ../controller/f_log.php");
	header ('Refresh:1; url=http://192.168.1.15');
	session_destroy();
}
$db = new db();
$d = $db->connect_db();
	if ($db->get_error())
		{
			$db->display_error();
		}
		else
		{
$a = new auth();
@$a->verify_credentials($d, 'logon', '../../index.php');
$db->disconnect_db($d);
}
?>
