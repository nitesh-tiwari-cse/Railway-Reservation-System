
<?php

require('firstimport.php');
if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");
		
	}
$tbl_name="train_list";

mysql_select_db($conn,"$db_name") or die("cannot select db");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title> Indian Railways </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta  http-equiv="content-Type" content="text/html" charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1,user-scalable=0"/>
    <meta name="description" content="global"/>
    <meta name="author" content="Anupam Tiwari"/>
    <meta name="distribution" content="global"/>
    <meta http-equiv="X-UA-compatible" content="IE=edge,chrome=1"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"></link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
			$('.wrap').css("left",x+"px");
		});

	</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
</head>
<body>
	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo.jpg"/>
			</div>
			<div id="heading">
				<a href="index.html">Indian Railways</a>
			</div>
		</div>
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse" >
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.html" >HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="schedule.html">SCHEDULE</a>
				<a class="brand" href="reservation.php">RESERVATION</a>
				<a class="brand" href="contact.html">CONTACT</a>
				<a class="brand" href="about.html">ABOUT </a>
				</div>
			</div>
		</div>
		
		
<!-- display result -->
		<div class="span12 well">
			<div class="display" style="height:30px;">
				<table class="table">
				<tr>
					<th style="width:70px;border-top:0px;"> Train No.</th>
					<th style="width:210px;border-top:0px;"> Train Name </th>
					<th style="width:65px;border-top:0px;"> Orig. </th>
					<th style="width:55px;border-top:0px;"> Des. </th>
					<th style="width:70px;border-top:0px;"> Arr. </th>
					<th style="width:65px;border-top:0px;"> Dep. </th>
					<th style="width:20px;border-top:0px;"> M </th>
					<th style="width:20px;border-top:0px;"> T </th>
					<th style="width:25px;border-top:0px;"> W </th>
					<th style="width:25px;border-top:0px;"> T </th>
					<th style="width:20px;border-top:0px;"> F </th>
					<th style="width:20px;border-top:0px;"> S </th>
					<th style="border-top:0px;"><font color=red> S </font></th>
				</tr>
				</table>
			</div>
			<div class="display" style="margin-top:0px;overflow:auto;">
				<table class="table">
				<?php
					$n=0;
				while($row=mysql_fetch_array($result)){
				if($n%2==0)
				{
				?>
				<tr class="text-error">
					<td> <? echo $row['Number'] ?> </td>
					<td> <? echo $row['Name'] ?> </td>
					<td> <? echo $row['Origin'] ?> </td>
					<td> <? echo $row['Destination'] ?> </td>
					<td> <? echo $row['Arrival'] ?> </td>
					<td> <? echo $row['Departure'] ?> </td>
					<td> <? echo $row['Mon'] ?> </td>
					<td> <? echo $row['Tue'] ?> </td>
					<td> <? echo $row['Wen'] ?> </td>
					<td> <? echo $row['Thu'] ?> </td>
					<td> <? echo $row['Fri'] ?> </td>
					<td> <? echo $row['Sat'] ?> </td>
					<td> <? echo $row['Sun'] ?> </td>
				</tr>
				<?php
				}
				else
				{
				?>
				<tr class="text-info">
					<td> <? echo $row['Number'] ?> </td>
					<td> <? echo $row['Name'] ?> </td>
					<td> <? echo $row['Origin'] ?> </td>
					<td> <? echo $row['Destination'] ?> </td>
					<td> <? echo $row['Arrival'] ?> </td>
					<td> <? echo $row['Departure'] ?> </td>
					<td> <? echo $row['Mon'] ?> </td>
					<td> <? echo $row['Tue'] ?> </td>
					<td> <? echo $row['Wen'] ?> </td>
					<td> <? echo $row['Thu'] ?> </td>
					<td> <? echo $row['Fri'] ?> </td>
					<td> <? echo $row['Sat'] ?> </td>
					<td> <? echo $row['Sun'] ?> </td>
				</tr>
				<?php
				}
				$n++;
				}
				mysql_close();
				?>
				</table>
			</div>
		</div>
		<!-- Copyright -->
		<!-- Footer -->
		<footer >
		<div class="f1">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2021 Copyright PVT Ltd.</p>	
			</div>
			<div style="float:right;">
			<p class="text-right text-info">
			 Follow On:
				<span><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>&nbsp;
				<span><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>&nbsp;
				<span><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
</p>
			</div>
		</div>
		</footer>
		</div>
</body>
</html>