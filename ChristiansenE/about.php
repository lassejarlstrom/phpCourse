<!DOCTYPE HTML>
<html>

	<link rel="Stylesheet" type="text/css" href="Stylesheet.css" />

	<meta charset="UTF-8">
	<title>Christiansen & Essenb&aelig;k</title>
	<body>

		<header>
		<img src="logo.png" alt="Logo">
		</header>
		<br>
		while ($he >= 12 ){
			}

		<article>
		<h2>Firmaprofil</h2>

		<?php 
		$file = fopen('firmaprofil.txt','r');
			while($line = fgets($file)) {
				echo $line;
			}
		fclose($file);
		?>
		</article>
		<nav>
		<ul>
			<li><a href="about.php">About</a></li>
			<li><a href="index.html">Login</a></li>
			<li><a href="kravspecs.php">Kravspecifikation</a></li>
		</ul>
		</nav>
		<br>


	</body>
</html>
