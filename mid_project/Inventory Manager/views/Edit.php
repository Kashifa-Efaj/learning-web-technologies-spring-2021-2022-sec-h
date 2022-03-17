<?php 

    require_once('header.php')

?>


<html>
<head>
	<title>Edit Information</title>
</head>
<body>
    <center>
	<a href="Home.php"> Back </a> |
	<a href="../controller/logout.php"> Logout </a>
    </center>

	<form method="POST" action="../controller/EditCheck.php">
		<fieldset>
			<legend>Edit Information</legend>
			<table>
				<tr>
                    <td>Serial</td>
                    <td> <input type="text" name="id" value=""></td>
					<td>Tool Name</td>
					<td><input type="text" name="nname" value=""></td>
				</tr>
				<tr>
					<td>Department</td>
					<td><input type="text" name="dname" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="edit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
