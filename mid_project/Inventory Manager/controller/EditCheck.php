<?php
	session_start();

	if(isset($_POST['edit']))
    {
		
		if($_POST['id'] != ""  )
		{
			$myfile = fopen('../model/new.txt', 'a');
                  $user = $_POST['nname']."|".$_POST["dname"]."|".";"."\r\n";

                     fwrite($myfile, $user);
                     fclose($myfile);
					   


                     header('location: ../views/Edit2.php');
				    

		}
	}
?>