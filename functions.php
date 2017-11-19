<?php
/**
 * Paris20 fonctions et définitions
 */

if ( ! function_exists( 'paris20_setup' ) ) :

	function paris20_setup() {
		/*
		 * On dit à WordPress - c'est à toi de t'occuper 
		 * de la balise title dans la head - on te fait confiance
		 */
		add_theme_support( 'title-tag' );

		/*
		 * On active les images à la une, par défaut pas activées
		 *
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * On definie la taille d'image par défaut
		 * 720 x 0 veut dire 750px de largeur
		 * et on imposer rien pour la hauter pour
		 * garder les proportions de l'image
		 */
		set_post_thumbnail_size( 720, 0 );

		/*
		 * On enregistre ici un menu de navigation.
		 * On l'appelle Menu dans le Header.
		 * On a aussi besoin d'un identifiant (sans espaces)
		 */
		register_nav_menus( array(
			'menu_header'    => 'Menu dans le Header',
		) );

		/*
		 * On modernize le markup (html) de certaines parties
		 * du code généré par WordPress
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * On ajoute la possibilité d'ajouter le logo
		 * via l'interface de WordPress !
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 200,
			'width'       => 200
		) );
	}
endif;
add_action( 'after_setup_theme', 'paris20_setup' );

if ( ! function_exists( 'paris20_content_width' ) ) :

	function paris20_content_width() {
		/**
		 * WordPress a besoin de cette info pour, par exemple, établir
		 * la taille des vidéos qu'il va charger.
		 * Dans notre cas tout le contenu est compris dans 720px donc :
		 */
		$GLOBALS['content_width'] = 720;
	}
endif;
add_action( 'after_setup_theme', 'paris20_content_width', 0 );