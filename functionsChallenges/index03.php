<?php
function isAdult($age){
    if($age >= 18){
        return "Access Granted";
    }else{
        return "Access Denied";
    }
}

echo isAdult(2)."\n";
echo isAdult(27);

?>
