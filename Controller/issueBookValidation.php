<?php

require_once "Model/db_config.php";
 $date= "";
 $uname = "";
 $err_uname = "";
 $bname = "";
 $err_bname = "";
 $dat="";
 $err_dat="";


 $hasError = false;


if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST["submit"])){

		  if(empty($_POST["uname"])){
			$err_uname="Username Required";
			 $hasError = true;
		}
		else{
			
			$uname=$_POST["uname"];
		
		}
 


		 if(empty($_POST["bname"])){
			$err_bname="Book Name Required";
			 $hasError = true;
		}
		else{
			
			$bname=$_POST["bname"];
			
		}

		
		}
		 
		
	     if(empty($_POST['dat']))
			$err_dat = "You must supply  date";
		
		else if (!empty($_POST['dat'])){   
			   
			    $dat = $_POST['dat'];
			    

                $array= explode("/",$dat);

			    $day = $array[1];
			    $month = $array[0];
			    $year = $array[2];
			    
			     if(!checkdate($month, $day, $year))
			    {
			    $err_dat = "Must be in m/d/y format";
			    }

			}
		
        

        if(!$hasError){
                $query="INSERT INTO issue_book (Username, BookName, IssueDate) VALUES ('$uname','$bname', '$dat')";
                $result = execute($query);


				 $uname = "";
				 $err_uname = "";
				 $bname = "";
				 $err_bname = "";
				 $dat="";
				 $err_dat="";

            }
            
        }
    
 		

	
	?>