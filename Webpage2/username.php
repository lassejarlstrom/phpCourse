<?php 
		$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "kea";
			$dbdb	= "devphase";

			//user input
			$username = $_POST['sub'];
			
			// connect
			$connection = mysqli_connect ( $dbhost, $dbuser, $dbpass , $dbdb );
				if (mysqli_connect_errno()) {
					die ("Database connection Failed");
				}

			$usernameQuery = "SELECT username FROM userpass WHERE username = '$username' LIMIT 1";
			$selectResult = mysqli_query($connection,$usernameQuery);
			$row1 = mysqli_fetch_assoc($selectResult);
			$match = $row1['username'];
		
			if (!empty($match)) {
			$match = 'Username Already Taken';
			echo json_encode($match);
			}else {
			}	
?>
