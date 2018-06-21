<?php

$filename = "ctce8_H810G.cfg"; 
$handle = fopen($filename, "rb"); 
$fsize = filesize($filename); 
$contents = fread($handle, $fsize); 
$byteArray = unpack("C*",$contents); 

foreach($byteArray as $byte){
	$b = abs(255 - $byte);
	echo chr($b);
}