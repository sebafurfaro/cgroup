<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<?php get_template_part( 'global-templates/menu-side' ); ?>

<script
	src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"
	integrity="sha512-JO6JyFPJupQKZf7icgZkHwuq/rAQxH7COqvEd4WdK52AtHPedwHog05T69pIelI69jVN/zZbW6TuHfH2mS8j/Q=="
	crossorigin="anonymous"></script>
<script
	src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js"
	type="text/javascript"></script>
<script
	src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.min.js"
	type="text/javascript"></script>
<script
	src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/bootstrap.min.js"
	type="text/javascript"></script>
<script
	src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/swiper-bundle.min.js"
	type="text/javascript"></script>
<script
	src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/app.js"
	type="text/javascript"></script>

</body>

</html>
