<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Polaris
 * @since Polaris 1
 */

?>

<!DOCTYPE html>

<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name');?></title>
		<?php wp_head(); ?>
	</head>
	

<!-- site header -->
<header class="desktop">
		
	<div class="stickynav" id="main-header">
		
		<div class="abovenavbar" id="abovenavbar">
			<p align="right"></p>
		</div>
	
		<div class="inner">
	
			<nav class="right">
				<div class="nav-images" id="nav-wrap">
					<img src="/wp-content/themes/cerealcat/images/mini-timbits.png" data-href="timbits">
					<img src="/wp-content/themes/cerealcat/images/mini-sprinkles.png" data-href="sprinkles">
					<img src="/wp-content/themes/cerealcat/images/mini-boston.png" data-href="boston">
					<img src="/wp-content/themes/cerealcat/images/mini-flower.png" data-href="flower">
					<img src="/wp-content/themes/cerealcat/images/mini-cruler.png" data-href="cruler">
					<img src="/wp-content/themes/cerealcat/images/mini-priestly.png" data-href="priestly">
				</div>
				<span id="progress-bar" class="progress-bar"></span>
			</nav>
			<nav class="left">
				<div id="mobilelogo">
					<h3>CEREALCAT</h3>
				</div>
					
				<div class="nav-images" id="nav-wrap1">
				  <a href="/"> 
				  <img src="/wp-content/themes/cerealcat/images/cerealcolor.png"  class="toplogo" id="toplogo"></img>
				  </a>
					<script>
					$("#toplogo").hover(function(){
					 $(this).attr('src','/wp-content/themes/cerealcat/images/cerealbright.png'); //changed from '/images...' to 'images', also flipped color and bw.
					 }, function(){
					 $(this).attr('src','/wp-content/themes/cerealcat/images/cerealcolor.png'); //same as above, you had it on mouseover, go color, on mouseout go blackwhite, 
								  //i flipped it because it loads as color so i think it was just a mistake on your part
					 }             //it also seems like your bw version is transparent. i recommend coloring it to the same background as the page. so you don't see the border
					);
					</script> 
				</div>
			</nav>
		</div>
	</div>

</header>

<body <?php body_class(); ?>>