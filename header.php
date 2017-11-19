<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
<header id="masthead" class="site-header" role="banner">
	<?php if ( has_custom_logo() ) {
		the_custom_logo();
	} else { ?>
		<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
		<p><?php bloginfo( 'description' ); ?></p>
	<?php } ?>
	<?php wp_nav_menu(); ?>
</header>
<main class="site-content" id="#content" role="main">