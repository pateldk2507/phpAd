<?php
$username = 'root';
$password = '';
$hostname = 'localhost';
$databasename='adserverdatabase';
$conn = mysqli_connect($hostname, $username, $password, $databasename);

if($conn){
	//echo 'successfully connected'. '<br>';

}else{
	die(mysql_connect_error($conn));
}


?>