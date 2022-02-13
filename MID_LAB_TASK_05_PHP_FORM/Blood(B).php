<?php

if(isset($_REQUEST['submit'])){

		if($_REQUEST['Blood'] == null){

		echo "Please select your Blood Group";

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

	<form method="POST" action="">
		<fieldset>
			<legend>Blood Group</legend>
		<table>
		<tr>
			
					<td>
						<select name="Blood">
							<option value="">A+</option>
							<option value="">A-</option>
							<option value="">B+</option>
							<option value="">B-</option>
							<option value="">AB+</option>
							<option value="">AB-</option>
							<option value="">O+</option>
							<option value="">O-</option>
							
						</select>
					</td>
				</tr>
			
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</fieldset>
	</form>
</body>
</html>