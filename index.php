<?php
	session_start();
	if(isset($_SESSION["email2"]))
		{
			echo "<h1 align='center'>You are already Login</h1>";
			exit();	
		}	
	?>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<h1 align="center">Please Login</h1>
		<form action="main.php" method="post">
			<table align="center" style="margin-top:100px;">
				<tr>
					<td>Email ID:</td><td><input type="email" name="email" required="required"/></td>
				</tr>
				<tr>
					<td>Password:</td><td><input type="password" name="password" required="required"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" value="submit"/></td>
				</tr>
				 <td><p>Not Registered? <a href="register.php">Sign up here</a>.</p></td>
			</table>
		</form>
	</body>
</html>	