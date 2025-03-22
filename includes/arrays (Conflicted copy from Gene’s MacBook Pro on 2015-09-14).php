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
		'fox'		=> 'images/unicorn-fox.gif',
		'pikachu'	=> 'images/unicorn-pika.gif',
		'pokemon'	=> 'images/unicorn-pokemon.gif',
		'gray cat'	=> 'images/unicorn-gray-cat.gif',
		'cat'		=> 'images/unicorn-cat.gif'
	);
	
	if(isset($_GET["skin_type"])) {
		$skin_type = $_GET["skin_type"];
	} else {
		$skin_type = "images/unicorn-white.gif";
	}
	
	$potions = array(
		'Grow Potion'		=> 'grow-potion',
		'Shrink Potion'		=> 'shrink-potion',
		'Invisible Potion'	=> 'invisible-potion',
		'Speed Potion'		=> 'speed-potion'
	)
	
?>

