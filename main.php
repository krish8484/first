<?php  
session_start();


 

if (isset($_POST['email']) and isset($_POST['password']))
	{	$_SESSION["email1"]=$_POST['email'];

		require('database_connection.php');

		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordd=md5($password);

		$query = "SELECT * FROM `users` WHERE email='$email' and Password='$passwordd'";
 
		$result = mysqli_query($con, $query) or die(mysqli_error($con));
		$count = mysqli_num_rows($result);

		if ($count == 1)
			{
				echo '<p align=center><a href="add.php">ADD BLOG</a> </p> ';
				echo '<p align=center><a href="display.php">READ BLOGS</a> </p> ';
				$_SESSION["email2"]=$_POST['email'];
			}
		else
			{
				echo "<p align=center>Login Failed </p> ";
			}
	}
	else
	{

 require('database_connection.php');
	}

?>