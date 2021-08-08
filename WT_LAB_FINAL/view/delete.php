<?php
	$title="Delete employer";
	include 'header.php';

	$id = $_GET['id'];
	$employerinfo = $_SESSION['employerinfo'];
	$user = '';

	foreach ($employerinfo as $u) {
		if($u['id'] == $id){
			$employerinfo = $u;
			break;
		}
	}
?>

	<h1>Delete Employer</h1>

	<nav>
		<a href="home.php">Back</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>
	
	<br>
	<div>
		<form method="post" action="../controller/userController.php">
			<input type="hidden" name="id" value="<?=$employerinfo['id']?>">
			<table border="1">
				<tr>
					<td>Name</td>
					<td><?=$user['employername']?></td>
				</tr>
				<tr>
					<td>company name</td>
					<td><?=$user['companyname']?></td>
				</tr>
				<tr>
					<td>Contact no</td>
					<td>
						<?=$user['contactno']?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><h3>Are you sure?</h3></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="delete" value="Confirm"></td>
				</tr>
			</table>
		</form>
	</div>

	<br>
	<br>

<?php
	include 'footer.php';
?>