<?php
class RM
{
public $RecordName;
public $Rdepartment;
public function __construct($rn, $rd)
{
         $this->RecordName = $rn;
         $this->Rdepartment = $rd;
}
public function create_record($cdb, $db)
{
      $args = func_get_args();
       $q = "create table ".$this->RecordName."(
    Id bigint(20) not null primary key auto_increment, 
    Date datetime not null, 
    User varchar(255) not null, 
    Purpose varchar(255) not null, 
    Department varchar(255) not null, 
    Permission varchar(255) not null, ";
    foreach ($args as $index=>$arg)
    {   
        if($index >= 2)
        {
        $q .= $arg.", ";
        }
    }
    $q = rtrim($q, ', ');
    $q .= ")";
   if($db->query($q, $cdb))
    echo "good";
    else
    echo "bad".$cdb->error;
    }
public function insert_record($cdb, $db)
{
    $args = func_get_args();
    $v = array();
     foreach ($args as $index=>$arg)
    { 
        if($index >= 2)
        {
         array_push($v, $arg);
        }
    }
    $t = '"'.implode('", "', $v).'"';
    $i = implode(", ", $db->tbAttr_list);
    $q = 'insert into '.$this->RecordName.' ('.$i.') values ('.$t.')';
    if($db->query($q, $cdb))
    echo "good";
    else
    echo "bad".$cdb->error;
}
//{
// function to select from record(public function select_record($val=null, $val1=null, $cval1=null))
//$val = selected field, $val = specific field, $cval1 = specific field value 
//}
public function daily($cdb, $db)
{
    $res = array();
    $currentdate = date("Y-m-d");
    $q = "select * from ".$this->RecordName." where Date = '".$currentdate."'";
    $result = $db->query($q, $cdb);
    while($row=$db->fetch_query($result, 'Associative'))
    {
        for($i=0; $i< count($db->tbAttr_list); $i++)
        {   if($db->tbAttr_list[$i] != 'Id')
            array_push($res, $row[''.$db->tbAttr_list[$i].'']);
        }
    }
    return $res;
}
public function weekly()
{   
    $res = array();
      $currentdate = date("Y-m-d");
    $q = "select * from ".$this->RecordName;
    $result = $db->query($q, $cdb);
    while($row=$db->fetch_query($result, 'Associative'))
    {   
        $time = strtotime($row['Date']);
        $ctime = strtotime($currentdate);
        if(date("m", $time) == date('m', $ctime) && date("d", $time) >= (date("d", $ctime) - 4) && date("d", $time) <= date("d", $ctime))
        {
        for($i=0; $i< count($db->tbAttr_list); $i++)
        {   if($db->tbAttr_list[$i] != 'Id')
            array_push($res, $row[''.$db->tbAttr_list[$i].'']);
        }
        }
    }
    return $res;
}
public function monthly($month)
{
    $res = array();
      $currentdate = date("Y-m-d");
    $q = "select * from ".$this->RecordName;
    $result = $db->query($q, $cdb);
    while($row=$db->fetch_query($result, 'Associative'))
    {   
        $time = strtotime($row['Date']);
        $ctime = strtotime($currentdate);
        if(date("Y", $time) == date('Y', $ctime) && date("m", $time) == $month)
        {
        for($i=0; $i< count($db->tbAttr_list); $i++)
        {   if($db->tbAttr_list[$i] != 'Id')
            array_push($res, $row[''.$db->tbAttr_list[$i].'']);
        }
        }
    }
    return $res;
}

public function annually($year)
{
    $res = array();
    $q = "select * from ".$this->RecordName;
    $result = $db->query($q, $cdb);
    while($row=$db->fetch_query($result, 'Associative'))
    {   
        $time = strtotime($row['Date']);
        if(date("Y", $time) == $year)
        {
        for($i=0; $i< count($db->tbAttr_list); $i++)
        {   if($db->tbAttr_list[$i] != 'Id')
            array_push($res, $row[''.$db->tbAttr_list[$i].'']);
        }
        }
    }
    return $res;
}
}
?>