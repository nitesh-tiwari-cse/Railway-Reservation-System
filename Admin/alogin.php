<?php
session_start();

$aname=$_POST['admin'];
$pass=$_POST['psd'];
require('firstimport.php');

$tbl_name="admin"; // Table name

mysqli_select_db($conn,"$db_name")or die("cannot select DB");


$sql="SELECT * FROM $tbl_name WHERE admin='$aname' and password='$pass'";
//echo "$sql";

$result=mysqli_query($conn,$sql) or trigger_error(mysql_error.$sql);

//$row=mysql_fetch_array($result);

//echo "\n\n ..nam..".$row['f_name']."\n\n ..pass..".$row['password'];

if(mysqli_num_rows($result) < 1)
{
	echo " .... LOGIN TRY  ....";
	$_SESSION['error'] = "1";
	header("location:adminlogin.php"); //
}
else
{
	// $_SESSION['name'] = $aname; // Make it so the username can be called by $_SESSION['name']    //
	header("location:index1.php");    //
}

?>

	