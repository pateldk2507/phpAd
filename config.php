<?php
$username = 'id13034626_dhavalmets';
$password = '{&rE#I#abgknhlM3';
$hostname = 'localhost';
$databasename='id13034626_mets';
$conn = mysqli_connect($hostname, $username, $password, $databasename);

if($conn){
	//echo 'successfully connected'. '<br>';

}else{
	die(mysql_connect_error($conn));
}


?>