<?php
	session_start();
	require 'firstimport.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title> Add New Train</title>
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
				<a href="#">Indian Railways</a>
			</div>
		</div>
		
		
		<!-- registration form -->
		<div align="center">
		<div class="span12 well">
			
		<div align="center" style="border-bottom: 3px solid #ddd;">
				<h2>New Train Details Addition </h2>
			
			</div>
		<div class="table">
		
		<form  method="post" action="traindata.php">
		<table>
			<tr>
			<td style="border-top:0px;" colspan="2">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="color:#00ccff;font-size: 1.5vw;">Train Detail</b </td>
			
		</tr>
		<tr>
			<td style="border-top:0px;"> Train Number<font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" name="tnumber" maxlength="5"  class="input-block-level" placeholder="Train Number" autocomplete="off" required></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Train Name<font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" name="tname" class="input-block-level" placeholder="Train Name" autocomplete="off" required></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Origin <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" name="origin" class="input-block-level" placeholder="Origin" autocomplete="off" required></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Destination<font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" class="input-block-level" name="dest" placeholder="Destination" autocomplete="off" required></td>
		</tr>
		<tr>
			<td style="border-top:0px;">Arrival<font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" class="input-block-level" name="arrival" placeholder="Arrival" autocomplete="off" required></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Departure<font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" class="input-block-level" name="departure" placeholder="Departure" autocomplete="off" required></td>
		</tr>
		<tr>
			<td style="border-top:0px;" colspan="2">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="color:#00ccff;font-size: 1.5vw;">Running Day</b </td>
			
		</tr>
		<tr>
			<td style="border-top:0px;"> Monday<font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="mon">
				<option value="Y">Y</option>
				<option value="N">N</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;">Tuesday<font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="tue">
				<option value="Y">Y</option>
				<option value="N">N</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Wednesday<font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="wed">
				<option value="Y">Y</option>
				<option value="N">N</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;">Thrusday<font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="thr">
				<option value="Y">Y</option>
				<option value="N">N</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;">Friday<font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="fri">
				<option value="Y">Y</option>
				<option value="N">N</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;">Saturaday<font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="sat">
				<option value="Y">Y</option>
				<option value="N">N</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Sunday<font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="sun">
				<option value="Y">Y</option>
				<option value="N">N</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;" colspan="2">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="color:#00ccff;font-size: 1.5vw;">Coach Fair</b </td>
			
		</tr>
		<tr>
			<td style="border-top:0px;">First AC<font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="1ac">
				<option value="4000">4000</option>
				<option value="3000">3000</option>
				<option value="2500">2500</option>
				<option value="1000">1000</option>
				<option value="500">500</option>
				<option value="250">250</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;">Second AC<font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="2ac">
				<option value="4000">4000</option>
				<option value="3000">3000</option>
				<option value="2500">2500</option>
				<option value="1000">1000</option>
				<option value="500">500</option>
				<option value="250">250</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;">Third AC<font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="3ac">
				<option value="4000">4000</option>
				<option value="3000">3000</option>
				<option value="2500">2500</option>
				<option value="1000">1000</option>
				<option value="500">500</option>
				<option value="250">250</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;">Sleeper Class<font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="sl">
				<option value="4000">4000</option>
				<option value="3000">3000</option>
				<option value="2500">2500</option>
				<option value="1000">1000</option>
				<option value="500">500</option>
				<option value="250">250</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;" colspan="2">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="color:#00ccff;font-size: 1.5vw;">Quota Seat</b </td>
			
		</tr>
		<tr>
			<td style="border-top:0px;">General<font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="gen">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;">Ladies<font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="lad">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;">Tatkal<font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="tak">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			    </select>
			</td>
		</tr>
		<br/><br/><br/>
		<tr>
			<td style="border-top:0px;"><input class="btn btn-info" type="submit" name ="submit" value="Add"  ></td>
			<td style="border-top:0px;"><input class="btn btn-info" type="reset" name="reset" value="Reset"></td>
		</tr>
		</table>
		</form>
		</div>
		</div>
		</div>
	</div>

</body>
</html>