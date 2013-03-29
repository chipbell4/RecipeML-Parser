<?php
require_once('BasicTag.php');
class IngredientsTag extends BasicTag
{
	public $tagName = 'Ingredients';

	public function toHTML($s, $state)
	{
		return '<h3 class="ingredients-header">' . $this -> stripTagFromLine($s) . '</h3><ul class="ingredients-list">';
	}
}
?>
