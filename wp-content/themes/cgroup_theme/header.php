<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
	<nav id="mainNavbar" class="navbar fixed-top navbar-dark">
		<a
			href="/"
			class="navbar-brand mb-0">
				<img
					src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logo_cgroup.svg"
					alt="CGroup"
					class="img-fluid">
		</a>
		<a
			href="https://api.whatsapp.com/send?phone=+56984287437"
			target="_blank"
			rel="noopener nofollow"
			class="btn-link contact-online ml-0 text-uppercase text-white">Contacto online</a>
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'ml-auto',
				'container_id'    => 'navbarDesk',
				'menu_class'      => 'nav-menu',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>
		<button id="menuToggler" type="button">
			<div class="icon-menu"></div>
			<div class="icon-menu"></div>
			<div class="icon-menu"></div>
		</button>
	</nav>
