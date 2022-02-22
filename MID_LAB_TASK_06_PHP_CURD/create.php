<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){

					$myfile2 = fopen('userList.txt', 'a');
					$user2 = $_POST['username']."|".$_POST['password']."|".$_POST['email']."\r\n";

					fwrite($myfile2, $user2);
					fclose($myfile2);

					header('location: userlist.php');
				}else{
					echo "Invalid email...";
				}	
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>

