<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; ?>

<?php get_template_part( 'global-templates/menu-side' ); ?>
<?php get_template_part( 'global-templates/modal-video' ); ?>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="main-footer d-flex align-items-center">
					<li class="text-white mx-2">Isidora Goyenechea  3120,  Las Condes,  Piso 17</li>
					<li class="text-white mx-2">+56 2 2928 9630</li>
					<li class="text-white mx-2"><a href="mailto:hola@cgroup.cl">hola@cgroup.cl</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js" integrity="sha512-JO6JyFPJupQKZf7icgZkHwuq/rAQxH7COqvEd4WdK52AtHPedwHog05T69pIelI69jVN/zZbW6TuHfH2mS8j/Q==" crossorigin="anonymous"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js" type="text/javascript"></script>
	<script src="https://player.vimeo.com/api/player.js" type="text/javascript"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/swiper-bundle.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/app.js" type="text/javascript"></script>
</body>

</html>
