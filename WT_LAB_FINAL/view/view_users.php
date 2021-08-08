<?php
	$title="View employerinfo";
	include 'header.php';
	require_once('../model/adminModel.php');
	employerinfo = getAllEmploye();
?>

	<h1>Employe List</h1>

	<nav>
		<a href="home.php">Back</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>
	
	<br>

	<div>
		<table border="1">
			<tr>
				<td>Name</td>
				<td>Companyname</td>
				<td>Contactno</td>
				<td>Username</td>
				<td>Password</td>
				
			</tr>

			<?php  for($i=0; $i<count($employerinfo); $i++){ ?>
				<tr>
					<td><?=$employeinfo[$i]['id']?></td>
					<td><?=$employeinfo[$i]['employername']?></td> 
					<td><?=$employeinfo[$i]['companyname']?></td> 
					<td><?=$employeinfo[$i]['contactno']?></td> 
					<td><?=	$employerinfo[$i]['username']?></td> 
					<td><?=	$employerinfo[$i]['password']?></td>
					
					<td>
						<a href="edit.php?id=<?=$employerinfo[$i]['id']?>">Edit</a> |
						<a href="delete.php?id=<?=	$employerinfo[$i]['id']?>">Delete</a>
						<a href="update.php?id=<?=$employerinfo[$i]['id']?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
			
		</table>
	</div>

	<br>
	<br>
	<br>

<?php
	include 'footer.php';
?>