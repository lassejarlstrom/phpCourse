<!DOCTYPE html>
<html>
	<head>
		<title>Lasse Jarlstrom</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="Stylesheet.css" type="text/css">
	</head>
	<body>

		<div id="mainclass">
			<h1><a href=index.php style='text-decoration:none; color:black;'>( Lasse Jarlstr&oslash;m )</a></h1>

			<nav>
			<ul>
				<li><a href="guest.php">G&aelig;stebog</a></li>
				<li><a href="gallery.php">Gallery</a></li>

			</ul>
			</nav>

			<div class="String">
<form action="" method="get">
				<label for="Palindrome">Palindrome:</label>
				<input type="text/submit/hidden/button" name="Palindrome" id="Palindrome">
				<p><input type="submit" value="Continue"></p>
<?php 
if (isset($_GET['Palindrome'])) {
$string = strtolower($_GET['Palindrome']);
$hu = str_replace(" ","",$string);

if ($hu == strrev($hu)) {
	echo "Yes Palindrome, indeed";
} else echo "naaah not so much!";
}
?>


				<label for="Reverse">Reverse:</label>
				<input type="text/submit/hidden/button" name="Reverse" id="Reverse">
				<p><input type="submit" value="Continue"></p>
<?php 
$we = $_GET['Reverse'];
echo strrev($we);
?>	
</form>
		</div>

		<footer>
		<p>Copyright &copy; Lasse Street Jarlstrøm DAT12V 
<a href=http://www.kea.dk/da/uddannelser/erhvervsakademiuddannelser/datamatiker/ 
style="color:blue">KEA</a> &trade; 2013</p>
		</footer>		
	</div>
</body>
</html>
