<?php
	<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$email= $_POST['email'];
		$type= $_POST['type'];
		$password= $_POST['password'];
		$confirm_pass= $_POST['confirm_pass'];


		if($username != '' && $password != '' && $confirm_pass != ''&& $type!= ''){
			echo "null value found...";
		}
		else( $password !=  $confirm_pass ){
			echo "password not match...";
		}
		else{
			if($userName != ""){

				$user = [	
							'Name'	=> $Name, 
							'email'	=> $email,
							'type'	=> $type,
							'password'	=> $password,
							'confirm_pass'	=> $confirm_pass,
							
							
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


?>