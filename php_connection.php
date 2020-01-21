<!--database connection function-->
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="doctors_appointment";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}
//echo "connected successfully";
?>