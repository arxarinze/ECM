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
include_once("core/skeleton/Driver/driverInterface.php");
class db implements driverInterface
{
private $dbConnection;
public $dbError;
public function __construct()
{
	$this->dbConnection =  new mysqli(LOCALHOST, USER, PASSWORD, DBNAME);
}
}
?>
