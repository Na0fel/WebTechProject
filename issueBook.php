<?php

include "Controller/issueBookValidation.php";
session_start();
if (!isset($_SESSION["user"])) {
	header("Location: login.php");
}

?>
<html>
	<head></head>
	<body>
		<h1>issue Book</h1>
		<form action="" method="post">
			<table>

				 <tr>
                    <td><span>Username</span></td>
                    <td>:<input type="text" name="uname" value="<?php echo $uname; ?>" placeholder="<?php echo $uname; ?>">
                        <span><?php echo $err_uname; ?></span></br>
                    </td>

                </tr>

                <tr>
                    <td><span>Book Name</span></td>
                    <td>:<input type="text" name="bname" value="<?php echo $bname; ?>" placeholder="<?php echo $bname; ?>">
                        <span><?php echo $err_bname; ?></span></br>
                    </td>

                </tr>
				
				
				<tr>
                    <td><span>Issue Date</span></td>
                    <td>:
                        <input type="text" name="dat" value="<?php echo $dat; ?>">
                           
                        <span><?php echo $err_dat; ?></span>
                    </td>
                </tr>

                
				
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
				
			</table>
		</form>

	
		
		