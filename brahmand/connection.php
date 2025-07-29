<?php
$servername="localhost";
$username="root";
$password="";
$dbname="brahmand";

//to create connection
$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
//echo "connection Sucess";
}
else 
{
//die("connection failed ".mysqli_connect_error());
}

?>