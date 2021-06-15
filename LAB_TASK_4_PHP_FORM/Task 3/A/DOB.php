<?php
	
	if(isset($_REQUEST['submit'])){
		
		$Email = $_REQUEST['date'];

		if($date == ""){
			echo "invalid date!";
		}else{
			echo $date;
		}

	}else{
		echo 'invalid request';
	}
?>