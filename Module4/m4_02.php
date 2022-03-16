<?php

echo 'Date is'.date("y/m/d").'<br>';
echo 'Date is'.date("y-m-d").'<br>';
echo 'Date is'.date("h:i:sa").'<br>';
$d=mktime(10,11,22,4,2,2023);
echo "created date is ".date("Y-m-d h:i:sa",$d);
echo'<br>';

$da=strtotime("+1 day");
echo date('Y-m-d h:i:sa',$da);
?>