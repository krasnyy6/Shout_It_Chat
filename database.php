<?php 
//Connect to MySQL
$con=mysqli_connect("localhost","root","","showit");

//TestConnection
if(mysqli_connect_errno())
{
	echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}




?>