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
		$query = 'select * from rf.clients'; 
		$result = $db->query($query);
		$row = $result->fetch_assoc();
		$row1 = $row;
			echo '<table style="width:100%" border="1"><tr>';
	foreach($row as $i => $j)
	{
		
		echo'<th><strong>'.$i.'</strong></th>';
	}
	echo '</tr>';
		while($row = $result->fetch_assoc())
		{
			$pa->display_db($row);
		}

	}
		
	?>
	</div>
</body>
</html>