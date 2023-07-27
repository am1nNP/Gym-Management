<?php
require "../jdf.php";
 $date=date("Y-m-d");           
 $date = explode('-', $date);
            $y = $date[0];
            $m   = $date[1];
            $d  = $date[2];
            var_dump($y);
            var_dump($m);
            var_dump($d);
function persian_date($date) {
    return gregorian_to_jalali($date[0], $date[1], $date[2],"/");
}

$mdate=persian_date($date);
echo $mdate;
?>