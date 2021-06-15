<?php
	
	if(isset($_REQUEST['submit'])){
		
		$degree = $_REQUEST['degree'];

		if($degree == ""){
			echo "invalid";
		}else{
			echo $degree;
		}

	}else{
		echo 'invalid request';
	}
?>