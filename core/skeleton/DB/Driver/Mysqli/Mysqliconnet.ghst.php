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
 include_once ("core/skeleton/DB/Driver/driverInterface.php");
class db implements driverInterface
{
	public $db_name;
	public $tb_name;
	public $tbAttr_list = array();
	public $db_list = array();
	public $tb_list = array();
	public $connection;
	public $connection_array = array();
	public $dbError;
public function connect_db($dbn=null)
	{
	if ($dbn != null)
	{
	$this->db_name = $dbn;
	$this->connection = new mysqli(LOCALHOST, USER, PASSWORD, $this->db_name);
	array_push($this->connection_array, $this->connection);
	}
	else if ($dbn == null || $dbn == "" || $dbn == " ")
	{	
	$this->connection = new mysqli(LOCALHOST, USER, PASSWORD);
	array_push($this->connection_array, $this->connection);	
	}
	}
	public function disconnect_db($db, $index)
	{
	mysqli_close($db);
	}
	public function retrieve_connection($index)
	{
		return $this->connection_array[$index]; 
	}
	public function query($query, $connection)
	{
		$result = $connection->query($query);
		return $result;
	}
	public function query_length($result)
	{
		return $result->num_rows;
	}
	public function fetch_query($result, $type = "Number")
	{
		if($type == "Number")
		{
			$row = mysqli_fetch_array($result, MYSQLI_NUM);
			return $row;
		}
		else if ($type == "Associative")
		{
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			return $row;
		}
	}
	public function load_tables($db, $connection)
	{
		$result = $this->query("show tables", $connection);
		$row = $this->fetch_query($result);
		$this->tb_list = $row;
	}
	public function retrieve_table($table)
	{
		
	}
	public function attribute_table($table, $connection)
	{
		
		$result = $this->query("describe ".$table, $connection);
		while($row = $this->fetch_query($result, "Associative"))
		{
			array_push($this->tbAttr_list, $row["Field"]);
		}
		
	}
	public function insert($table, $atrr, $val)
	{
		if(is_array($attr) && is_array($val))
		{
			$attribute = implode("','", $attr);
			$values = implode("','", $val);
			$result = $this->query("insert into $table ($attribute) values ($values)");
			return $result;
		}
		else if(is_string($attr) && is_string($val))
		{
			$result = $this->query("insert into $table ($attr) values ($val)");
			return $result;
		}
	}
	public function return_instance()
	{
		return $this;	
	}

public function get_error()
{
	$this->dbError= $this->connection->connect_errno;
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
}
?>
