
<?php

if(isset($_REQUEST['submit'])){

		if($_REQUEST['name'] == null){

		echo "Please Write your name";

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

		
	<form method="Post" action="">
		<fieldset>
			<legend>Name</legend>
		<table>
	
	<tr>
		<td><input type="text" name="name" value="" /> </td>
	</tr>
		
	<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
	</tr>
		</table>
	</fieldset>	
	</form>
</body>
</html>