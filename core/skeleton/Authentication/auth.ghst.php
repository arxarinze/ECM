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
	class auth
	{
		private $properties = array();
		public $dbname;
		public function __construct($n)
		{
			$this->dbname = $n;
		}
		function __get($property)
		{
			return $this->properties[$property];
		}
		function __set($property, $value)
		{
			$this->properties[$property]=$value;
		}
		public function getCredentials($n, $p, $d, $dbtable, $path)
		{
			$this->dbname .= ".".$dbtable;
			$q = "select name, password from ".$this->dbname." where name = '".$n."' && password = '".$p."'";
			$this->check_credentials($q, $d, $n, $path);
		
		}
		public function check_credentials($q, $d, $n, $path)
		{
			$r = $d->query($q); 
			$l = $r->num_rows;
			if($l == 1)
			{
			
				$_SESSION['login_user'] = $n;
				$r = $_SESSION['login_user'];
				header("location: $path");
			}
			else
			{	
			
				echo 'password invalid';
			}
		}
		public function verify_credentials($d, $dbtable, $path)
		{
		$this->dbname .= ".".$dbtable;
		$query = "select name from ".$this->dbname." where name = '".$_SESSION['login_user']."'";
		$result = $d->query($query);
		$row = $result->fetch_assoc();
		$lg = $row['name'];
		if(!isset($lg))
		{
		
			header("location: $path");
		}
		}
	}
?>