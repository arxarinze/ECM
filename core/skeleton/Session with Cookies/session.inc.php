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
 class sessions
 {
	public $name;
	public function __construct($n)
	{
		$this->name = $n;
	}
	public function start_session()
	{
		session_name($this->name);
		session_start($this->name);
	}
 }
?>