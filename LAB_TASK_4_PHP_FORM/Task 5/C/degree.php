<?php
	
	$degree = "";
	
	if(isset($_REQUEST['submit'])){
		
		$degree = $_REQUEST['degree'];
		if($degree == ""){
			echo "invalid!";
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

		Gender: <input type="text" degree="gender" value="" />
				<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
