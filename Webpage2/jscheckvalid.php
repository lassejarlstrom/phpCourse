<?php 
include('database.php');
//user input
$username = $_POST['username'];

if (preg_match('/@/',$username)) {
	$query = "
		SELECT email 
		FROM userpass 
		WHERE email = '$username' 
		LIMIT 1";
	$selectResult = mysqli_query(database::connection(),$query);
	$row1 = mysqli_fetch_assoc($selectResult);
	$match = $row1['email'];
	
	if (!empty($match)) {
		$match = 'Email Already Taken';
		echo json_encode($match);
	}
} else {
	$query = "
		SELECT username 
		FROM userpass 
		WHERE username = '$username'
		LIMIT 1";
	$selectResult = mysqli_query(database::connection(),$query);
	$row1 = mysqli_fetch_assoc($selectResult);
	$match = $row1['username'];
	if (!empty($match)) {
		$match = 'Username Already Taken';
		echo json_encode($match);
	}
}

?>
