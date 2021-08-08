	<?php
		$title = 'Home page';
		require_once('header.php');

	?>

	<h1>Welcome home! <?=$_SESSION['username']?> </h1>

	<nav>
	
		<a href="delete.php">Delete Employer</a> |
		<a href="update.php">Update Employer</a> |
		<a href="view_users.php">View Employer</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>

	<br>
	<br>
	<br>

	<div>
		
	</div>

<?php include('footer.php'); ?>