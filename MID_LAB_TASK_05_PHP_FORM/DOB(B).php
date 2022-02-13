<?php

if(isset($_REQUEST['submit'])){

		if($_REQUEST['DOB'] == null){

		echo "Please Write your DOB";

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

	<form method="" action="">
		<fieldset>
			<legend>Date of Birth</legend>
			<table>
				<tr>
					
					<td><input type="date" name="DOB" value=""> </td> 
				</tr>
				<tr>

					<td><input type="submit" name="submit" value="Submit"></td>
				
				</tr>
			</table>
		</fieldset>
	
	</form>
</body>
</html>