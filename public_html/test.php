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
?>