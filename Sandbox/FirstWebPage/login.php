<?php

// get user and pass
$username = $_POST["username"];
$pass = $_POST["password"];

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
$query = "SELECT hash FROM userpass WHERE username = '$username' LIMIT 1";

// result
$result = mysqli_query($connection,$query);

// query error
	if (!$result) {
		die ("Database query Failed");
	}

// fetch mysql result to row
$row = mysqli_fetch_assoc($result);

// authentication
	if ( crypt($pass, $row ['hash']) == $row ['hash']) {
		echo "You are logged in";
	} else 
		echo "Wups Username and Password, did not match!";

// release 
mysqli_free_result($result);

// close
mysqli_close($connection);


//gf45_gdf#4hg
?>
