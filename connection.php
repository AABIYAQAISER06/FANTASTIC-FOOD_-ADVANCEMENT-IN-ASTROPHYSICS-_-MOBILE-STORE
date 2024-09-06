<?php

error_reporting(0);
$servername= "localhost";
$usename= "root";
$password= "";
$dbname= "form";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
   echo "connection is ok";
}
else
{
	echo "connection failed".mysqli_connect_error();
}

?>
