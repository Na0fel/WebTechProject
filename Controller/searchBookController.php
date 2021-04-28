
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

<?php

require_once "Model/db_config.php";
$bname ="";

if (isset($_GET['bname'])) {
	
$bname =$_GET['bname'];
}
$query="SELECT * FROM issue_book WHERE BookName = '".$bname."'";
$result = get($query);

echo "<table>
<tr>
<th>Username</th>
<th>Book Name</th>
<th>Issue Date</th>

</tr>";
if(count($result) > 0)
 {
  echo "<tr>";
  echo "<td>" . $row['Username'] . "</td>";
  echo "<td>" . $row['BookName'] . "</td>";
  echo "<td>" . $row['IssueDate'] . "</td>";

  echo "</tr>";
}
echo "</table>";

?>
</body>
</html>