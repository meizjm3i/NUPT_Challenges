<?php
function waf($values){
	$black = ['cat','head','tail','more','tac','rm','ls'];
	foreach ($black as $key => $value) {
		if(strpos($value,$values)){
			die("Attack!");
		}
	}
}
?>