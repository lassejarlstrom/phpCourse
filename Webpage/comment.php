<?php 
class guestComment {

	var $username;
	var $comment;
	var $date;

		function __construct($username,$comment){
		$this->username	= $username;
		$this->comment	= $comment;
		$this->date		= date('jS F Y h:i:s A'); 
	}

/*
 * Getter for $username
 */
public function getUsername() 
{
    return $this->username;
}

/*
 * Getter for comment
 */
public function getComment() 
{
    return $this->comment;
}

/*
 * Getter for date
 */
public function getDate() 
{
    return $this->date;
}
}?>
