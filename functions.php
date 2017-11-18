<?php
/*
 * On definie la taille d'image par défaut ...
 */
$GLOBALS['content_width'] = 720;
/*
 * WordPress lui-même s'occupe de la balise title dans la head
 */
add_theme_support( 'title-tag' );

/*
 * On active les images à la une - par défaut c'est pas activé...
 */
add_theme_support( 'post-thumbnails' );

/*
 * On definie la taille d'image par défaut ...
 */
set_post_thumbnail_size( 720, 0 );

/*
 * On definie la taille d'image par défaut ...
 */
register_nav_menus( array(
	'main'    => 'Menu Principal',
) );