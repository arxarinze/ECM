<?php
	require ('core/flesh/_phantom_.php');
	
	$pa = new db();
	$a = new auth($pa->return_db());
	$aa = $pa->connect_db();
	$nam=htmlspecialchars($_POST['name']);
	$pass=htmlspecialchars($_POST['password']);
	if ($pa->get_error())
		{
			$pa->display_error();
		}
		else
		{
		$a->password = $pass;
		$a->name = $nam;
		$a->getCredentials($a->name, $a->password, $aa, 'logon', '../../view/in.php');		
	}
	$pa->disconnect_db($aa);
?>