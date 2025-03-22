<?php include('includes/header.php'); ?>

<!--||--------------------------------------------------------||**
****||			 	   <- Load Audio Files ->  		   		  ||**
****||--------------------------------------------------------||-->
<audio id="fart-sound1" src="/audio/fart1.mp3"></audio>
<audio id="fart-sound2" src="/audio/fart2.mp3"></audio>
<audio id="fart-sound3" src="/audio/fart3.mp3"></audio>

<div id="night"></div>

<div id="sky-button">
	<img src="images/sun.png" id="sky-btn-img">
</div>

<div id="trees-sm">
	<img src="/images/tree-4.png" id="tree-img-sm">
</div>

<div id="trees-md">
	<img src="/images/tree-3.png" id="tree-img-md">
</div>

<div id="trees">
	<img src="/images/tree-2.png" id="tree-img">
</div>

<div id="ground-wrap"></div>

<div id="unicorn">
	<img src="<?php echo $skin_type;?>">
</div>

<div id="controller-wrap">
	<div id="controller">
		<?php foreach($potions as $name => $id): ?>
		<div class="potion">
			<img src="images/potions/<?php echo $id; ?>.png" id="<?php echo $id; ?>">
			<p><?php echo ucwords($name); ?></p>
		</div>
		<?php endforeach ?>
		<div class="clear"></div>
	</div>
	<div id="skins">
		<?php foreach($unicorn_skins as $name => $path): ?>
			<div class="skin">
				<a href="?skin_type=<?php echo $name; ?>"><img src="<?php echo $path; ?>" id="<?php echo $name; ?>"></a>
				<p><?php echo ucwords($name); ?></p>
			</div>
		<?php endforeach ?>
		<div class="clear"></div>
	</div>
	<div class="controller-btn">
		<p>POTIONS</p>
	</div>
	<div class="skin-btn">
		<p>UNICORNS</p>
	</div>
</div>

<div id="movement-controls">
	<div class="forward">
		<i class="fa fa-arrow-circle-right"></i>
	</div>
	<div class="backward">
		<i class="fa fa-arrow-circle-left"></i>
	</div>
	<div class="jump">
		<i class="fa fa-angle-double-up"></i>
	</div>
</div>

<?php include('includes/footer.php'); ?>