<?php
require_once('Tag.php');
abstract class BasicTag extends Tag
{
	public function getPassNumber()
	{
		return 2;
	}

	public function getState()
	{
		return array();
	}
}
?>
