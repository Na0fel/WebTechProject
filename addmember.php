<?php

include "Controller\li_addMemberController.php";

session_start();
if (!isset($_SESSION["user"])) {
	header("Location: login.php");
}

?>


<html>
	<head></head>
	<body>
		<h1>Member Registration</h1>
		<form action="" method="post">
			<table>

				 <tr>
                    <td><span>Name</span></td>
                    <td>:<input type="text" name="name" value="<?php echo $name; ?>" placeholder="<?php echo $name; ?>">
                        <span><?php echo $err_name; ?></span></br>
                    </td>

                </tr>

                  <tr>
                    <td><span>Institute ID</span></td>
                    <td>:
                        <input type="text" name="iid" value="<?php echo $iid; ?>"
                            placeholder="<?php echo $iid; ?>">
                        <span><?php echo $err_iid; ?></span>
                    </td>
                </tr>

				<tr>
					<td><span >Username</span></td>
					<td>:<input type="text" name="uname" onfocusout="checkUsername(this)"  value="<?php echo $uname;?>" placeholder="Username">
						<span id="err_uname"><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td>:<input type="password" value="<?php echo $pass;?>" name="pass">
					<span><?php echo $err_pass;?></span></td>
				</tr>

				<tr>
                    <td><span>E-mail</span></td>
                    <td>:<input type="text" name="email" value="<?php echo $email; ?>" >
                        <span><?php echo $err_email; ?></span>
                    </td>
                </tr>

				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span> 
					<input type="radio" name="gender" value="Female">Female<br>
				    <span><?php echo $err_gender; ?></span></td>
				</tr>
				<tr>
					<td><span>Favourite Genre</span></td>
					<td>: 
					<input type="checkbox" value="Literature" name="Genres[]"> Literature 
					<input type="checkbox" value="Sci-Fi" name="Genres[]"> Sci-Fi 
					<input type="checkbox" value="History" name="Genres[]"> History 
					<input type="checkbox" value="Biography" name="Genres[]"> Biography</br>
				    <span><?php echo $err_check; ?></span></td>
				</tr>
				
				<tr>
					<td><span>Profession</span></td>
					<td>
						:<select name="profession">
							<option disabled selected>Chose One</option>
							<option>Teacher</option>
							<option>Student</option>
							<option>Admin</option>
						</select>
						<span><?php echo $err_prof; ?></span>
					</td>
				</tr>

				<tr>
                    <td><span>Contact Number</span></td>
                    <td>:
                        <input type="text" name="contact_number" value="<?php echo $contact_number; ?>"
                            placeholder="<?php echo $contact_number; ?>">
                        <span><?php echo $err_contact_number; ?></span>
                    </td>
                </tr>

				
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
				
			</table>
		</form>
		 <script src="JS/li_addMamberValidation.js"></script>
  
		
		