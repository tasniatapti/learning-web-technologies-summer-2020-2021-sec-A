<?php
	

	
	if(isset($_REQUEST['submit'])){
		
		$Bllod Group = $_REQUEST['Blood Group'];
		if($Blood Group== ""){
			echo "invalid !";
		}
	}else{
		echo 'invalid request';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method="REQUEST" action="#" >

		Blood Group: <input type="text" degree="Blood Group" value="" />
				<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>