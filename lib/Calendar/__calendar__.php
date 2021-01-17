<?php
class Calendar
{
    public function month_converter($m)
    {
        $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
            if(is_string($m))
            {
                for($i = 0; $i < count($months); $i++)
                {
                    if ($m == $months[$i])
                    {
                    if($i >=0 && $i < 9)
                    {
                        $s= $i+1;
                        $q = '0'.$s;
                    return $q;
                    }
                    else
                    {
                    return $i+1;
                    }
                    }
                }
            }

    }
}
?>