<?php
	require ('class/page.inc');
	require 'c_log.php';
	$homepage = new Page();
	$homepage->Display();
?>
<?php
	$pa = new db();
	$db = $pa->connect_db();
if ($pa->get_error())
		{
			$pa->display_error();
		}
		else
		{
			$query = "select password from rf.logon where name = '".$_SESSION['login_user']."'";
			$result = $db->query($query);
			$xow = $result->fetch_assoc();
			$npass = $_POST['password'];
			$ses = $_SESSION['login_user'];
			$hpass = md5($npass);
			if ($xow['password'] == md5($_POST['password_0']))
			{
				$query1 = "update rf.logon set password = '".$hpass."'where name = '".$ses."'";
				$db->query($query1);
				$_SESSION['pc'] = "Password Changed";
				header("location:in.php");
			}
			else
			{
				$_SESSION['err'] = "Old Password is wrong";
				header("location:pass.php");
				exit;
			}
		}
?>
</body>
</html>