<?php

	session_start();

	if(isset($_POST['submit']))
    { 

		$user = $_SESSION['current_user'];
		$email2 = $_POST['email2'];
		
		
		if($user['email']==$email2)
		{

			if ($current_user ="" ) 
			{
				echo " name changed";
			}
          
		else{
				echo "Invalid Input";
			}
	}
?>
		

		