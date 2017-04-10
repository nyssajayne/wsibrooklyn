<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# 
                  website: http://ogp.me/ns/website#">
		<meta charset="<?php bloginfo( 'charset' ); ?>">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

		<meta property="og:title" content="<?php bloginfo( 'title' ); ?> if(!is_home()){ echo " - "; the_title() }">
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php if(is_home()){ echo get_permalink(); } else { bloginfo( 'url' ); } ?>" />
		<meta property="og:description" content="<?php if(is_home()){ the_title(); } else { bloginfo( 'description'); } ?>" />
		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/header@2x.png; ?>" />
		<meta property="og:image:width" content="1024" />
		<meta property="og:image:height" content="318" />

		<?php require_once('ga.php'); ?>
		
		<title><?php bloginfo( 'title' ); if(!is_home()) { echo ' - ' . get_the_title(); } ?></title>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div class="wrapper">

			<header>
				<a href="<?php bloginfo( 'url' ); ?>"><h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/header@2x.png" alt="<?php bloginfo( 'title' ); ?>" /></h1></a>
			</header>

			<div class="content">