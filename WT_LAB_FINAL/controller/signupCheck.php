<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];
		$email= $_POST['email'];
		

		if($username != '' && $password != '' && $email != ''){
			if( strlen($password) < 6)
			{
				if (preg_match('/^[A-Za-z0-9]+$/', $username)) {
            $user =['username'=> $username, 'password'=>$password, 'email'=>$email];
			$_SESSION['user'] = $user;
			header('location: ../view/login.php');
			}else{
				echo 'Contains some other characters';
           } 
			}else{
				header('location: ../view/signup.php?msg=password_error');
			}
		}else{
			header('location: ../view/signup.php?msg=null');
		}
	}else{
		echo "invalid request...";
	}

?>