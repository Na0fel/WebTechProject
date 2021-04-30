<?php

include "Controller/loginValidation.php"

?>
<html>
	<head></head>
	<body>
		<form action=""  method="post">
			<input type="text" name="uname" placeholder="username"><br><br>
			<span><?php echo $err_uname;?></span></td>
			<input type="password" name="pass" placeholder="password"><br><br>
			<span><?php echo $err_pass;?></span></td>
			<input type="submit" name="submit" value="Login">

		</form>
	</body>
</html>