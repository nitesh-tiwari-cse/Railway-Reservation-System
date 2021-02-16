<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> About</title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</link>
	
	<link href="css/Default.css" rel="stylesheet">
	</link>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
	
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
			<?php
			 if(isset($_SESSION['name']))
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 }
			?>
			</div>
			<div id="heading">
				<a href="index.php">Indian Railways</a>
			</div>
			</div>
		</div>
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse" >
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="reservation.php">NEW BOOKING</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="contact.php">CONTACT</a>
				

				</div>
			</div>
		</div>
		
		<br/>
		<br/>
		
		<div align="center">
			<div  style="font-size:36px; font-family:'Viner Hand ITC';" > About Me &nbsp;  
					<hr  style="border-bottom:1px solid #A0A0A0; border-top:1px solid #A0A0A0; width:500px;" />
				</div>
				<table style="padding:5px;">
							<img style="border-radius:50%;"   />
							<h5 >Designed and Developed By<h5>
								<h1 align="center" style="font-size:2vw;color:#2196f3">Nitesh Ashok Tiwari</h1>
							<tr>
								<td ><b> Profession &nbsp;</b> </td>
								<td style="font-family:Kristen ITC;"> :&nbsp; B.E.(Computer Engineering) </td>
							</tr>
							<tr>
								<td ><b> University &nbsp;</b> </td>
								<td style="font-family:Kristen ITC;"> :&nbsp;  University of Mumbai </td>
							</tr>
							
							<tr>
								<td ><b> Contact No. &nbsp;</b> </td>
								<td style="font-family:Kristen ITC;"> :&nbsp;+91 8928250285 </td>
							</tr>
							<tr>
								<td ><b> Email &nbsp;</b> </td>
								<td style="font-family:Kristen ITC;"> :&nbsp; niteshtiwari1971@gmail.com</td>
							</tr>	
						</table>
						<br/>
						<br/>
						<div>
							<div>
						<a href="feedback/index.php" title="click here for feedback" class="btn btn-info"> View user feedback &nbsp;<i class="fa fa-commenting-o" aria-hidden="true"></i></a><br/>
						<br/><br/>




						<div class="span12 well pass1">
							<div style="float: left;border:3px solid grey">
								<h4 >View my location</h4>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.608841332124!2d72.82184801443563!3d19.429299686886154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a96b9634ac7d%3A0x4e35f2817e877195!2sBHASKAR+COMPLEX!5e0!3m2!1sen!2sin!4v1551113467131" width="500" height="300" frameborder="0"  allowfullscreen></iframe>
						</div>
						<div style="float: right;border:3px solid grey;padding:20px;">
							<h4>How to book ticket from this website</h4>
							<video width="350" height="260"  controls>
                            <source src="images/RailwayProject.mp4" type="video/mp4">
                            	<source src="images/RailwayProject.mp4" type="video/ogg">

                            </video>

						</div> 
						<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cbe79c5c1fe2560f3000af3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
		</div>
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