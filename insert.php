<?php  
	require('database_connection.php');

	if (isset($_POST['name']) and isset($_POST['age']) and isset($_POST['email']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['password1']))
		{	 
			$name = $_POST['name'];
			$age = $_POST['age'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$password1 = $_POST['password1'];
			$number = $_POST['phone'];
			
			$query1 = "SELECT * FROM `users` WHERE email='$email'";
			$result1 = mysqli_query($con, $query1);
			$count1 = mysqli_num_rows($result1);
			
			if($count1>0)
				{
					echo "<p align=center>Email Already Exists </p> ";
				}
							
			else if($password!=$password1)
				{
					echo ' <script type="text/javascript">
							alert("Password do not match.Register again");
							</script>
								';
				}
			else
				{
					$passwordd=md5($password);
							
					$query="INSERT INTO `users`(`Name`, `Age`, `Password`, `Email`,`Phone Number`) VALUES ('$name','$age','$passwordd','$email','$number')";
									
					$run=mysqli_query($con,$query);
					
					if($run==TRUE)
						{
							echo "<p align=center>Congratulations, Registration Successful</p> ";
							echo '<a href="index.php">Login Here</a>';
						}
					else
						{
							echo "<p align=center>Registration Failed</p> ";
						}
				}
				
		}
?>