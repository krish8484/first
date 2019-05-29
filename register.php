<html>
	<head>
		<title>Sign up</title>
	</head>
	<body>
		<h1 align="center">Please Register</h1>
		<form action="insert.php" method="post">
			<table align="center" style="margin-top:100px;">
				<tr>
					<td>Name:</td><td><input type="name" name="name" required="required"/></td>
				</tr>
				<tr>
					<td>Age:</td><td><input type="age" name="age" required="required"/></td>
				</tr>
				<tr>
					<td>Email ID:</td><td><input type="email" name="email" required="required"/></td>
				</tr>
				<tr>
					<td>Password:</td><td><input type="password" name="password" required="required"/></td>
				</tr>
				<tr>
					<td>Re-enter Password:</td><td><input type="password" name="password1" required="required"/></td>
				</tr>
				<tr>
					<td>Phone Number:</td><td><input type="number" name="phone" required="required"/></td>
				</tr>
				
				<tr>
					<td colspan="2" align="center"><input type="submit" value="submit"/></td>
				</tr>
				 <td><p>Already Registered? <a href="index.php">Log in  here</a>.</p></td>
			</table>
			</form>
	</body>
</html>