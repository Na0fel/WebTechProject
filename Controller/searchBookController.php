
<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<script> 
	function getAllLibrarians(){
		$query = "SELECT * FROM librarian";
		$result = get($query);
		return $result;
	}
	function getLibrarian($id){
		$query = "SELECT * FROM librarian WHERE id=$id";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}

<?php

require_once "Model/db_config.php";
$bname ="";

if (isset($_GET['bname'])){
	
$bname =$_GET['bname'];

$query="SELECT * FROM issue_book WHERE BookName = '".$bname."'";
$result = get($query);

	return $result;
}



echo "<table>
<tr>
<th>Username</th>
<th>Book Name</th>
<th>Issue Date</th>
</tr>";
 while($row = mysqli_fetch_object($result)) 
 {
  echo "<tr>";
  echo "<td>" . $row['Username'] . "</td>";
  echo "<td>" . $row['BookName'] . "</td>";
  echo "<td>" . $row['IssueDate'] . "</td>";

  echo "</tr>";
}
echo "</table>";
?>
</script>
</body>
</html>
