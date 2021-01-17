<?php
require 'c_log.php';
header('Content-type: text/xml');
echo '<?xml version="1.0"?>';
echo '<profile>';
$pa = new db();
$db = $pa->connect_db();
$result = $db->query("select * from rf.clients");
$lr = $db->query("select first_name, last_name from rf.clients order by id desc limit 1");
$l = $lr->fetch_assoc();
$num_results = $result->num_rows;
echo '<status id = "u"> Current User: '.$_SESSION['login_user'];
echo '</status>';
echo '<status id = "n"> No. Of Clients: '.($num_results-1);
echo '</status>';
echo '<status id = "l"> Latest Client: '.$l['first_name'].' '.$l['last_name'];
echo '</status>';
echo '<status id = "q"> No. Of Defaulters: ';
echo '</status>';
echo '<status id = "g"> No. Of Good Clients: ';
echo '</status>';
echo '<status id = "b"> No Of Bad Clients: ';
echo '</status>';
echo '</profile>';
?>