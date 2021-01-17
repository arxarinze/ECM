<?php
/*!
 * _Ghst_ Framework-
 *
 * Created By: Arize V.
 * Realesd under the _ghst_ framework-
 * Copyright of N-Aspire-
 *
 * Date: 2016-07-19.
 */
 include_once ("core/skeleton/Driver/driverInterface.php");
class db implements driverInterface
{
private $dbConnection;
public $dbError;
public function __construct()
{
	$this->dbConnection = msqli_connect(LOCALHOST, USER, PASSWORD, DBNAME);
}
 public function connect_db()
	{
		return $this->dbConnection;
	}

public function disconnect_db($db)
{
	mysqlr_close($db);
}
public function create_db($name)
{
	$q = "CREATE DATABASE ".$name;
	$r = $this->connect_db()->query($q);
}
public function get_error()
{
	$this->dbError= $this->dbConnection->connect_errno;
	return $this->dbError;
}
public function display_error()
{
		if (session_status() == PHP_SESSION_ACTIVE)
		{
		session_destroy();
		header ('Refresh:1; url=http://192.168.1.15');
		echo "Error cant connect to database...exiting.....";
		}
		else
		{
			$_SESSION['emsg'] = "Error Database Not Active!";
		header ('Refresh:1; url=http://192.168.1.15');
		echo "Error cant connect to database...exiting.....";
		}		
}
public function select_db($q, $ee, $dbb)
{
	$result = $dbb->query($q);
	$num_results = $result->num_rows;
		echo '<p>Number of entries found: ' .$num_results.'</p>';
		echo ' <p><strong>'.$ee.': </strong></p>';
		for($i=0; $i < $num_results; $i++)
		{
			$row = $result->fetch_assoc();
			if($row["$ee"] != null)
			{
				echo stripslashes($row["$ee"]);
				echo "<br>";
			}
		}
}
public function select($dbi, $q, $r, $n)
{
	$r = $dbi->query($q);
	$n = $r->num_rows;
}

public function display_db($assoc)
{
	echo '<tr>';
		foreach($assoc as $i => $j)
	{
		
		echo'<td><strong>'.$j.'</strong></td>';
	}
	echo '</tr>';
}
}
?>
