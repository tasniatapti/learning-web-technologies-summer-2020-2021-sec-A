<?php
	

	
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
	<title>Gender Form</title>
</head>
<body>
	<form method="post" action="#" >

		Gender: <input type="text" gender="gender" value="" />
				<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
