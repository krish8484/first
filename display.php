<?php
	require('database_connection.php');

	
	$query = "SELECT * FROM blogs"; 
	$result = mysqli_query($con,$query);

	echo "<table>";
	
	echo "<tr><td>SR. NO.</td><td>Name of the blog</td> <td> Author</td><td>Link</td></tr>";

	while($row = mysqli_fetch_array($result))
		{  
			echo "<tr><td>" . $row['Sr no.'] . "</td><td>" . $row['Name of Blog'] . "</td><td>" . $row['Author'] . "</td><td>" . $row['Link'] . "</td></tr>"; 
		}

echo "</table>"; 

	
	echo "<h1 align='center'>Name of the blogs along with their links has been displayed above</h1>";
?>