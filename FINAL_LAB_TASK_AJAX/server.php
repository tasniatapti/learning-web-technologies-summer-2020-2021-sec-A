<?php
	
	$name = $_POST['email'];

	if($email == null){
		echo 'error';
	}else{
		echo "Subscribed successfull: ".$email;		
	}

?>