<?php
$hostName	= "localhost";
$userName	= "root";
$passWord	= "";
$database	= "survey";

$masuk = ($GLOBALS["___mysqli_ston"] = mysqli_connect($hostName, $userName, $passWord)) or die('Connection Failed');
$hore = mysqli_select_db($GLOBALS["___mysqli_ston"], $database) or die('Database Failed');
?>