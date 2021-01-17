<?php
require 'c_log.php';
header('Content-type: text/xml');
echo '<?xml version="1.0"?>';
echo '<profile id = "u"> Current User: '.$_SESSION['login_user'];
$pa = new db();
$db = $pa->db_connect();
$result = $db->query("select * from rf.clients");
$num_results = $result->num_rows;
echo '<profile id = "n"> Number Of Clients: '.$num_results;
?>