<?php
date_default_timezone_set('Asia/calcutta');
session_start();
$total=$_SESSION['total'];
$from=$_SESSION['from'];
$to=$_SESSION['to'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Print</title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta  http-equiv="content-Type" content="text/html" charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1,user-scalable=0"/>
    <meta name="description" content="global"/>
    <meta name="author" content="Anupam Tiwari"/>
    <meta name="distribution" content="global"/>
    <meta http-equiv="X-UA-compatible" content="IE=edge,chrome=1"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"></link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	<style type="text/css">
		
body{
	width:100%;
	background-color:black;
}
.header{
		height: 156px;
		padding: 0;
		font-size: 14px;
		width:100%;
}
.wrap{
	position:absolute;
	width:1024px;
	background-color:#FFFFFF;
	padding:0 10px;
	border:solid 1px;
	-o-box-shadow: 10px 10px 5px #888;
	-moz-box-shadow: 10px 10px 5px #888;
	-webkit-box-shadow: 10px 10px 5px #888;
	box-shadow: 0px 0px 25px #666;

}
#heading{
	text-align:center;
	font-size:50pt;
	font-family:verdana,helvetica,arial,sans-serif;
	color:#993366;
	padding-top:35pt;
	line-height:normal;
}
.navbar .brand {
	padding:10px 40px 10px;
}
.login{
	border-style:solid;
	padding:10px;
	width:300px;
	height:304px;
}
a:hover{
	text-decoration:none;
}
.headin{
	text-align:center;
	display:inline;
	color:FFFFFF;
}
label{
	font-size:17px;
	margin-bottom:0px;
	margin-top:5px;
}
.news {
	border-style:solid;
	float:right;
	padding:10px;
	margin-left:12px;
	width:30%;
	height:305px;
}
.foot{
	font-color:black;
	text-align:center;
	font-size:15px;
}
#line{
	margin-top:20px;
	padding:0;
	width:100%;
	height:5px;
	background-color:black;
}

.findby{
	border-style:solid;
	height:45px;
	padding:10px;
}
.display{
	
	margin-top:20px;
	height:280px;
	padding:10px;	
}
.span12{
	margin-right:20px;
}

	</style>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
      
	
	
</head>
<body class="bg">

	<div class="wrap">
	<p>&nbsp;&nbsp;<b>Current date and time:&nbsp;&nbsp;</b><?php echo date("d/m/y  h:i:s A"). "\n"?></p>
	<div style="border: 2px dotted black;padding: 5px;margin:10px;">
		<div>
			<img style="float: left;" src="images/logo.jpg" width="100" height="80" alt="railway image"/>
			<img style="float: right;" src="images/QR.jpg" width="80" height="80" alt="railway image"/>
			<h4 align="center"><b><u>Railway e-Ticketing Service</u></b></h4>
			<h4 align="center"><b><u>Electronic Reservation Slip(Personal User)</u></b></h4>
		</div>
		<br/><br/>
		<div>
			<p><b>1.</b>This Ticket will be valid with an ID proof in original.Please carry original identity proof.If found traveling without 
			original ID proof,passenger will be treated as without ticket and charged as per extent Railway Rules.</p>
			<p><b>2.</b>Only confirmed/RAC/Partially confirmed E-ticket is valid for traval.Fully Waitlisted E-ticket is invalid for travel
			 if it remains fully waitlisted after preparation of chart and the refund of the booking amount shall be credited to account used by the payment for booking  of the ticket.</p>
			 <p><b>3.</b>Valid IDs to be presented during train journey by one of the passenger booked on an e-ticket:-Voter Identity Card/Passport/PAN Card?Driving LicensePhoto ID card as vaalid proof of identity.</p>
			 <p><b>4.</b>Service Accounting Code(SAC) 996411:Local and transport services of passengers by railways for distance upto 150kms Service Accounting Code.</p>
			  <p><b>5.</b>General rules/Information for e-ticket passenger have to be studied by the customer for cancellation & refund.</p>
		</div>
		<div style="padding: 10px">
			<br/>
			<b>PASSENGER DETAILS:</b>
			<table  class="table" style="border:2px solid black;">
				<col width="90">
				<col width="90">
				<col width="90">
				<col width="90">
				<col width="90">
				<col width="90">
				<col width="90">
				<col width="90">
							<tr>
					
					<th style="width:100px;border-top:0px;">Train Number</th>
					<th style="width:100px;border-top:0px;">Date Of Journey</th>
					<th style="width:100px;border-top:0px;">Name</th>
					<th style="width:100px;border-top:0px;">Age</th>
					<th style="width:100px;border-top:0px;">Sex</th>
					<th style="width:100px;border-top:0px;">Status</th>
					<th style="width:100px;border-top:0px;">DOB</th>
					<th style="width:100px;border-top:0px;">Class</th>
				
				</tr>
				<tr>
					
					<td style="width:100px;border-top:0px;"></td>
					<td style="width:100px;border-top:0px;"></td>
					<td style="width:100px;border-top:0px;"></td>
					<td style="width:100px;border-top:0px;"></td>
					<td style="width:100px;border-top:0px;"></td>
					<td style="width:100px;border-top:0px;"></td>
					<td style="width:100px;border-top:0px;"></td>
					<td style="width:100px;border-top:0px;"></td>
				
				</tr>		
				
				</table>
		
		<br/>
			<b>OTHERS DETAILS:</b>
			<table  class="table" style="border:2px solid black;">
				<col width="90">
				<col width="90">
				<col width="90">
				<col width="90">
				<col width="90">
				<col width="90">
				
				<tr>
					<th style="width:10px;border-top:0px;">Trasaction ID</th>
					<th style="width:100px;border-top:0px;">Ticket Fare**</th>
					<th style="width:100px;border-top:0px;">Service Charge(Incl. of GST)#</th>
					<th style="width:100px;border-top:0px;">Total Fare(all inclusive)</th>
					<th style="width:100px;border-top:0px;">From</th>
					<th style="width:100px;border-top:0px;">To</th>
					
				</tr>	
				<tr>
					<td style="width:10px;border-top:0px;"><?php echo rand(111111111,999999999); ?></td>
					<td style="width:100px;border-top:0px;">&nbsp;<?php echo $total; ?></td>
					<td style="width:100px;border-top:0px;">&nbsp;0.0</td>
					<td style="width:100px;border-top:0px;">&nbsp;<?php echo $total; ?></td>
					<td style="width:100px;border-top:0px;"><?php echo $from; ?></td>
					<td style="width:100px;border-top:0px;"><?php echo $to; ?></td>
					
				</tr>	
				
				</table>
				 <u><b>This ticket is booked on a personal user ID.Its sale/purchase is an offence u/s 143 of the Railway Act,1989.</b></u> 
		</div><br/>

     
		<div align="center">
	       <button onClick="window.print()" title="click here">Print</button>
		</div>


	</div>
</body>
</html>
<?php
session_destroy();
?>



