<?php

session_start();
if (!isset($_SESSION["user"])) {
	header("Location: login.php");


}



?>
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     
     
</head>
</head>
<body>
<div class="center-search">
    <legend><h1>  Search Book</h1></legend>
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
   <div class="row">
   <?php $connection  =  new mysqli('localhost','root','','librarian');
   if(isset($_POST['search'])) {
	  $searchKey=$_POST['search'];
	  $sql = "SELECT * FROM issue_book WHERE Username = '$searchKey'";
   } else { 
           $sql = "SELECT * FROM issue_book";
           $searchKey = "";
   
   }
	   
     $result = mysqli_query($connection,$sql);
   
   ?>
   <form action="" method="POST"> 
     <div class="col-md-6">
        <input type="text" name="search" class='form-control' placeholder="Search By Name" value="<?php echo $searchKey; ?>" > 
     </div>
     <div class="col-md-6 text-left">
        <button class="btn">Search</button>
     </div>
   </form>
   <br>
   <br>
   </div>

   <table class="table table-bordered">
     <tr>
        <th>Username</th>
        <th>Book Name</th>
       <th>Issued On</th>
	   
     <tr>
	 <?php while($row = mysqli_fetch_object($result)) {?>
     <tr>
       <td><?php echo $row->Username ?></td>
       <td><?php echo $row->BookName ?></td>
       <td><?php echo $row->IssueDate ?></td>
        <?php } ?>
	   
        </tr>
	    
        </table>

        </div>
      </div>
     </div>
         
</body>
</html>