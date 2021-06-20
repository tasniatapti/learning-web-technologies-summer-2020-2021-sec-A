<?php
	session_start();

	if(isset($_POST['submit'])){

		$name= $_POST['name'];
		$username= $_POST['username'];
		$password= $_POST['password'];
		$confirmpassword= $_POST['confirmpassword'];
		$email= $_POST['email'];
		$gender= $_POST['Gender'];
		$dob= $_POST['dob'];
		$type= $_POST['type'];

		if($name != '' && $username != '' && $password != '' && $confirmpassword != ''&& $email != '' && $gender !='' && $dob != '' ){
			$user =['name'=> $name,'username'=> $username, 'password'=>$password,'confirmpassword'=>$confirmpassword, 'email'=>$email, 'gender'=>$gender,'dob'=>$dob,'type'=>$type];
			$_SESSION['user'] = $user;
			header('location: ../index.html');
		}else{
			echo "null value found...";
		}
		else
        {
            if($password == $confirmpassword)
            {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;

                //echo "Success...";
                header('location: index.html');
            }
		echo "invalid request...";
	}

?>