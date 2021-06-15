<?php
	
	if(isset($_REQUEST['submit'])){
		
		$degree = $_REQUEST['degree'];

		if($Blood Group == ""){
			echo "invalid";
		}else{
			echo $degree;
		}

	}else{
		echo 'invalid request';
	}
?>