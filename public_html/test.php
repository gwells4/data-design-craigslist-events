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
$arlo_file="arlo-control-center.ini";


$filename=$aes_file;
//$filename=$arlo_file;

echo "<pre>";
print_r($filename);
echo "</pre>";


// verify the file is readable
if(is_readable($filename) === false) {
	throw(new InvalidArgumentException("configuration file is not readable"));
}

// read the encrypted config file
if(($ciphertext = file_get_contents($filename)) == false) {
	throw(new InvalidArgumentException("unable to read configuration file"));
}

// decrypt the file
try {
	$password = strrev($filename) . strlen($filename);
	$plaintext = aes256Decrypt($ciphertext, $password);
} catch(InvalidArgumentException $invalidArgument) {
	throw(new InvalidArgumentException($invalidArgument->getMessage(), 0 , $invalidArgument));
}

// parse the parameters and return them
if(($parameters = parse_ini_string($plaintext)) === false) {
	throw(new InvalidArgumentException("unable to parse parameters"));
}






$arlo_parameters=readConfig($arlo_file);



$aes_file="aes49.ini";
$aes_parameters=readConfig($aes_file);




$filename=$aes_file;
//$filename=$arlo_file;

echo "<pre>";
print_r($filename);
echo "</pre>";



?>