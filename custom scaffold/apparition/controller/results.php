<?php
	require '../controller/c_log.php';
?>
<div class = "Header-View-Label"id = 't'>Search Results</div>
<div class = "Real-View">
<?php
	$pa = new db();
	$db = $pa->connect_db();
	$searchtype=$_POST['searchtype'];
	$searchterm=$_POST['searchterm'];

	$searchterm= trim($searchterm);

	if (!$searchtype || !$searchterm)
	{
		echo "<c>You havent entered any search details.</c>";
		exit;
	}
	if(!get_magic_quotes_gpc())
		{
			$searchtype = addslashes($searchtype);
			$searchterm = addslashes($searchterm);
		}
	if ($pa->get_error())
		{
			$pa->display_error();
		}
		else
			{
		$query = "select * from rf.clients where ".$searchtype." like '%" .$searchterm."%'"; 
		$result =$db->query($query);

		$num_results = $result->num_rows;

		echo 'Number of entries found: ' .$num_results.'<br>';

		for($i=0; $i < $num_results; $i++)
		{
			$row = $result->fetch_assoc();
			echo '<br><br>Full Name:'; 
			echo ' ';
			echo htmlspecialchars(stripslashes($row['first_name']));
			echo ' ';
			echo htmlspecialchars(stripslashes($row['last_name']));
			echo ' ';

			if ($searchtype == "email")
			{
					echo '<br><br>Email:';
				echo stripslashes($row['email']);
		}
		else if ($searchtype == "number")
			{
					echo '<br><br>Phone Number:';
				echo stripslashes($row['number']);
		}
		else

			if ($searchtype == "address")
			{
					echo ' <br><br>Address:';
				echo stripslashes($row['address']);
		}
		else

			if ($searchtype == "state")
			{
					echo '<br><br>State:';
				echo stripslashes($row['state']);
		}

		else

			if ($searchtype == "Country")
			{
					echo '<br><br>Country: ';
				echo stripslashes($row['Country']);
		}
		else 
		{
			echo ' <br><br>Email:  ';
				echo stripslashes($row['email']);
				echo ' <br><br>Phone Number:  ';
				echo stripslashes($row['number']);
				echo ' <br><br>Address:  ';
				echo stripslashes($row['address']);
				echo '<br><br>State: ';
				echo stripslashes($row['state']);
				echo ' <br><br>Country: ';
				echo stripslashes($row['Country']);
		}
		}
	}
	$result->free();
		$pa->disconnect_db($db);
?>
</div>
