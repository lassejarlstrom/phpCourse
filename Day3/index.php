<?php 
echo "<pre>";
$names = array("Cath","Angela","Brad","Mira");
print_r($names);
$addresses[] = "Lortevej@lort.dk";
$addresses[] = "pissemail@mail.pis";
$addresses[] = "Lortevej@pisselort.com";
echo "<br>";
print_r($addresses);
echo "<br>Assoc Array ";
$price['gasket'] 	= 15.50;
$price['wheel']		= 20.21;
$price['tire']		= 50.00;
print_r($price);
echo "<br> Assoc Array ";
$prince = array(
			'gasket'=> 15.50,
			'wheel' => 20.21,
			'tire'	=> 50.00);
print_r($price);

echo "<br>The Price is $price[gasket] dollars";
echo "<br>Checking var_Dump<br>";
var_dump($price);
$numbers = range(0,99);
print_r($numbers);
$letters = range('a','z',2);
print_r($letters);
echo count($letters)."<br>";
$row0 = array(
		4,
		5,
		6);
$row1 = array(
		7,
		8,
		9);
$row2 = array(
		1,
		2,
		3);
$multi = array(
		&$row2,
		$row0,
		$row1
	);
print_r($multi);
echo "<br>add to row2 with &, by reference<br>";
$row2[]=9;
print_r($multi);
?>
