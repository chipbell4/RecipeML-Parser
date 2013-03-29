<?php
require_once('BasicTag.php');
class ImageTag extends BasicTag
{
	public $tagName = 'Image';

	public function toHTML($s, $state)
	{
		$s = $this -> stripTagFromLine($s);
		$tokens = explode(' ', $s);
		$imageURL = $tokens[0];
		$altText = implode(' ', array_slice($tokens, 1));
		return "<img class='recipe-image' src='$imageURL' alt='$altText'/>";
	}
}
?>
