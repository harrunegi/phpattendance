<?php 

$a="Hello";
$b="Everyone";

function pipi()
{
	
	global$a;
	echo $a."<br>";
	global$b;
	echo $b;
}
pipi();
?>