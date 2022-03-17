<?php
	session_start();

	if(isset($_POST['submit']))
    {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != "")
		{
			if($password != "")
			{
				$myfile = fopen('../model/ManagerUser.txt', 'r');
                

				while (!feof($myfile)) 
				{
					$data = fgets($myfile);
					$user = explode('|', $data);

					if(trim($user[0]) == $username && trim($user[1]) == $password)
					{
						setcookie('flag', 'true', time()+3600, '/');
                        

                        setcookie('username',$user[0],time()+3600,'/');
                        setcookie('password',$user[1],time()+3600,'/');
                        
                        
                        
						
						header('location:../views/Home.php');

						
					}
                   
                    
                    
        
			else
					{
						echo"Invalid username/password";
					}
                    	
                  
				}
                
                
                

				

			}
            
           
        }
    }
?>