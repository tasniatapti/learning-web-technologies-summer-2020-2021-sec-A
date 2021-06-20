<?php
	session_start();

	if(isset($_POST['submit'])){

		$name= $_POST['name'];
		$username= $_POST['username'];
		$password= $_POST['password'];
		$confirm_password= $_POST['confirm_password'];
		$email= $_POST['email'];
		$gender= $_POST['Gender'];
		$dob= $_POST['dob'];
		$type= $_POST['type'];

		if($name != '' && $username != '' && $password != '' && $confirmpassword != ''&& $email != '' && $gender !='' && $dob != '' ){
			$user =['name'=> $name,'username'=> $username, 'password'=>$password,'confirm_password'=>$confirm_password, 'email'=>$email, 'gender'=>$gender,'dob'=>$dob,'type'=>$type];
			$_SESSION['user'] = $user;
			header('location: ../view/login.php');
		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}

?>