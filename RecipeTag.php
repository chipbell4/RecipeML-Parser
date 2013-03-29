<?php
require_once('BasicTag.php');
class RecipeTag extends BasicTag
{
	public $tagName = 'Recipe';
	
	public function toHTML($s, $state)
	{
		return '<h2 class="recipe-title">' . $this -> stripTagFromLine($s) . '</h2>';
	}
}
?>
