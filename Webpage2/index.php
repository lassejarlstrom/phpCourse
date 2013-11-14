<?php 
include 'header.html';
?>
<form action='' method="post">
	<fieldset>
		<legend>Login</legend>
		
		<p>
			<label>Username:</label> 
			<input type="text" name="username" class="container" />
		</p>
		<p>
			<label>Password:</label> 
			<input type="password" name="password" class="container" />
		</p>

	</fieldset>
		<input type="submit" value="submit" name="submit" class="button"/>
	

</form>	
	<form action="create.php" method="get">
		<input type="submit" value="create" name="create" class="button"/>
	</form>
<?php
if(isset($_POST['submit']) && $_POST['submit'] == "submit"){

	$username = $_POST["username"];
	$pass = $_POST["password"];
	
	if (!empty($username) && !empty($pass)) {
		
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "kea";
		$dbdb	= "devphase";

		// connect
		$connection = mysqli_connect ( $dbhost, $dbuser, $dbpass , $dbdb );
			if (mysqli_connect_errno()) {
				die ("Database connection Failed");
			}

		// query
		$query = "SELECT hashedPassword FROM userpass WHERE username = '$username' LIMIT 1";

		// result
		$result = mysqli_query($connection,$query);

		// query error
		if (!$result) {
			die ("Database query Failed");
		}

		// fetch mysql result to row
		$row = mysqli_fetch_assoc($result);

		// authentication
			if ( crypt($pass, $row ['hashedPassword']) == $row ['hashedPassword']) {
				echo "You are logged in";
			} else 
				echo "Wups Username and Password, did not match!";

		// release 
		mysqli_free_result($result);

		// close
		mysqli_close($connection);

	} else {
		header('Location: index.php');
	}
}
?>
<?php 
include	'footer.html';
?>
