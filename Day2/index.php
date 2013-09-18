<?php 
$input = "<a href='http://www.ing.dk'>go</a>";
echo "Input no htmlentities <br>";
echo $input. "<br>";
$string = htmlentities($input);
echo "Input with htmlentities <br>";
echo $string;

$name = "hans";
echo "<br>my name is {$name}til fornavn";

$string = "Fred,Flintstones,35,Wilma";
$token = strtok($string,",");

while ($token != false) {
	echo "<br>"."$token";
	echo " ------------------(((This is the character of index 1 " . $token{1}. " )))";
	$token = strtok(",");
}

echo "<br><br>";
$rString = "Jeg hedder mus og min hund hedder Ole";
echo preg_match("/Lasse|Ole/",$rString);
echo "hehe";
?>
