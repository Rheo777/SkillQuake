<?php  

$sname = "localhost";
$uname = "id21514723_sq11";
$password = "SkillQuake#11";

$db_name = "id21514723_sq";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}
?>