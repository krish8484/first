<html>
	<head>
		<title>ADD BLOG</title>
	</head>
	<body>
		<h1 align="center">ADD BLOG</h1>
		<form action="addInDb.php" method="post">
			<table align="center" style="margin-top:100px;">
				<tr>
					<td>Name of the blog</td><td><input type="name" name="blog_name" required="required"/></td>
				</tr>
				<tr>
					<td>Blog Addresss</td><td><input type="link" name="blog_link" required="required"/></td>
				</tr>
				<tr>
					<td>Email:</td><td><input type="email" name="author" required="required"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" value="submit"/></td>
				</tr>
			</table>
			</form>
	</body>
</html>