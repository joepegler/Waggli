<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
<script src="//load.sumome.com/" data-sumo-site-id="1198d2c34e139aa19f1cb2ed149f8a6fe014785b601dbf848c7c752316195f2f" async="async"></script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="v5-vt_uxSk2NNANJXt9W664eG8saOUesxQ71UXg9438" />

<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if lt IE 8]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type="text/css">
<![endif]-->

<?php

if ( ! function_exists( '_wp_render_title_tag' ) ) :
    function zerif_old_render_title() {
?>
<title><?php wp_title( '-', true, 'right' ); ?></title>
<?php
    }
    add_action( 'wp_head', 'zerif_old_render_title' );
endif;

wp_head(); ?>

</head>

<?php if(isset($_POST['scrollPosition'])): ?>

	<body <?php body_class(); ?> onLoad="window.scrollTo(0,<?php echo intval($_POST['scrollPosition']); ?>)">

<?php else: ?>

	<body <?php body_class(); ?> >

<?php endif;

	global $wp_customize;

	/* Preloader */

	if(is_front_page() && !isset( $wp_customize ) && get_option( 'show_on_front' ) != 'page' ):

		$zerif_disable_preloader = get_theme_mod('zerif_disable_preloader');

		if( isset($zerif_disable_preloader) && ($zerif_disable_preloader != 1)):
			echo '<div class="preloader">';
				echo '<div class="status">&nbsp;</div>';
			echo '</div>';
		endif;

	endif; ?>


<div id="mobilebgfix">
	<div class="mobile-bg-fix-img-wrap">
		<div class="mobile-bg-fix-img"></div>
	</div>
	<div class="mobile-bg-fix-whole-site">


<header id="home" class="header">

	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">

		<div class="container">

			<div class="navbar-header responsive-logo">

				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

				<span class="sr-only"><?php _e('Toggle navigation','zerif-lite'); ?></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				</button>

				<?php

					$zerif_logo = get_theme_mod('zerif_logo');

					if(isset($zerif_logo) && $zerif_logo != ""):

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

							echo '<img src="'.esc_url( $zerif_logo ).'" alt="'.esc_attr( get_bloginfo('title') ).'">';

						echo '</a>';

					else:

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

							if( file_exists(get_stylesheet_directory()."/images/logo_small.png")):

								echo '<img src="'.get_stylesheet_directory_uri().'/images/logo_small.png" alt="'.esc_attr( get_bloginfo('title') ).'">';

							else:

								echo '<img src="'.get_template_directory_uri().'/images/logo_small.png" alt="'.esc_attr( get_bloginfo('title') ).'">';

							endif;

						echo '</a>';

					endif;

				?>

			</div>

			<nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation"   id="site-navigation">
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'zerif-lite' ); ?></a>
				<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list', 'fallback_cb' => 'zerif_wp_page_menu')); ?>
			</nav>

		</div>

	</div>
=======
<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="v5-vt_uxSk2NNANJXt9W664eG8saOUesxQ71UXg9438" />
<meta property="fb:admins" content="100011528581426" />

<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if lt IE 8]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type="text/css">
<![endif]-->

<?php

if ( ! function_exists( '_wp_render_title_tag' ) ) :
    function zerif_old_render_title() {
?>
<title><?php wp_title( '-', true, 'right' ); ?></title>
<?php
    }
    add_action( 'wp_head', 'zerif_old_render_title' );
endif;

wp_head(); ?>

</head>

<?php if(isset($_POST['scrollPosition'])): ?>

	<body <?php body_class(); ?> onLoad="window.scrollTo(0,<?php echo intval($_POST['scrollPosition']); ?>)">

<?php else: ?>

	<body <?php body_class(); ?> >

<?php endif;

	global $wp_customize;

	/* Preloader */

	if(is_front_page() && !isset( $wp_customize ) && get_option( 'show_on_front' ) != 'page' ):

		$zerif_disable_preloader = get_theme_mod('zerif_disable_preloader');

		if( isset($zerif_disable_preloader) && ($zerif_disable_preloader != 1)):
			echo '<div class="preloader">';
				echo '<div class="status">&nbsp;</div>';
			echo '</div>';
		endif;

	endif; ?>


<div id="mobilebgfix">
	<div class="mobile-bg-fix-img-wrap">
		<div class="mobile-bg-fix-img"></div>
	</div>
	<div class="mobile-bg-fix-whole-site">


<header id="home" class="header">

	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">

		<div class="container">

			<div class="navbar-header responsive-logo">

				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

				<span class="sr-only"><?php _e('Toggle navigation','zerif-lite'); ?></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				</button>

				<?php

					$zerif_logo = get_theme_mod('zerif_logo');

					if(isset($zerif_logo) && $zerif_logo != ""):

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

							echo '<img src="'.esc_url( $zerif_logo ).'" alt="'.esc_attr( get_bloginfo('title') ).'">';

						echo '</a>';

					else:

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

							if( file_exists(get_stylesheet_directory()."/images/logo_small.png")):

								echo '<img src="'.get_stylesheet_directory_uri().'/images/logo_small.png" alt="'.esc_attr( get_bloginfo('title') ).'">';

							else:

								echo '<img src="'.get_template_directory_uri().'/images/logo_small.png" alt="'.esc_attr( get_bloginfo('title') ).'">';

							endif;

						echo '</a>';

					endif;

				?>

			</div>

			<nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation"   id="site-navigation">
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'zerif-lite' ); ?></a>
				<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list', 'fallback_cb' => 'zerif_wp_page_menu')); ?>
			</nav>

		</div>

	</div>
	<!-- / END TOP BAR -->