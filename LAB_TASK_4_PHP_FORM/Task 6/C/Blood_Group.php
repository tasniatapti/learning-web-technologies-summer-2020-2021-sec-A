<?php
	
	$Blood Group = "";
	
	if(isset($_REQUEST['submit'])){
		
		$Blood Group = $_REQUEST['Blood Group'];
		if($Blood Group == ""){
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

		Gender: <input type="text" name="Blood Group" value="" />
				<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
