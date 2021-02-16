<?php
	session_start();
	date_default_timezone_set('Asia/calcutta');
	//Mail
	require "PHPMailerAutoload.php";

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'tiwarianupam1980@gmail.com';//Your Username
	$mail->Password = 'tiwanu99';//Your Password
	$mail->Port = 465;
	$mail->SMTPSecure = "ssl";
	$mail->isHTML(true);
	$mail->setFrom('tiwarianupam1980@gmail.com',"Railway Reservation");
	//Mail

	//Connection
	$con = new mysqli('localhost','root','','railway_database');
	if($con->error)
	{
		die("Failed to connect");
	}
	else
	{
		if(isset($_POST['submit']))
		{
                 $name=$_POST['name'];
                  $email=$_POST['email'];
                   $phone=$_POST['phone'];
                    $subject=$_POST['subject'];
                     $message=$_POST['message'];
                     
			          	$mail->addAddress('tiwarianupam1980@gmail.com');
			          	$mail->Subject=$subject;
			          	$mail->Body="<p><b>Name:</b><br/>".$name."<br/><b>Email:</b><br/>".$email."<br/><b>Phone:</b><br/>".$phone."<br/><b>Message:</b><br/>".$message."</p>";
			          	if($mail->send())
			          	{
			          		echo "Mail send";
			          	}
			          	else
			          	{
			          		echo "Mail not send";
			          	}
			          }
		// payment
		// if(isset($_POST['payment']))
		// {
		// 	$cardname=$_POST['cardname'];
		// 	$email1=$_SESSION['email'];
		// 	$number=$_POST['number'];
		// 	$mail->addAddress($email1);
		// 	$mail->Subject="Bank Message;
		// 	$mail->Body="<p><b>Card Name:</b><br/>".$cardname."<br/><b>Card Number:</b><br/>".$number."<br/></p>";
		// }
	}
	?>

		