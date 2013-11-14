<script src="jquery.js"></script>
<script>	
$(document).ready(function() { 
		$("#username").blur(function() {
			var username = 'sub='+$(this).val();
			$.post('username.php',username,response);		
		}); 

		function response(data) {
			$('#resultsGoHere').html(data);
		}
});
</script>
<form action='' method='post'>
	<fieldset>
		<legend>Create User</legend>
		<p>
			<label>Username:</label>
			<input id="username" type='text' name='username' value="<?php echo $_POST['username'] ?>"/>
		</p>
		<p>
			<label>Password:</label>
			<input type='password' name='password'/>
		</p>
		<p>
			<label>Confirm Password:</label>
			<input type='password' name='password2'/>
		</p>
	</fieldset>
<input type='submit' value='create' name='create'/>
</form>
<div id="resultsGoHere"></div>
<?php 
if (isset($_POST['create']) && $_POST['create'] == "create") {
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "kea";
	$dbdb	= "devphase";

	//user input
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	
	// connect
	$connection = mysqli_connect ( $dbhost, $dbuser, $dbpass , $dbdb );
		if (mysqli_connect_errno()) {
			die ("Database connection Failed");
		}
	
	// tjeck username igen, hvis bruger ikke understoetter javascript
	$usernameQuery = "SELECT username FROM userpass WHERE username = '$username' LIMIT 1";
	$selectResult = mysqli_query($connection,$usernameQuery);
	$row1 = mysqli_fetch_assoc($selectResult);
	$match = $row1['username'];
	
	if (!$match) {
		if(!empty($username)) {
			if(!empty($password)) {
				if($password == $password2) {

					$salt = "Jonersej";

					$hashed = crypt($password,$salt);
					
					$query = "INSERT INTO userpass(username,hashedPassword) VALUES ('$username','$hashed');";
				
					// result
					$result = mysqli_query($connection,$query);

					// query error
					if (!$result) {
						die ("Database query Failed");

					}else {
						header('Location: index.php');
					}
				} else {
					echo "Passwords didn't match, Please try again";
				}
			} else {
				echo "Please enter a password";
			}
		} else {
			echo "Please enter a username";
		}
	} else 	{
	echo "The username is already taken";
	}
}
?>
