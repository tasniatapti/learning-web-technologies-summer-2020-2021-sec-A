<?php
	
	$username = "";
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		if($username == ""){
			echo "invalid username!";
		}
	}else{
		echo 'invalid request';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Data</title>
</head>
<body>
	<form method="post" action="#" >

		Username: <input type="text" name="username" value="" />
				<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
