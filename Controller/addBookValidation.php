<?php

require_once "Model/db_config.php";
 
 $bname = "";
 $err_bname = "";
 $aname = "";
 $err_aname = "";
 $i_rent ="";
 $err_i_rent ="";
 $bsumm="";
 $err_bsumm="";
 $qty="";
 $err_qty="";
 $check="";
 $err_check="";

 $hasError = false;


if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST["submit"])){

		 if(empty($_POST["bname"])){
			$err_bname="Book Name Required";
			 $hasError = true;
		}
		else{
			
			$bname=$_POST["bname"];
			
		}


		 if(empty($_POST["aname"])){
			$err_aname="Author Name Required";
			 $hasError = true;
		}
		else{
			
			$aname=$_POST["aname"];
		
		}

		if(empty($_POST["Genres"])){
			$err_check="Book Genre Required";
			 $hasError = true;
		}else{
			$check=implode(',',$_POST["Genres"]);
		}


		if(empty($_POST["bsumm"])){
			$err_bsumm="Book Summary Required";
			 $hasError = true;
		}else{
			$bsumm=$_POST["bsumm"];
		}

		if (empty($_POST["i_rent"])) {
            $err_i_rent = "Fill this field";
            $hasError = true;
        } 
        elseif (!is_numeric($_POST["i_rent"])) {
            $err_i_rent = "Give only numeric values";
            $hasError = true;
        }
        else{
			
			$i_rent=$_POST["i_rent"];
			
		}


		if (empty($_POST["qty"])) {
            $err_qty = "Fill this field";
            $hasError = true;
        } 
        elseif (!is_numeric($_POST["qty"])) {
            $err_qty = "Give only numeric values";
            $hasError = true;
        }
         else{
			
			$qty=$_POST["qty"];
			
		}
        

        if(!$hasError){
                $query="INSERT INTO books (BookID, BookName, AuthorName, BookGenre, BookSummary, IssueRent, Quantity) VALUES (NULL, '$bname', '$aname', '$check', '$bsumm', '$i_rent', '$qty');";
                $result = execute($query);


				 $bname = "";
				 $err_bname = "";
				 $aname = "";
				 $err_aname = "";
				 $i_rent ="";
				 $err_i_rent ="";
				 $bsumm="";
				 $err_bsumm="";
				 $qty="";
				 $err_qty="";
				 $check="";
				 $err_check="";

            }
            
        }
    }
 		

	
	?>