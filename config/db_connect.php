<?php
$host = "localhost";
$user = "root";
$pass = "ascent";
$db = "auth";
$chardb = "char";

$connection = mysql_connect($host, $user, $pass, $db);
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}

$select_db = mysql_select_db($db);
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}