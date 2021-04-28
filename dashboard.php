<?php
session_start();
if (!isset($_SESSION["user"])) {
	header("Location: login.php");
}


?>
<html>
	<head></head>
	<body>
	<h1>Welcome <?php echo $_SESSION["user"];?></h1>	
	<a href="addBook.php">Add Book</a>
	<a href="addmember.php">Add Member</a>
	<a href="issueBook.php">Issue Book</a>
	<a href="searchBook.php">Search Book</a>
	<a href="searchMember.php">Search Member</a>
	
	</body>
</html>