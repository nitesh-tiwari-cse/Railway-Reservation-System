<?php
$conn=new mysqli("localhost","root","","feedback_database");
if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}
?>