<?php 
include 'header.html';
session_start();
if ($_SESSION['granted'] != true) {
header('Location: index.php');
}

echo "<h1>Hello ". $_SESSION['username']. "<br>";
echo "sikke en hemmelig side";

?>

<form action="" method="get">
	<input type="submit" value="Log Out" name="logout" class="button"/>
</form>

<?php
if(isset($_GET['logout'])) {
	session_destroy();
	header('Location: index.php');
}
