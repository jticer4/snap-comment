<?php

class comment {

	public $commentSaltiness;

	public $commentText;

	public $commentUsername;

	/**
	 * comment constructor.
	 * @param $commentSaltiness
	 * @param $commentText
	 * @param $commentUsername
	 */
	public function __construct($commentSaltiness, $commentText, $commentUsername) {
		$this->commentSaltiness = $commentSaltiness;
		$this->commentText = $commentText;
		$this->commentUsername = $commentUsername;
	}

	/**
	 * returns a float on the interval [0, 1]
	 * @return float
	 */
	public function getCommentSaltiness() : float {
		return $this->commentSaltiness;
	}

	/**
	 * @param $commentSaltiness
	 */
	public function setCommentSaltiness($commentSaltiness) : void {
		$this->commentSaltiness = $commentSaltiness;
	}

	/**
	 * returns a string less than or equal to 255
	 * @return string
	 */
	public function getCommentText() : string {
		return $this->commentText;
	}

	/**
	 * @param $commentText
	 *
	 */
	public function setCommentText($commentText) : void {
		$this->commentText = $commentText;
	}

	/**
	 * returns a string less than or equal to 64
	 * @return string
	 */
	public function getCommentUsername() : string {
		return $this->commentUsername;
	}

	/**
	 * @param $commentUsername
	 */
	public function setCommentUsername($commentUsername) {
		$this->commentUsername = $commentUsername;
	}

}

$newComment = new comment(1.5, "I'm trying to loose three pounds", "Regina George");

echo "Comment saltiness " . $newComment->getCommentSaltiness() . "</br>";

echo "Comment text " . $newComment->getCommentText() . "</br>";

echo "Comment username " . $newComment->getCommentUsername();
