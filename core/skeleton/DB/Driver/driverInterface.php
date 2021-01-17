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
interface driverInterface
{
	public function connect_db($db);
	public function disconnect_db($db, $i);
	public function load_tables($db, $connection);
	public function query($query, $connection);
	public function retrieve_table($table);
	public function attribute_table($table, $connection);
	public function insert($table, $attr, $val);
	public function return_instance();
} 

?>
