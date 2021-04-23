<?php
$uname="";
$pass="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$uname=$_POST["uname"];
	$pass=$_POST["pass"];
	if ($uname == "naofel" && $pass == "123456") {
		session_start();
		$_SESSION["user"]=$uname;
		header("Location: Dashboard.php");
	}
}

?>
<html>
	<head></head>
	<body>
		<form action=""  method="post">
			<input type="text" name="uname" placeholder="username"><br><br>
			<input type="password" name="pass" placeholder="password"><br><br>
			<input type="submit" value="Login">

		</form>
	</body>
</html>