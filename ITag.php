<?php
require_once('BasicTag.php');
class ITag extends BasicTag
{
	public $tagName = 'I';

	public function toHTML($s, $state)
	{
		$s = $this -> stripTagFromLine($s);
		$tokens = explode(' ', $s);
		$s = '';
		foreach($tokens as $token)
			$s .= $this -> mapToFraction($token) . ' ';
		return '<li class="ingredient">' . $s . '</li>';
	}

	private function mapToFraction($fractionString)
	{
		$fractions = array(
			'1/4' => '&#xBC;',
			'1/2' => '&#xBD;',
			'3/4' => '&#xBE;',
			'1/3' => '$#x2153;',
			'2/3' => '&#x2154;',
		);

		if(array_key_exists($fractionString, $fractions))
			$fractionString = $fractions[$fractionString];
		return $fractionString;
	}
}
?>
