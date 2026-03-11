<?php 
session_start();
$name = $_SESSION['name'];
$language = $_SESSION['language'];
echo 'welcome Mr.'.$name.' your favirote language is '.$language;
?>