<?php
// Register style sheet.
add_action( 'wp_enqueue_scripts', 'register_styles' );

/**
 * Register style sheet.
 */
function register_styles() {
	wp_register_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
	wp_register_style( 'main', get_stylesheet_directory_uri() . '/main.css' );
	wp_register_style( 'fonts', 'https://fonts.googleapis.com/css?family=Lusitana|News+Cycle:400,700' );
	
	wp_enqueue_style( 'style' );
	wp_enqueue_style( 'main' );
	wp_enqueue_style( 'fonts' );
}

add_action( 'wp_enqueue_scripts', 'register_scripts' );

function register_scripts() {
	wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'scripts' );
}

add_action( 'after_setup_theme', 'register_menu' );

function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

function print_menu($menu_type) {
	$defaults = array(
		'theme_location'  => 'primary',
		'menu'            => '',
		'container'       => 'nav',
		'container_class' => 'nav-desktop ',
		'container_id'    => '',
		'menu_class'      => 'vertical-text',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);

	$defaults_mob = array(
		'theme_location'  => 'primary',
		'menu'            => '',
		'container'       => 'nav',
		'container_class' => 'nav-mob',
		'container_id'    => '',
		'menu_class'      => 'vertical-text',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s"><li id="nav-menu-mob">Menu</li>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);

	if($menu_type == 'mobile') {
		wp_nav_menu( $defaults_mob );
	} else {
		wp_nav_menu( $defaults );
	}
}