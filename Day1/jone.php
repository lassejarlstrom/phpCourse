<html>
	
	<style>
	form {
		text-align:left;
		margin: 2em;
	}
	form label {
	width: 6em;
	float:left;
	text-align:right;
	margin-right:0.5em;
	display:block;
	}
	form .submit {
	width:5em;
	float:left;
	margin-left:8em;
	}
	form .submit:hover {
	background-color:grey;
	}	
	body {
	}
	
	</style>

	<body>

		<form method="post">
			<label>Name:</label>
			<input type="text" name="name">
			<br>
			<label>Age:</label>
			<input type="text" name="age">
			<br>
			<label>E-mail:</label>
			<input type="text" name="E-mail">
			<br>
			<label>Address:</label>
			<input type="text" name="Address">
			<br>
			<label>Password:</label>
			<input type="password" name="password">
			<br>
			<label>Confirm Password:</label>
			<input type="password" name="confirm">
			<br>
			<input type="submit" value="Submit" name ="submit" 
			class="submit">
		</form>
<pre>


</pre>
		<?php
			$name	=strip_tags($_POST['name']);
			$age	=strip_tags($_POST['age']);
			$email	=strip_tags($_POST['E-mail']);
			$address=strip_tags($_POST['Address']);

		if ($_POST['password']==$_POST['confirm']) {
			echo "Here is your information: <br> 
			$name <br> $age <br> $email <br> $address";
		} else 
			echo "password does'nt match";

?>
	</body>
</html>
