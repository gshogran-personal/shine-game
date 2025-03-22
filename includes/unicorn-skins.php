<?php /* Unicorn Skins */ 

	$unicorn_skins = array(
		'white'		=> 'images/unicorn-white.gif',
		'rainbow'	=> 'images/unicorn-rainbow.gif',
		'dragon'	=> 'images/unicorn-dragon.gif',
		'flying'	=> 'images/unicorn-flying-girl.gif',
		'pony'		=> 'images/unicorn-pony.gif',
		'brown'		=> 'images/unicorn-brown.gif',
		'yellow'	=> 'images/unicorn-yellow.gif',
		'wolf'		=> 'images/unicorn-wolf.gif',
		'fox'		=> 'images/unicorn-fox.gif'
	);
	
	$skin_type = $_GET["skin_type"];
	if($_GET["skin_type"] == "") {
		$skin_type = "images/unicorn-white.gif";
	}
	
?>

