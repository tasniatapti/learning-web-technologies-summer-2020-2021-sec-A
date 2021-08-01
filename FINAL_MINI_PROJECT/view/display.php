<?php
	$title = "";
	require_once('../model/userModel.php');
?>

	
	<h1>Display</h1>

	<?php 
		echo "<table border='1'>
		<tr>
			<td> Name</td>
			<td>Email</td>
            
			<td></td>
		</tr>";
	
		$row=getAlluser();
		
		foreach($row as $var){
			
			echo "
					<tr>
						<td>{$var['Name']}</td>
						<td>{$var['Email']}</td>
                       
						<td><a href='edit.php?id={$var['ID']}'>edit</a> |
							<a href='../controller/changepass.php?id={$var['ID']}'>changepassword</a>
						</td>
						
				";
				//?id={$row['ID']}
			
		}

			echo "</table>";


?>

	
<?php
	include('footer.php');
?>