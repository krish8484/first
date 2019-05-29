<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	if(!isset($_SESSION["email1"]))
		{
			echo "<h1 align='center'>You are not Login</h1>";
			exit();	
		}	
$con = mysqli_connect('localhost', 'root', '');
if (!$con)
	{
		die("Database Connection Failed " . mysqli_error($con));
	}
$select_db = mysqli_select_db($con, 'trf');
if (!$select_db)	
	{
		die("Database Selection Failed" . mysqli_error($con));
	}
?>