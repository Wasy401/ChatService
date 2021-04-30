<?php
session_start();
include('../model/database_connection.php');
$message = '';
if(isset($_SESSION['user_id']))
{
	header('location:../view/index.php');
}

if(isset($_POST['login']))
{	
				$username=$_POST['username'];
				$password=$_POST['password'];
				$con=mysqli_connect("localhost","root","","tchat");
				mysqli_query($con,"insert into login (username,password) values('$username','$password')"	);
			
	
				$message = '<label> Successfully logged  in</label>';
			
	
	
}


?>