<!doctype html>

<?php
$cookie_name="User_info";
$user_first_name= $_POST["firstname"];
$user_last_name= $_POST["lastname"];
$user_email= $_POST["email"];

setcookie($cookie_name, $user_first_name  . "," . $user_last_name . "," . $user_email);

?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Quiz 2</title>
		<link rel="Stylesheet" type="text/css" href="css/quizStyle.css"/>
	</head>
	
	<body>
		<div id="response">
			Welcome <?php echo $user_first_name?> <?php echo $user_last_name?><br>
			Your email adress is: <?php echo $user_email; ?>
		</div>
	</body>
</html>