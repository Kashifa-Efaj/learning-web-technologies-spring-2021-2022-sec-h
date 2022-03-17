<?php 

    require_once('header.php')

?>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>

	<form>
	<table border="5">
        <center>
       <h1> <a href="Home.php">Back</a></h1>
        </center>
        <i><h1><legend>Information</legend></h1></i>
       
		
		<tr>
			<td>Serial</td>
			<td>Tool Name</td>
			<td>Department</td>

			<td>Action</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Ultrasound</td>
            <td>Radiology</td>
			<td> <a href="../views/Edit.php" >Edit</a></td>
			
		</tr>
		<tr>
			<td>2</td>
			<td>Scalpel</td>
            <td>Dermatologist</td>
			<td> <a href="../views/Edit.php" >Edit</a></td>
			
				<tr><td>3</td>
                    <td>Stethoscope</td>
            <td>Anesthesiologist</td>
			<td> <a href="../views/Edit.php" >Edit</a></td>
			
			

        </tr>
        
		
		
	</table>
	
</body>
</html>