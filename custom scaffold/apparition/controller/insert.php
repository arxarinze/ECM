<br>
<br>
<div>
<?php
	$pa = new db();
	$db = $pa->connect_db();
	$id=""; 
	$fname="";
	$lname="";
	$email="";
	$number="";
	$address="";
	$state="";
	$country="";

	$id=$_POST['id'];
	if (empty($_POST['first_name']) && empty($_POST['last_name']) && empty($_POST['Country']))
	{
		$_SESSION['errMs'] ="<span style = 'color: red;'>Please Enter Values In The Required Fields (*) </span>";
		header("location: insert0.php");
		exit;
	} 
	else{
	$fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	}
	if(strlen($_POST['email']) > 0)
	{
		if (!eregi('^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9_\-]+\.[a-zA-Z0-9\-\.]+$', $_POST['email']))
		{
			echo "Invalid Email";
			exit;
		}
	else {
		$email=$_POST['email'];
	}
}
	$number=$_POST['number'];
	$address=$_POST['address'];
	$state=$_POST['state'];
	$country=$_POST['Country'];
	
	if (!get_magic_quotes_gpc())
	{
		$fname = addslashes($fname);
		$lname = addslashes($lname);
		$email = addslashes($email);
		$address = addslashes($address);
		$state = addslashes($state);
		$number = addslashes($number);
		$id = addslashes($id);
		$country = addslashes($country);
	}
	if ($pa->get_error())
		{
			$pa->display_error();
		}
		else
		{
			$query = "insert into rf.clients (id, first_name, last_name, email, number, address, state, Country) values ('".$id."', '".$fname."', '".$lname."', '".$email."', '".$number."', '".$address."', '".$state."', '".$country."')"; 
			$result = $db->query($query);
			if($result)
				echo $db->affected_rows.' client inserted into database';
			$db->close();
		}
	?>
	</div>
	</body>
</html>