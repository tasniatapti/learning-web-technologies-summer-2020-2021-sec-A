<?php

	session_start();

	if(isset($_POST['submit']))
    { 

		$user = $_SESSION['current_user'];
		$email2 = $_POST['email2'];
		$gender2 = $_POST['gender2'];
		$dob2 = $_POST['dob2'];
		if($user['email']==$email2)
		{

			if ($current_user ="" ) 
			{
				echo " name changed";
			}

				else if ($gender2="") 
				{
					$user['gender']=$gender2;
					echo " changed";
				}
				
		else{
				echo "Invalid Input";
			}
	}
?>
		

		