<?php 
include 'header.html';

$cities = array('Tokyo','Mexico City',
			'New York City','Mumbai',
			'Seoul','Shanghai','Lagos',
			'Buenos Aires','Cairo','London');

echo "<h1>Comma</h1>";
foreach($cities as $city) {
echo $city. ", ";
}

echo "<h1>Unordered Sorted List</h1><ul>";
sort($cities);
foreach($cities as $city) {
echo "<li>". $city. "</li>";
}
echo "</ul>";

echo "<h1>Unordered Sorted List, and extra cities</h1><ul>";
array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
sort($cities);
foreach($cities as $city) {
echo "<li>". $city. "</li>";
}
echo "</ul>";

include 'footer.html';
