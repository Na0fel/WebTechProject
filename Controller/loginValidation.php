<?php
require_once "Model/db_config.php";
$uname = "";
$err_uname = "";
$pass = "";
$err_pass = "";
$type = "";
$uid = "";

$hasError = false;
if (isset($_POST["submit"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["pass"])) {
            $err_pass = "Please enter your password";
            $hasError = true;
        } else {
            $pass = htmlspecialchars($_POST["pass"]);
        }
        if (empty($_POST["uname"])) {
            $err_uname = "Please enter your user name";
            $hasError = true;
        } else {
            $uname = htmlspecialchars($_POST["uname"]);
        }


        if (!$hasError) {
            $query = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
            $result = get($query);

            if (count($result) > 0) {

                    $row = $result[0];
                    $type = $row['usertype'];

                if ($type == "librarian") {
                    session_start();
                    //$_SESSION["id"] = $id;
                    //$_SESSION["usertype"] = "librarian";
                    $_SESSION["user"] = $uname;
                    $uname = "";
                    $err_uname = "";
                    $pass = "";
                    $err_pass = "";
                    header("Location:dashboard.php");
                } else {
                    echo "You are Not Eligible to login here";
                }
            }

        }
    }
}
?>