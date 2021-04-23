<?php

require_once "Model/db_config.php";


    $name = "";
    $err_name = "";
    $iid = "";
    $err_iid = "";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$email="";
	$err_email="";
	$gender = "";
    $err_gender = "";
	$check="";
	$err_check="";
	$prof="";
    $err_prof="";
	$contact_number = "";
    $err_contact_number = "";

	$hasError=false;

	function validateEmail($email)
{
    $pos_at = strpos($email, "@");
    $pos_dot = strpos($email, ".", $pos_at + 1);
    if ($pos_at < $pos_dot) {
        return true;
    }
    return false;
}

	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST["submit"])){

		 if(empty($_POST["name"])){
			$err_name="Name Required";
		}
		else{
			
			$name=$_POST["name"];
			
		}

		 if (empty($_POST["iid"])) {
            $err_iid = "Please fill this field";
            $hasError = true;
        } 
        elseif (!is_numeric($_POST["iid"])) {
            $err_iid = "This field requires only numeric values";
            $hasError = true;
        }

        else{
        	$iid =$_POST["iid"];
        }


		 if(empty($_POST["uname"])){
			$err_uname="Username Required";
			 $hasError = true;
		}
		elseif(strlen($_POST["uname"]) < 6){
			$err_uname="Username Must be 6 Characters Long";
			 $hasError = true;
		}
		elseif(strpos($_POST["uname"]," ")){
			$err_uname="Username should not contain white space";
			 $hasError = true;
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
			 $hasError = true;
		}
		else{
			$pass=$_POST["pass"];
		}

		 if (empty($_POST["email"])) {
            $err_email = "Email Required";
            $hasError = true;
        }
        elseif(!strpos($_POST["email"],"@")){
            $err_email="Missed @";
            $hasError=true;
    
        }
        elseif (!validateEmail($_POST["email"])) {
            $err_email = "Give a valid email";
            $hasError = true;
        }
        else {
            $email = htmlspecialchars($_POST["email"]);
        }


         if (!isset($_POST["gender"])) {
            $err_gender = "Gender must be selected";
            $hasError = true;
        } 
        else {
            $gender = $_POST["gender"];
        }


         if(empty($_POST["Genres"])){
			$err_check="Select Favourite Genre";
		}else{
			$check=implode(',',$_POST["Genres"]);
		}



         if(empty($_POST["profession"])){
			$err_prof="Profession Required";
		}else{
			$prof=$_POST["profession"];
		}




        if (empty($_POST["contact_number"])) {
            $err_contact_number = "Please fill this field";
            $hasError = true;
        } 
        elseif (!is_numeric($_POST["contact_number"])) {
            $err_contact_number = "Give only numeric values";
            $hasError = true;
        }
        else{
            $contact_number=htmlspecialchars($_POST["contact_number"]);
        }
 		

 		

         if(!$hasError){
                $query="INSERT INTO member (MemberName, InstituteID, Username, Password, Email, Gender, FavGenre, Profession, ContactNum) VALUES ('$name', '$iid', '$uname', '$pass', '$email', '$gender', '$check', '$prof', '$contact_number')";
                $result = execute($query);

			  	$name = "";
			    $err_name = "";
			    $iid = "";
			    $err_iid = "";
				$uname="";
				$err_uname="";
				$pass="";
				$err_pass="";
				$email="";
				$err_email="";
				$gender = "";
    			$err_gender = "";
				$check="";
				$err_check="";
				$prof="";
			    $err_prof="";
				$contact_number = "";
			    $err_contact_number = "";


            }
       
		
	}

	}


		
?>