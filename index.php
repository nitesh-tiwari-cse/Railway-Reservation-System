<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
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
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>

       <style type="text/css">
       	.r1:hover ,.r2:hover ,.r3:hover ,.r4:hover ,.r5:hover ,.r6:hover 
       	{
           opacity:0.8;
       	}
       </style>
	
	
	
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
			 echo "<b>Welcome,</b>".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 ?>
				<a href="login1.php" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.php?value=0" class="btn btn-info">Signup</a><br/><br/>&nbsp;&nbsp;
				<a href="helpline.php" target="_blank"><img src="images/help.png" alt="helpline" width="150" height="100"></a>
			<?php } ?>
			
			
			</div>
			<div id="heading">
				<a href="https://www.gettyimages.in/photos/indian-railways?sort=mostpopular&mediatype=photography&phrase=indian%20railways">Indian Railways</a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="reservation.php">RESERVATION</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="contact.php">CONTACT</a>
				<a class="brand" href="about.php">ABOUT</a>
				</div>
			</div>
		</div>
		<div class="span12 well">
			<!-- Photos slider -->
			<div id="myCarousel" class="carousel slide" style="width:600px; float:left;margin-bottom:3px;">		
				<div class="carousel-inner">
				<div class="active item"><img alt="Railway1" src="images/ac1.gif" style="width:600px;height:350px;"/></div>
				<div class="item"><img alt="Railway2" src="images/bg1.jpg" style="width:600px;height:350px;"/> </div>
				<div class="item"><img alt="Railway3" src="images/bg2.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img alt="Railway4" src="images/bg3.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img alt="Railway5" src="images/bg4.jpg" style="width:600px;height:350px;"/> </div>
				<div class="item"><img alt="Railway6" src="images/bg5.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img alt="Railway7" src="images/bg6.jpg" style="width:600px;height:350px;"/></div>
				
				</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
			<!-- News and Alert-->
			<div class="news" style="float:right;border-radius:4px;">
				

			<marquee behavior="scroll" id="marq"  scrollamount=3 direction="up" height="294px" onmouseover="nestop()" onmouseout="nestrt()">
				<div>
				
				<p style="color:red;"><b>"Free Wi-Fi at all 6000 stations in next 120 days,assures Rail Minister Piyush Goyal"</b></p><br/>
				<p style="color:#6912f3;"><b>"There is no proposal to extend to mail/express and superfast trains the flexi-fares currently applicable only to Rajdhani, Shatabdi and Duronto trains,  said Railways Minister Piyush Goyal."</b></p>
				<br/>
				<p style="color:blue;"><b>"The Railway ministry has posted the rate list on its Twitter account while asking people to lodge a complaint if they are overcharged."</b></p><br/>
				<p style="color:blue;"><b>"The Comptroller and Auditor General (CAG) has asked the railways to revise passenger fares and curtail concessional passes to recover its operating cost in a phased manner".</b></p><br/>
				<p style="color:blue;"><b>"Railway issues new catering policy for better food."</b></p><br/>
				<p style="color:blue;"><b>"Passengers will now be involved in judging cleanliness level of popular trains including Rajdhani, Shatabdi and Duronto as well as major stations across the country.</b></p><br/>

			
				
				</div>
			</marquee>
			</div>
		</div>
		<br/><br/>
		<!-- first image -->
		<div>
			<h4 align="center" style="font-size:1.5vw;color: white;text-shadow: 1px 1px 2px black,0 0 10px black,0 0 5px darkblue;"><strong>SPECIAL TRAINS</strong></h4><br/>
			<span >
				
				&nbsp;&nbsp;&nbsp;&nbsp;<img class="r1" src="images/bg2.jpg" alt="rajdhani express" style="width:30%;height:40%;border:3px solid grey;border-radius: 10px;
                          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.5);"/>

			    
			</span>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<span >
				<img src="images/bg3.jpg" class="r2" alt="gatimaan express" style="width:30%;height:40%;border:3px solid grey;border-radius: 10px;
                    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.5);"/>
				
			</span>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<span>
				
				<img src="images/bg6.jpg" class="r3" alt="bhopal shatabdi" style="width:30%;height:40%;border:3px solid grey;border-radius: 10px;
                    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.5);"/>
			</span>
		</div>
		<br/><br/>
          <!--  second image -->
			<div>

			
			<span >
				
				&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/r9.jpg"  class="r4" alt="howrah rajdhani" style="width:30%;height:40%;border:3px solid grey;border-radius: 10px;
                   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.5);"/>  
			</span>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<span >
				<img src="images/r3.png"  class="r5" alt="sealdah duronto" style="width:30%;height:40%;border:3px solid grey;border-radius: 10px;
                       box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.5);"/>
				
			</span>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<span >
				
				<img src="images/r12.jpg" class="r6" alt=" garib rath" style="width:30%;height:40%;border:3px solid grey;border-radius: 10px;
                       box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.5);"/>
			</span>
			

		</div>
		<span style="position:relative;top:-250px;left:70px;font-size:1.8vw;color:white;text-shadow: 1px 1px 2px blue,0 0 10px black,0 0 5px darkblue;"><b><a href="https://www.ndtv.com/topic/rajdhani-express" target="_blank" style="color: white;" title="click here">Rajdhani Express</a></b></span>&nbsp;&nbsp;

		<span style="position:relative;top:-250px;left:200px;font-size:1.8vw;color:white;text-shadow: 1px 1px 2px blue,0 0 10px black,0 0 5px darkblue;"><b><a href="https://www.ndtv.com/topic/gatimaan-express" target="_blank" style="color: white;" title="click here">Gatimaan Express</a></b></span>

		<span style="position:relative;top:-250px;left:330px;font-size:1.8vw;color:white;text-shadow: 1px 1px 2px blue,0 0 10px black,0 0 5px darkblue;"><b><a href="https://www.ndtv.com/topic/bhopal-shatabdi" target="_blank" style="color: white;" title="click here">Bhopal Shatabdi</a></b></span>

		<span style="position:relative;top:-30px;left:-540px;font-size:1.8vw;color:white;text-shadow: 1px 1px 2px blue,0 0 10px black,0 0 5px darkblue;"><b><a href="https://www.ndtv.com/topic/howrah-rajdhani" target="_blank" style="color: white;" title="click here">Howrah Rajdhani</a></b></span>&nbsp;&nbsp;

		<span style="position:relative;top:-60px;left:420px;font-size:1.8vw;color:white;text-shadow: 1px 1px 2px blue,0 0 10px black,0 0 5px darkblue;"><b><a href="https://timesofindia.indiatimes.com/topic/Sealdah-Duronto" style="color: white;" target="_blank" title="click here">Sealdah_Duronto</a></b></span>

		<span style="position:relative;top:-60px;left:590px;font-size:1.8vw;color:white;text-shadow: 1px 1px 2px blue,0 0 10px black,0 0 5px darkblue;"><b><a href="https://www.ndtv.com/topic/garib%20rath" target="_blank" style="color: white;" target="_blank" title="click here"> Garib Rath</a></b></span>
				
	<a href="#top" style="position:relative;left:650px;font-size: 30px;"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></a>
	<script type="text/javascript">
		$("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
	</script>
		<!-- Copyright -->
<footer >
		<div class="f1">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2021 Copyright PVT Ltd.</p>
			</div>
			<div style="float:right;">
			<p class="text-right text-info">
				<span><a style="border-right: 2px solid " href="Admin/adminlogin.php" target="_blank"><b>Admin</b>&nbsp;&nbsp;</a></span>
			 Follow On:
				<span><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>&nbsp;
				<span><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter " aria-hidden="true"></i></a></span>&nbsp;
				<span><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
</p>
			</div>
		</div>
		</footer>	</div>
</body>
</html>



<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>