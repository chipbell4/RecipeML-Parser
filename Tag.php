<?php
abstract class Tag
{
	public $tagName;
	public abstract function getPassNumber();
	public function matchTag($s)
	{
		$tokens = explode(' ', $s);
		return $tokens[0] === '@' . $this -> tagName;
	}
	public abstract function toHTML($s, $state);
	public abstract function getState();

	protected function stripTagFromLine($s)
	{
		$s = str_replace("@" . $this -> tagName, "", $s, $i);
		$s = trim($s);
		return $s;
	}
}
?>
