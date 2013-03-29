<?php
require_once('RecipeTag.php');
require_once("IngredientsTag.php");
require_once("ITag.php");
require_once("EndIngredientsTag.php");
require_once("ImageTag.php");
class Parser
{
	private $tags = array();
	private $currentState = array();

	public function __construct()
	{
		// assign the tags
		$this -> tags[] = new RecipeTag();
		$this -> tags[] = new IngredientsTag();
		$this -> tags[] = new ITag();
		$this -> tags[] = new EndIngredientsTag();
		$this -> tags[] = new ImageTag();
	}

	public function parse($s)
	{
		$s = $this -> pass($s,2);
		return $s;
	}

	private function pass($s, $k)
	{
		$s = str_replace('\r', '', $s);

		$markup = '';

		foreach(explode("\n", $s) as $line)
		{
			$matched = false;
			foreach($this -> tags as $tag)
			{
				if($tag -> getPassNumber() == $k && $tag -> matchTag($line))
				{
					$markup .= $tag -> toHTML($line, $this -> currentState) . "\n";	
					$matched = true;
					break;
				}
			}
			if(!$matched)
			{
				$markup .= $line;
				if(strlen($line) < 1)
					$markup .= "<br/>";
				$markup .= "\n";
			}
		}
		return $markup;
	}
}
?>
