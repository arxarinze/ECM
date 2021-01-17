<?php
require '../controller/c_log.php';
	include_once("lib/File System/__filesystem__.php");
    $pa1 = new db();
	$db1 = $pa1->connect_db();
    $msg = $_POST["sendi"];
    $user=$_SESSION['login_user'];
    $suser=$_POST['sendertype'];
    $time = date("Y-m-d H:i:s");
     if ($pa1->get_error())
		{
			$pa1->display_error();
		}
		else
		{
        $query1 = "insert into rf.boss_message (board,time,name,sendName) values ('".$msg."', '".$time."','".$user."', '".$suser."')"; 
			$result1 = $db1->query($query1);
			if($result1)
			{
				echo $db1->affected_rows.' inserted!!';
			}
			$db1->close();
        }
?>