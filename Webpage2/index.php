<?php 
include 'header.html';
session_start();
?>
<form action='' method="post">
	<fieldset>
		<legend>Login</legend>
		
		<p>
			<label>Username or Email:</label><br> 
			<input type="text" name="username"
				value="<?php if(isset($_SESSION['username'])) 
							echo $_SESSION['username'] ?>"/>
		</p>
		<p>
			<label>Password:</label><br> 
			<input type="password" name="password" />
		</p>

	</fieldset>
		<input type="submit" value="Login" name="submit" class="button"/>
	

</form>	
	<form action="create.php" method="get">
		<input type="submit" value="create" name="create" class="button"/>
	</form>
<?php
if(isset($_POST['submit'])){

	$username = trim($_POST["username"]);
	$pass = trim($_POST["password"]);
	
	if (!empty($username) && !empty($pass)) {
		include('database.php');
		if(database::login($username,$pass)) {
			session_start();
			$_SESSION['granted'] = true;
			$_SESSION['username'] = $username;

			header('Location: secretpage.php');
		} echo "Authentication Error, please check your login information
		<br><a href=create.php>New User?</a>";
		} else {
		header('Location: index.php');
	}
}
?>
<?php 

include	'footer.html';
?>
