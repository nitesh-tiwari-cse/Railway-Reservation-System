<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
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
			<div>
			<div id="heading">
				<a href="#">Indian Railways</a>
			</div>
			</div>
		</div>
		
		<div align="center">
		
				
			<br />
			<br />
		<div  class=" well login">
			<form class="form-signin " method="post" action="alogin.php">
		
			<table class="table" style="margin-bottom:4px;">
			<img src="admin.jpg" alt="admin logo">

			<tr>

			<td style="border-top:0px;"><br/><label> Admin_name</label></td>
			<td style="border-top:0px;"><br/> <input type="text" name="admin" id="name" class="input-block-level" placeholder="admin name" autocomplete="off"></td>
			</tr>
			<tr >
			<td style="border-top:0px;"> <label>Password</label></td>
			<td style="border-top:0px;"><input type="password" name="psd" id="pass" class="input-block-level" placeholder="password" autocomplete="off"></td>
			</tr>
			
			<td colspan=2 style="border-top:0px; visibility:hidden;" id="wrong"  class="label label-important">Adminname and/or Password Wrong !!!</td>
			</tr>
			<tr>
			<td style="border-top:0px;"></td>
			<td style="border-top:0px;"> <input class="btn btn-info" type="submit" value="Login"></td>
			</tr>
			</table>
			</form>

		</div>
		</div>
		<br/>
			<br/>

	</div>
</body>
</html>
<?php
if(isset($_SESSION['error']))
{
if($_SESSION['error']==1)
echo "<script>document.getElementById(\"wrong\").style.visibility=\"\";</script>";
session_destroy();
}

?>	