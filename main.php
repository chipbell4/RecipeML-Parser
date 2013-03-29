<?php
require_once('Parser.php');
$recipe = file_get_contents('recipe.txt');

$p = new Parser();
echo $p->parse($recipe);
?>
