<?php
require '../controller/c_log.php';

$pa = new db();
$db = $pa->connect_db();
$query = "select * from boss_message"; 
$result =$db->query($query);
$num_results = $result->num_rows;
for ($i=0; $i < $num_results; $i++)
{
    $row = $result->fetch_assoc();
    if($_SESSION['login_user'] == $row['name'])
    {
    echo "<div id ='one'>".$row["name"]."</div><br><br><br><div id='two'><div id='three'>".$row['sendName']."<br>".$row['time'].":&nbsp;&nbsp;".$row['board']."</div></div><br><br><br><br><br>";
    }
    if ($_SESSION['login_user'] == $row['sendName'])
    {
    echo "<div id ='four'>".$row["name"]."</div><br><br><br><div id='five'><div id='three'>".$row['sendName']."<br>".$row['time'].":&nbsp;&nbsp;".$row['board']."</div></div><br><br><br><br><br>";
    }
}
?>