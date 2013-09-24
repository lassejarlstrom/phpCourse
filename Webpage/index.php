<?php 
	include('header.html'); 
?>

<div class="mainclass">
	<div class="article">
		<div class="comment">
			<form action="" method="get">
				<label for="Palindrome">Palindrome:</label>
				<input type="text/submit/hidden/button" name="Palindrome" id="Palindrome">
				<input type="submit" value="Continue">
			</form>
<?php
// Palindrome, forst lower case alt, samt fjern mellemrum
// Test om strengen er den samme forlaens og baglaens
// hvis den er print resultat
if (isset($_GET['Palindrome'])) {

	$string = strtolower($_GET['Palindrome']);
	$hu = str_replace(" ","",$string);

	if ($hu == strrev($hu)) {
		echo "Output: Yes Palindrome, indeed";
	} else echo "Output: naaah not so much!";
}
?>
		</div>
	</div>
	<div class="article">
		<div class="comment">
			<form action="" method="get">
				<label for="Reverse">Reverse:</label>
				<input type="text/submit/hidden/button" name="Reverse" id="Reverse">
				<input type="submit" value="Continue">
			</form>

<?php
// string reverse, benytter php metoden strrev
if (isset($_GET['Reverse'])) {

$we = $_GET['Reverse'];
echo strrev($we);
}
?>	
		</div>
	</div>
</div>	
<?php 
// include footer
include('footer.html'); 
?>
