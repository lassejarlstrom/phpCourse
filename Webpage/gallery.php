<?php 
	include_once('header.html'); 
?>
		
<div class="gallery">
<?php
	
	// til pagiator, finder 'current' page
	// hvis page = 0, bliver $current = -1, 
	// derfor abs omkring
	$current=abs($_GET['page']-1);
	// bruger glob metoder til at hente alle 
	// filer med endelse jpg png
	$files 	= glob("images/{*.jpg,*.png}",GLOB_BRACE);
	// tael antal billeder
	$length = count($files);

	// hvor mange billeder per side
	$howMany= 6;
	//find start index for billede array  
	$start = $current*$howMany;
	
	// find slut index for billede array
	// hvis start index, plus billeder pr side
	// er større en mængden af billeder
	// Indlæs resten 
	if($start+$howMany>$length) {
		$end = $length;	
	}else {
		$end=($current+1)*6;	}
	
	// indlæs billeder fra start indx til slut indx
	for ($i = $start; $i < $end; $i++) {
		echo "<a href=$files[$i]><img src='$files[$i]' width='400' heigth='320'></a>";
	}	

	// beregn antal sider til pagiator
	$pages 	= ceil($length / $howMany);

	echo "<div class=pagiator>";
	for ($i = 1; $i < $pages+1; $i++) {
		$ref = "?page=$i";
		echo "<li><a href=$ref>$i</a></li>";
	}
	echo "<li><a href='images/maage/ulydig-maage.jpg'>Pr&oslash;v lykken!</a></li>";
	echo "</div class=pagiator>";

?>          
</div>

<?php 
	include_once('footer.html'); 
?>
