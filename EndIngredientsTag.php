<?php
require_once('BasicTag.php');
class EndIngredientsTag extends BasicTag
{
	public $tagName = 'EndIngredients';

	public function toHTML($s, $state)
	{
		return '</ul>';
	}
}
?>
