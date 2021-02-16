<?php
	session_start();
	date_default_timezone_set('Asia/calcutta');
	$msg1="";
	$msg2="";
	if(isset($_POST['submit']))
		{
                
	require "PHPMailerAutoload.php";

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'tiwarianupam1980@gmail.com';//Your Username
	$mail->Password = 'anupam@99';//Your Password
	$mail->Port = 465;
	$mail->SMTPSecure = "ssl";
	$mail->isHTML(true);
	$mail->setFrom($_POST['email'],"Indian Railway");
	$mail->addAddress($_POST['email']);
			          	$mail->Subject='Railway Emergency';
			          	$mail->Body=$_POST['message'];
                     
			          	if($mail->send())
			          	{
			          		$msg1= " Message Sent";
			          	}
			          	else
			          	{
			          		$msg2="Oops! mail not sent";
			          	}
			          
		
	  }
	
	
	
	?>
<!DOCTYPE html>
<html>
<head>
	<title> Contact </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	<link href="css/Default.css" rel="stylesheet">
	</link>
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
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			
			
			
			</div>
			<div id="heading">
				<a href="index.html" >Indian Railways</a>
			</div>
			</div>
		</div>
		<div class="navbar navbar-inverse" >
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="reservation.php" >RESERVATION</a>
				<a class="brand" href="profile.php" >PROFILE</a>
				<a class="brand" href="contact.php" >CONTACT</a>
				<a class="brand" href="about.php">ABOUT</a>
				</div>
			</div>
		</div>
		
		
		
		
		 <br/><br/>
		<div style="border:5px dotted blue;"><br/>
			
			<div>
             <div align="center">
			<img src="images/help.gif" alt="helpline logo" style="border-radius: 50%" width="120" height="100" />
		</div>
		

		</div>
			<div  style="font-size:36px; color:red;" align="center"> Customer Care Numbers &nbsp;  
					<hr  style="border-bottom:1px solid #A0A0A0; border-top:1px solid #A0A0A0; width:500px;" />
				</div>
				<div style="float: right;">
					<h4 style="color: green;"><?php echo $msg1;?></h3>
					<h4 style="color: red;"><?php echo $msg2;?></h3>
		<h4><b style="color:#00ccff;">Cancellation E-tickets:</b><br/><i class="fa fa-envelope" aria-hidden="true">&nbsp;&nbsp;etickets@irctc.co.in</i></h4>
		<h4><b style="color:#00ccff;">Shubhyatra users: </b><br/><i class="fa fa-envelope" aria-hidden="true">&nbsp;&nbsp;shubhyatra@irctc.co.in</i></h4>
		<h5 style="color: red;"><u>For Emergency</u></h5>
		<form action="helpline.php" method="post">
		<input type="email" name="email" autocomplete="off" placeholder="Type the above gmail address"><br/>
		<textarea name="message" style="height: 100px" autocomplete="off" placeholder="Your Message....."></textarea><br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" class="btn btn-success"  name="submit" value="Send">
	</form>
			
		</div>
				<table style="padding:5px;" align="center" >
							
							<tr>
								<td style="font-size: 2vw;color: white;"> <mark>ALL INDIA NUMBER(S)</mark>  </td>
								
							</tr>
							<br/>
							<tr>
								<td style="color:#339966;"><h4>For PNR, Fare, Train Arrival/Departure/ Train Time Table<br/>
                                     Accommodation Availablity, Train Name/Number</h4> </td>
								
							</tr>
							<tr>
								
								<td style="font-size:1vw;color:#339966;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><i class="fa fa-phone" aria-hidden="true"></i> Dial <span style="font-family:Kristen ITC;font-size:1.5vw;color:#0055ff;">139</span> </b></td>
								
							</tr>
							
							<tr>
								<td style="color:#339966;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9679;<span><b>&nbsp;Initially when you call you will hear welcome message both in Hindi &English asking <br/>
                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for language choice<b></span> </td>
							</tr>
							<tr>
								<td style="color:#339966;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9679;<span>&nbsp;<b>Choose Language</b></span> </td><br/>
								
							</tr>
							<tr>

								<td style="color:#339966;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9670;<span>&nbsp;<b>Press 1 for Hindi</b></span> </td>

							</tr>
							<tr>
								<td style="color:#339966;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9670;<span>&nbsp;<b>Press 2 for English</b></span> </td>
							</tr>
							<tr>
								<td style="font-size: 2vw;color: white;"> <mark>TOLL FREE NUMBER(S): </mark>  </td>
								
							</tr>
							<tr>
								<td style="font-size:1.5vw;color:#339966;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i><span style="font-family:Kristen ITC;color:#0055ff;">&nbsp;&nbsp;1323</span>(e-Catering)</td>
							</tr>
							<tr>
								<td style="font-size:1.5vw;color:#339966;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i><span style="font-family:Kristen ITC;color:#0055ff;">&nbsp;&nbsp;138</span>(Grievance Number)</td>
							</tr>
							<tr>
								<td style="font-size:1.5vw;color:#339966;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i><span style="font-family:Kristen ITC;color:#0055ff;">&nbsp;&nbsp;1800 11 1139</span>(General Inquiry)</td>
							</tr>
							<tr>
								<td style="font-size:1.5vw;color:#339966;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i><span style="font-family:Kristen ITC;color:#0055ff;">&nbsp;&nbsp;1800 11 1322</span>(Railway Police)</td>
							</tr>
							<tr>
								<td style="font-size:1.5vw;color:#339966;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i><span style="font-family:Kristen ITC;color:#0055ff;">&nbsp;&nbsp;182 </span>(Helpline For Children and Women)</td>
							</tr>	
						</table>
						

						
		</div>
		<footer >
		<div class="f1">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2019 Copyright PVT Ltd.</p>	
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