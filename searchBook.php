<?php
include "Controller/searchBookController.php";
session_start();
if (!isset($_SESSION["user"])) {
	header("Location: login.php");


}



?>
<html>
<head>
<script>
function showbook(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","searchIssueBookController.php?bname="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<form>
<select name="bname" onchange="showbook(this.value)">
  <option value="">Select a Book:</option>
  <option value="History 101">History 101</option>
  <option value="English 101">English 101</option>
  <option value="Algorithms">Algorithms</option>
  
  </select>
</form>
<br>
<div id="txtHint"><b>Book info will be listed here...</b></div>

</body>
</html>