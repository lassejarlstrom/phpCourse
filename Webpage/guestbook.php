<?php 
	include('header.html'); 
?>
<div id="container">
	<div id="form">
		<form method="post" accept-charset="utf-8">
			<p><label>Username:</label></p>
			<p><input name="username" type="text" class="username"></p>
			<p><label>Comment:</label></p>
			<p><textarea name="comment" rows="5" cols="20" class="comment"></textarea></p>
			<p><input type="submit" name="submit" value="Send" class="button"></p>
		</form>
	</div>

<?php 
include("guestbookComment.inc");
// kun hvis username feltet er 'sat' og ikke tomt
if (isset($_POST['username']) && !empty($_POST['username'])){ 
	$username = $_POST['username'];
	$comment = $_POST['comment'];

	// fjern alle \n erstat med html
	$comment = str_replace("\n", '<br>',$comment);

	// lav kommentar objekt, herefter serialisér
	$commentObj = new guestComment($username,$comment);
	$serializedString 	= serialize($commentObj);

	// skriv til fil
	file_put_contents('comments.txt',$serializedString."\n",FILE_APPEND);
	header("Location: guestbook.php");
}?>
	<div class="article">
<?php
// for hver new line lav ny 'row', i array
$array = explode("\n", file_get_contents('comments.txt'));

// loop gennem array
foreach (array_reverse($array) as $key => $value){

	// unserialize objekt og echo html, samt tjekt om a
	// er et objekt efter unserialized
	$a = unserialize($value);
	if (is_object($a)) {
		echo '<div class="comment">';
		echo $a->getDate(). "<br>";
		echo "<u>Username:</u><br> ". $a->getUsername(). "<br>";
		echo "<u>Comment:</u><br> ". $a->getComment(). "<br>";
		echo '</div>';
	}	
}	
?>	
	</div>
</div>
<?php 
	include('footer.html'); 
?>
