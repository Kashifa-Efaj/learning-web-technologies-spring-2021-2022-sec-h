
<?php

if(isset($_REQUEST['submit'])){

		if($_REQUEST['email'] == null){

		echo "Please Write your email";

		}
		else{
			echo "Thank You";
		}
	}	



?>			




<html>
<head>
	<title></title>
</head>
<body>

	<form method="Post" action="page2(A).php">
		<fieldset>
			<legend>Email</legend>
		<table>
		<tr>	
			<td><input type="text" name="email" value="" /> </td>
		</tr>
		<tr>	
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>	
		
		</table>
	</fieldset>
	</form>
</body>
</html>