<?php
    $error = "";
	$email = "";
if(isset($_REQUEST['submit'])){

		if($_REQUEST['email'] == null){

		$error  = "invalid email...";
		}
		else{
			$email = $_REQUEST['email'];
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
			<legend>Email</legend>
		<table>
		<tr>	
			<td><input type="text" name="email" value="<?=$email?>" /> </td>
			<td> <?= $error ?> </td>
		</tr>
		<tr>	
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>	
		
		</table>
	</fieldset>
	</form>
</body>
</html>