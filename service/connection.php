
<?php
$host="localhost";
$user="root";
$pass="";
$db = "reportsystem";
$conn = mysqli_connect($host,$user,$pass,$db);
if(!$conn){
die("Connection Error".mysql_error());
}

  
?>
