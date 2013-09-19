<!DOCTYPE html>
<html>
<head>
    <title>Jeg kan snakke med web service</title>
    <meta charset="utf-8" />
</head>
<body>
	<h1>Jeg kan snakke med web serivce</h1>
    <header>
        
	</header>
<?php 
$url = "http://localhost/phpCourse/WebService/server.php?user=1&format=xml";
if (isset($_POST['but'])) {
	$obj = file_get_contents($url);

echo $obj;}

?>
	<form action="" method="post" accept-charset="utf-8">
		
		
	
		<p><input type="submit" name="but" value="Continue →"></p>
	</form>

    <footer>
        
    </footer>
</body>
</html>
