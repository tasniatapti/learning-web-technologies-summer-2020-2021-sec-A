<?php
	
	$gender = "";
	
	if(isset($_REQUEST['submit'])){
		
		$email = $_REQUEST['gender'];
		if($gender == ""){
			echo "invalid gender!";
		}
	}else{
		echo 'invalid request';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Form</title>
</head>
<body>
	<form method="REQUEST" action="#" >

		Gender: <input type="text" gender="gender" value="" />
				<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
