<?php

$evenNumbers=[];
for($e=0;$e<=50;$e++){
    if(($e%2)==0 && $e!=0){
        array_push($evenNumbers,$e);
    }
}
$totalEvenNum = count($evenNumbers);
echo "Total even number is: " . $totalEvenNum;
?>