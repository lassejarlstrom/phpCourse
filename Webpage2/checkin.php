
<?php

include 'header.html';

?>

    <form method="get">
        <p>Which Building(s) Do You Want to Buy? </p>
        <input type="checkbox" name="1" value="Red Building" />
        Red Building<br>
        <input type="checkbox" name="2" value="Tree House" />
        Tree House<br>
        <input type="checkbox" name="3" value="Fraternity Crib" />
        Fraternity Crib<br>
        <input type="checkbox" name="4" value="Utility Baracks" />
        Utility Baracks<br>
        <input type="checkbox" name="5" value="Oak Complex" />
        Oak Complex<br>
        <input type="submit" value="submit"/>
	</form>

<?php 
if (isset($_GET) && Count($_GET) >0) {
	echo "You selected " . Count($_GET) . " building(s):<br> ";

	$sb = $_GET;
	echo "<ol>";
	foreach ($sb as $b) {
		echo "<li>". $b . ", </li>";
	}
	echo "</ol><br/>Your Price is: " .(Count($_GET) * 1000). "$";
}
