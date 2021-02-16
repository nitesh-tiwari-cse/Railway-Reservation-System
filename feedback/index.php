<?php
date_default_timezone_set('Asia/calcutta');

require 'action.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Feedback</title>
	<meta  http-equiv="content-Type" content="text/html" charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1,user-scalable=0"/>
    <meta name="description" content="global"/>
    <meta name="author" content="Anupam Tiwari"/>
    <meta name="distribution" content="global"/>
    <meta http-equiv="X-UA-compatible" content="IE=edge,chrome=1"/>
    <style type="text/css">
    	body
    	{
    		background-image: url(feedback.gif);
    	}
    </style>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"></link>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"></link>

</head>
<body background="images/feedback.gif">
	<div class="container">
	<div class="row justify-content-center mb-2">
		<div class="col-lg-5 bg-light rounded mt-2">
			<h4 class="text-center p-2">Write your comment!</h4>
			<form action="index.php" method="POST" class="p-2">
				<input type="hidden" name="id" value="<?= $u_id; ?>" >
				
				<div class="form-group">
				<input type="text" name="name" class="form-control rounded-0" placeholder="Enter your name" required autocomplete="off" value="<?= $u_name; ?>">
			</div>
			<div class="form-group">
				<textarea name="comment" class="form-control rounded-0" placeholder="Write your comment here" required autocomplete="off"><?= $u_comment; ?></textarea>
			</div>
			<div class="form-group">
				<?php if($update==true){?>
                 <input type="submit" name="update" class="btn btn-success rounded-0" value="Update Comment">
             <?php } else {?>
				<input type="submit" name="submit" class="btn btn-primary rounded-0" value="Post Comment">
			<?php } ?>
				<h6 class="float-right text-success p-2"><?= $msg ?></h6>
		</div>
			</form>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-lg-5 rounded bg-light p-3">
			<?php
			$sql="SELECT * FROM feedback_table ORDER BY id DESC";
			$result=$conn->query($sql);
			while($row=$result->fetch_assoc()){
			?>
			<div class="card mb-2 border-secondary">
				<div class="card-header bg-secondary py-1 text-light">
					<span class="font-italic">Posted By : <?= $row['name'] ?></span>
					<span class="float-right font-italic">On:<?= $row['cur_date']?>&nbsp;&nbsp;<?php echo date("h:i:s A");?></span>

				</div>
				<div class="card-body py-2">
					<p class="card-text"><?= $row['comment'] ?></p>
				</div>
				<div class="card-footer py-2">
					<div class="float-right">
						<a href="action.php?del=<?= $row['id'] ?>" class="text-danger mr-2" onclick="return confirm('Do you want to delete this comment?');" title="Delete"><i class="fas fa-trash"></i></a>
						<a href="index.php?edit=<?= $row['id'] ?>" class="text-success" title="Edit"><i class="fas fa-edit"></i></a>
				</div>
			</div>
		</div>
 <?php }?>
	</div>
</div>
</div>
</body>
</html>