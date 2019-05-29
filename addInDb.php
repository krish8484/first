<?php  
	require('database_connection.php');
	
	if (isset($_POST['blog_name']) and isset($_POST['blog_link']))
		{	 
			$blog_name = $_POST['blog_name'];
			$blog_link = $_POST['blog_link'];
			$author = $_POST['author'];
			
			$qq="INSERT INTO `blogs`( `Name of Blog`, `Link`, `Author`) VALUES ('$blog_name','$blog_link','$author')";
			
			$rr = mysqli_query($con, $qq) or die(mysqli_error($con));
			
					if($rr==TRUE)
						{
							echo "<p align=center>Congratulations, Blog Added</p> ";
							
							$qq1="SELECT `Points` FROM `users` WHERE email='$author'";
							$rr1 = mysqli_query($con, $qq1);
							$row = mysqli_fetch_row($rr1);
							
							$pp1=$row[0]+10; 
							
							$qq2= "UPDATE `users` SET `Points`=$pp1 WHERE email='$author'";
							$rr2 = mysqli_query($con,$qq2);
							echo "<p align=center>Your points are $pp1</p> ";
							
						}
					else
						{
							echo "<p align=center>Blog Addition Failed</p> ";
						}
		}				
?>