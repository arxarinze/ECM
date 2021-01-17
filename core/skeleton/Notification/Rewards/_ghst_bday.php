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
class Birthday
{
    public $birthday = array();
    public $emails = array();
    public $name = array();
    public $bdayI = array();
    public $current_date;
    public function __construct()
    {
        $this->current_date = date("Y-m-d"); 
    }
    public function getbirthday($bi, $em, $na)
    {
        $this->birthday = $bi;
        $this->emails = $em;
        $this->name = $na;
    }
    public function checkbirthday()
    {
        if($this->birthday != null)
        {
            
            for ($i=0; $i < count($this->birthday); $i++)
            {
            $time = strtotime($this->birthday[$i]);
            $ctime = strtotime($this->current_date);
            if(date("m", $time) == date("m", $ctime) && date("d", $time) == date("d", $ctime))
            {
                array_push($this->bdayI, $i);
            }
            }
        }
    }
    public function display_notification()
    {        for ($i=0; $i < count($this->bdayI); $i++)
             {
            echo "<div id='one'>";
             echo $this->name[$this->bdayI[$i]]." today is your birthday";
             echo "</div><br><br><br>"; 
             }
    }
}
?>