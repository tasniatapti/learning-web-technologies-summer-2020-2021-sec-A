<?php
	

	
	if(isset($_REQUEST['submit'])){
		
		$email = $_REQUEST['email'];
		if($email == ""){
			echo "invalid email!";
		}
	}else{
		echo 'invalid request';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Form</title>
</head>
<body>
	<form method="post" action="#" >

		Email: <input type="text" email="email" value="" />
				<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
