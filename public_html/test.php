<?php

require_once("php/classes/Event.php");

$testEvent= new Event(null,"2016-10-24","Convention Center","Fun","Come to our event!");


//echo "<!DOCTYPE html>";
//echo "<html lang=\"en\">";
//echo "<body>";
echo "<pre>";
print_r($testEvent);
echo "</pre>";
//echo "</body>";
//echo "</html>";


require_once "aes256.php";
require_once "encrypted-config.php";


$aes_file="aes49.ini";
$aes_parameters=readConfig($aes_file);


$arlo_file="arlo-control-center.ini";
$arlo_parameters=readConfig($arlo_file);




$filename=$aes_file;
//$filename=$arlo_file;

echo "<pre>";
print_r($filename);
echo "</pre>";



?>