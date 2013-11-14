<?php
class database {

const dbhost ="localhost";
const dbname="devphase";
const dbuser="root";
const dbpass="root";

static function connection() {
// connect
$connection = mysqli_connect ( self::dbhost, self::dbuser, self::dbpass , self::dbname );
	if (mysqli_connect_errno()) {
		die ("Database connection Failed");
	}
return $connection;
}

static function createUser($username,$password,$email) {

	// fedteri ;)
	$salt = "Jonersej";
	$hashed = crypt($password,$salt);
	$query = 
		"INSERT INTO 
		userpass(username,hashedPassword,email) 
		VALUES ('$username','$hashed','$email');";
	// result
	$result = mysqli_query(database::connection(),$query);
	// query error
	if (!$result) {
		die ("Database query Failed");
	}else {
		return true;
	}
}

static function checkUsername($username) {
	// tjeck username igen, hvis bruger ikke understoetter javascript
	$usernameQuery = 
		"SELECT username 
		FROM userpass 
		WHERE username = '$username' 
		LIMIT 1";
	$selectResult = mysqli_query(self::connection(),$usernameQuery);
	$data = mysqli_fetch_assoc($selectResult);
	return $data['username'];
}

static function checkEmail($email) {
	// tjeck username igen, hvis bruger ikke understoetter javascript
	$emailQuery = 
		"SELECT email 
		FROM userpass 
		WHERE email = '$email' 
		LIMIT 1";
	$selectResult = mysqli_query(self::connection(),$emailQuery);
	$data = mysqli_fetch_assoc($selectResult);
	return $data['email'];
}

static function login($username,$pass) {

		// query
	$query = "SELECT hashedPassword 
		FROM userpass 
		WHERE username = '$username'
		OR email = '$username'
		LIMIT 1";

	// result
	$result = mysqli_query(self::connection(),$query);
	
	// query error
	if (!$result) {
		die ("Database query Failed");
	}

	// fetch mysql result to row
	$row = mysqli_fetch_assoc($result);

	// authentication
	if ( crypt($pass, $row ['hashedPassword']) == $row ['hashedPassword']) {
		return true;
	} else 	
		return false;
		

	// release 
	mysqli_free_result($result);

	// close
	mysqli_close(self::connection());
	}
}
?>
