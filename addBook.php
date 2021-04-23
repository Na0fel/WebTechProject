<?php

include "Controller/addBookValidation.php";
session_start();
if (!isset($_SESSION["user"])) {
	header("Location: login.php");
}

?>


<html>
	<head></head>
	<body>
		<h1>Add Book</h1>
		<form action="" method="post">
			<table>

				 <tr>
                    <td><span>Name</span></td>
                    <td>:<input type="text" name="bname" value="<?php echo $bname; ?>" placeholder="<?php echo $bname; ?>">
                        <span><?php echo $err_bname; ?></span></br>
                    </td>

                </tr>

                <tr>
                    <td><span>Author Name</span></td>
                    <td>:<input type="text" name="aname" value="<?php echo $aname; ?>" placeholder="<?php echo $aname; ?>">
                        <span><?php echo $err_aname; ?></span></br>
                    </td>

                </tr>

				<tr>
					<td><span>Book Genre</span></td>
					<td>: 
					<input type="checkbox" value="Literature" name="Genres[]"> Literature 
					<input type="checkbox" value="Sci-Fi" name="Genres[]"> Sci-Fi 
					<input type="checkbox" value="History" name="Genres[]"> History 
					<input type="checkbox" value="Biography" name="Genres[]"> Biography</br>
				     <span><?php echo $err_check; ?></span></td>
				</tr>
				
				<tr>
					<td><span>Book Summary</span></td>
					<td>:<textarea name="bsumm"><?php echo $bsumm;?></textarea>
					<span><?php echo $err_bsumm;?></span></td>
				</tr>
				<tr>

				
				
				<tr>
                    <td><span>Issueing Rent</span></td>
                    <td>:
                        <input type="text" name="i_rent" value="<?php echo $i_rent; ?>"
                            placeholder="<?php echo $i_rent; ?>">
                        <span><?php echo $err_i_rent; ?></span>
                    </td>
                </tr>

                <tr>
                    <td><span>Quantity</span></td>
                    <td>:
                        <input type="text" name="qty" value="<?php echo $qty; ?>"
                            placeholder="<?php echo $qty; ?>">
                        <span><?php echo $err_qty; ?></span>
                    </td>
                </tr>

				
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
				
			</table>
		</form>
		
		
		