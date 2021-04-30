<?php
session_start();
include('../model/database_connection.php');
if(!isset($_SESSION['user_id']))
{
	header("location:../view/login.php");
}
?>