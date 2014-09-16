<!DOCTYPE html>
<?php
	$email = $_POST["email"];
	$fh = fopen("email.txt", "a");
	fwrite($fh, $email."\n");
	fclose($fh);
	
	$host = 'localhost';
	$user = 'root';
	$pw = '';
	$db = 'smockish';
	
	$dbc = mysqli_connect($host, $user, $pw, $db)
	or die('Unable to connect to DB! Process aborted...');

	$email = $_POST['email'];
	
	$query = "INSERT INTO email(email)" . 
	"VALUES('$email')";
	
	$result = mysqli_query($dbc, $query)
	or die('Unable to write to DB! Process aborted...');

	mysqli_close($dbc);
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Email Testing Page</title>
</head>
<body> 
<div><p style="font-size:500%; text-align:center;">E-mail successfully entered into database!</p></div>
</body>
</html>