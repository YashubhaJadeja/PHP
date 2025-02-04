<?php
$str = "Gentleman welcome to Fight Club";

echo(strlen($str)) ."<hr/>";

echo(strtoupper($str)) ."<hr/>";

echo(strtolower($str)) ."<hr/>";

echo(ucfirst($str)) ."<hr/>";

echo(ucwords($str)) ."<hr/>";

echo(strpos($str,"Fight")) ."<hr/>";

echo(str_replace("Club","Member", $str)) ."<hr/>";

echo(substr($str,11,7)) ."<hr/>";

echo(strrev($str))."<hr/>";

echo(trim($str)) ."<hr/>";

echo(str_pad($str,50,"*" ))."<hr/>";

echo(str_repeat($str,2)) ."<hr/>";

$array = ["Gentleman","Welcome","to","Fight","Club"];
$s = explode("", $str);
echo $s."<hr/>";
print_r($s);

$a = explode("", $str);
print_r($a);
echo"</hr>";

echo str_shuffle($str);
echo"</hr>";

$str1 = "Fight";
$a = str_split($str1);
print_r($a);
echo"</hr>";

echo strstr($str1,"Fight") ."</hr>";

$str ="<p> Gentleman Welcome to <b> Fight Club </b></p>";
$tagsAllowed = "<b></b>";
$result = strip_tags($str,$tagsAllowed);
echo $result ."</hr>";

$str = "Fight \n Club";
echo nl2br($str)."</hr>";

$str = "Gentleman welcome to \\Fight\\Club";
echo stripslashes($str) ."<hr/>";

$asciiValue = 65;
$character = chr($asciiValue);
echo $character ."<hr/>";

$char ='A';
$asciiValue = ord($char);
echo($asciiValue) ."<hr/>";

$str = "Gentleman Welcome to Fight Club";
$string1 = "Hi";
$string2 = "Hey";
$result = strchr($str,"F",true);
echo $result ."<hr/>";

$result = strcasecmp($string1,$string2);
echo $result ."<hr/>";

$result = strcmp($string1,$string2);
echo $result ."<hr/>";

?>