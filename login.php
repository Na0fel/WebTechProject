<?php

include "Controller/loginValidation.php"

?>
<html>
	<head>
		<style>


			legend
			{
				  background-color: gray;
                  color: white;
                  padding: 5px 10px;
			}
			

            Fieldset
            {
                 background-color: #eeeeee;

                 width: 20%;
                 text-align: center;

             }

             .fLog
             {
             	margin-top: 50px;
             	margin-left: 40%;
             	margin-right: 40%;



             }


            
		</style>		
	</head>
	<body>
		<div class="fLog"> 
		<form  action=""  method="post">
			<Fieldset >
			<legend >Login:</legend>
			<input type="text" name="uname" placeholder="username"><br><br>
			<span><?php echo $err_uname;?></span></td>
			<input type="password" name="pass" placeholder="password"><br><br>
			<span><?php echo $err_pass;?></span></td>
			<input type="submit" name="submit" value="Login">
			</Fieldset>

		</form>

		</div>
	</body>
</html>