<?php
$host = "mysql.hostinger.es";
$user = "u483376584_redi";
$pass = "redila";
$db = "u483376584_redi";

$connect = new mysqli($host,$user,$pass,$db) or die("error".mysqli_errno($connect));
?>