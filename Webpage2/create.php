<?php
include 'header.html';
?>
<script src="jquery.js"></script>
<script>	
$(document).ready(function() { 
		$("#username").blur(function() {
			var username = 'username='+$(this).val();
			$.post('jscheckvalid.php',username,response);		
		}); 
		function response(data) {
			$('#usernameval').html(data).css('background', 'red');
		}
		$("#email").blur(function() {
			var username2 = 'username='+$(this).val();
			$.post('jscheckvalid.php',username2,response2);		
		}); 
		function response2(data) {
			$('#emailval').html(data).css('background', 'red');
		}
});
</script>
<form action='' method='post'>
	<fieldset>
		<legend>Create User</legend>
		<p>
			<label>Email:</label><br> 
			<input id="email" type='email' name='email' 
			value="<?php if(isset($_POST['email'])) 
							echo $_POST['email'] ?>"/>
			<div id="emailval"></div>
		</p>
		<p>
			<label>Username:</label><br> 
			<input id="username" type='text' name='username' 
			value="<?php if(isset($_POST['username'])) 
							echo $_POST['username'] ?>"/>
			<div id="usernameval"></div>
		</p>
	
		<p>
			<label>Password:</label><br> 
			<input type='password' name='password'/>
		</p>
		<p>
			<label>Confirm Password:</label><br> 
			<input type='password' name='password2'/>
		</p>
	</fieldset>
<input type='submit' value='create' name='create'/>
</form>
<?php 
if (isset($_POST['create']) && $_POST['create'] == "create") {
if (!empty($_POST['email']) && !empty($_POST['username']) 
&& !empty($_POST['password']) && !empty($_POST['password2'])) {
	
	include('database.php');

	$email		= $_POST['email'];
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$password2 	= $_POST['password2'];	

// validate input	
	if (!database::checkEmail($email)) {
		if(!database::checkUsername($username)) {	
			if($password==$password2) {	
				if(strlen($password)<5 ||
				(!preg_match('/[A-Z]+[a-z]+/', $password)) && 
				(!preg_match('/[0-9]+/', $password))) {
					$error = "Password must be at least 5 characters and contain both letters and numbers";
					// errors
				} else {
					// create user
					if(database::createUser($username,$password,$email)) {
	// succes error
						session_start();
						$_SESSION['username'] = $username;
						
						echo "<script>alert('User Created!');window.location = '/phpCourse/Webpage2/index.php';</script>";
					
					} else $error = "Database error";
				} 
			} else $error = "Passwords Doesnt Match, Please Try Again";
		} else $error = "Username Already exists";
	} else $error = "Email Already exists";

	echo "<script>alert('$error');</script>";


	}
}

include 'footer.html';
?>
