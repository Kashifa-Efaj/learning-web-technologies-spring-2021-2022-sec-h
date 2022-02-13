<?php 

	$error = "";
	$name = "";

	if(isset($_REQUEST['submit'])){

		if($_REQUEST['name'] == null){
			$error  = "invalid name...";
		}else{
			$name = $_REQUEST['name'];
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
		<td><input type="text" name="name" value="<?=$name?>" /> </td>
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