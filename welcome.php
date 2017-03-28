<!doctype html>

<?php
if(isset($_COOKIE["User_info"])){
	$info = explode(",", $_COOKIE["User_info"]);
	$first = $info[0];
	$last = $info[1];
	$user_email = $info[2];

	?>
		<div id="cookie_info">
			<p>  
			Hi, <?php echo $first?> <?php echo $last?>, you 
			recently signed up with the email address: <?php echo $user_email?>, thank you!
			</p>
		</div>
<?php } 
else{ ?>
	
	<h1>Information</h1>
	<div id="form_location">
		<form name="quizform" method="post" action="register.php">
			First Name:<br>
			<input type="text" name="firstname"><br>
			Last Name:<br>
			<input type="text" name="lastname"><br>
			Email Address:<br>
			<input type="email" name="email"><br><br>
			<input type="submit" value="Submit">
		</form>
	</div>;
<?php }
?>


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Quiz 2</title>
		<link rel="Stylesheet" type="text/css" href="css/quizStyle.css"/>
	</head>
</html>
	