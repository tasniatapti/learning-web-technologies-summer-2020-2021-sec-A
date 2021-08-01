<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];


		if($username != '' && $password != ''){
			echo "null value found...";
		}else{
			if($userName != ""){

				$user = [	
							'Name'	=> $Name, 
							'email'	=> $email, 
							
						];
				
				$status = insertuser($user);				

				if($status){
					header('location: ../view/login.php');
				}else{
					echo "error..try again";
				}

			}else{
				echo "value is empty";
			}
		}
	}


?>
