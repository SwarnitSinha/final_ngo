<?php
include "include/dbcon.php";

$userid=$_SESSION["userid"];
$password=$_SESSION["password"];
// $check_admin = mysqli_num_rows(mysqli_query($db,"select * from admin where userid = '$userid' and password = '$password'"));

echo "$userid";
echo "    $password";

?>