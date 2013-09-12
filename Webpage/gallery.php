<!DOCTYPE html>
<html>
	<head>
		<title>Lasse Jarlstrom</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="Stylesheet.css" type="text/css">
	</head>
	<body>
		<h1>( Mine Wallpapers )</h1>

		<nav>
		<ul>
			<li><a href="guest.php">G&aelig;stebog</a></li>
			<li><a href="gallery.php">Gallery</a></li>
		</ul>
		</nav>
		
		<div class="gallery">
			<?php
			$current=$_GET['page'];
			if(is_null($current)){
			$current=1;
			}
			$files 	= glob("images/{*.jpg,*.png}",GLOB_BRACE);
			$length = count($files);
			$howMany= 6;
			$pages 	= ceil($length / $howMany);
			$page	= $current-1;	
			$start = $page*$howMany;

			if($start+$howMany>$length) {
				$end = $length;	
			} else $end=($page+1)*6;

			for ($i = $start; $i < $end; $i++) {
				echo "<a href=''><img src='$files[$i]' width='400' heigth='320'></a>";
			}	
			
			echo "<br>";
			echo "<br>";
			echo "<br>";
			for ($i = 1; $i < $pages+1; $i++) {
				$ref = "?page=$i";
				echo "<li><a href=$ref>$i</a></li>";
			}

			
?>
			<div class="pagiator">
				
			</div>
			</div>


		<footer>
			<p>Copyright &copy; Lasse Street Jarlstrøm DAT12V <a href=http://www.kea.dk/da/uddannelser/erhvervsakademiuddannelser/datamatiker/ style="color:blue">KEA</a> &trade; 2013</p>
		</footer>
	</body>
</html>
