<!DOCTYPE html>
<html>
	<head>
		<title>Lasse Jarlstrom</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="Stylesheet.css" type="text/css">
	</head>
	<body>
		<h1>( Lasse Jarlstr&oslash;m )</h1>

		<nav>
		<ul>
			<li><a href="">G&aelig;stebog</a></li>

			<li><a href="">Palindrome</a></li>
		</ul>
		</nav>

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
			include("comment.php");
			if (isset($_POST['username'])){ 
				$postUsername = $_POST['username'];
				$postComment = $_POST['comment'];
				$newComment = new guestComment($postUsername,$postComment);
				$writeThis 	= serialize($newComment);
				file_put_contents('comments.txt',$writeThis."\n",FILE_APPEND);
				}
			?>
			<div class="article">
				<?php 
				$array = explode("\n", file_get_contents('comments.txt'));
				foreach (array_reverse($array) as $key => $value){
					$a = unserialize($value);
					if (is_object($a)) {
						echo '<div class="comment">';
						echo $a->getDate(). "<br>";
						echo "Username: ". $a->getUsername(). "<br>";
						echo  $a->getComment(). "<br>";
						echo '</div>';
					}	
				}	
				?>	
			</div>
		</div>
		<footer>
			<p>Copyright &copy; Lasse Street Jarlstrøm DAT12V KEA &trade; 2013</p>
		</footer>		
	</body>
</html>
