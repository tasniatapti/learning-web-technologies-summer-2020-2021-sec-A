<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
<h1> Registration Page</h1>
<div>
	<form method="post" action="../controller/registrationCheck.php">
		<fieldset>
			<legend>Signup</legend>
			<table>
			<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
            
                <td> Gender</td>
         
            <td>
                <input type="radio" value="Male" name="genderinput">Male
                <input type="radio" value="female" name="genderinput">Female
                <input type="radio" value="others" name="genderinput">others
            </td>
            
        </tr>
        <tr>
            
                <td>Date of Birth</td>
          
            <td>
                <input type="date" id="birthday" name="birthday"><br/>
            </td>
            
        </tr>
				<tr>
					<td>Type</td>
					<td>
						<select name="type">
							<option value="admin">Admin</option>
							<option value="user">User</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
</body>
</html>