<?php
    session_start();
    require_once('../model/adminModel.php');
    $id=$_GET['id'];
	$data=getEmployerbyId($id);

	$_SESSION['edit_id']=$id;

?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="../controller/update.php">
		<fieldset>
			<legend>EDIT </legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="Employer Name" value="<?php echo$data['employername'] ?>"></td>
				</tr>
				<tr>
					<td>Company namae</td>
					<td><input type="text" name="Company Name" value="<?php echo$data['companyname'] ?>"></td>
				</tr>
				<tr>
					<td>Contact No</td>
					<td><input type="text" name="sellingPrice" value="<?php echo$data['contactno'] ?>"></td>
				</tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
				<tr>
					<td><input type="checkbox" name="display" id=""></td>
                    <td>display</td>
				</tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Save"> 
						
					</td>
                    <td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>