<?php /* template name: inicio */
get_header();

$g1 = get_field( 'grupo1' );
$g2 = get_field( 'grupo-2' );
$images = get_field( 'slider_home' );
?>
<section id="video-home">
	<div id="videoBg">
		<div class="video-foreground">
			<iframe
				src="https://player.vimeo.com/video/374908207?background=1&autoplay=1&loop=1&byline=0&title=0"
				frameborder="0"
				allow="autoplay; fullscreen"
				allowfullscreen
				webkitallowfullscreen>
			</iframe>
		</div>
	</div>
	<button id="playModal" type="button" onclick="showModalVideo()">
		<i class="fas fa-play"></i>
	</button>
</section>
<section id="promise">
	<div class="container">
		<div class="video-about">
			<iframe src="https://player.vimeo.com/video/293869854" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
		</div>
		<div class="row justify-content-end">
			<div class="col-12 col-lg-6">
				<div class="text-about">
					<h2 class="bold text-uppercase"><?php echo $g1[ 'title' ]; ?></h2>
					<p class="regular"><?php echo $g1[ 'description' ]; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="services-home" class="py-5">
	<div class="container-fluid">
		<div class="row">
			<?php
				$args = array(
					'post_type'		=> array('Servicios'),
					'post_status'	=> array('publish'),
					'nopaging'		=> true
				);
				$serviceHome = new WP_Query($args);

				while( $serviceHome->have_posts() ) : $serviceHome->the_post();
			?>
				<div class="col-12 col-lg-6 mb-3">
					<a
						href="<?php the_permalink(); ?>"
						class="box-img bg-full d-flex align-items-center justify-content-center">
						<?php the_post_thumbnail('full', array('css'=>'img-fluid box-img_img')); ?>
						<h4 class="text-uppercase mb-0"><?php the_title(); ?></h4>
					</a>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<section id="who-home">
	<div class="container-fluid">
	<img src="<?php echo $g2[ 'img_left' ];?>" alt="" class="img-fluig img-left">
		<div class="row justify-content-end">
			<div class="col-lg-7 col-12 box">
				<h2 class="regular heading text-uppercase mb-0"><?php echo $g2[ 'title' ];?></h2>
				<h2 class="bold subheading text-uppercase"><?php echo $g2[ 'subtitle' ]; ?></h2>
				<p class="description mb-0"><?php echo $g2[ 'description' ]; ?></p>
				<a href="/nosotros/" class="btn btn-custom text-white"><?php echo $g2[ 'btn_name' ];?></a>
			</div>
		</div>
	</div>
</section>
<?php if( $images ) : ?>
<section id="slider-home" class="d-flex align-items-center justify-content-center">
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="col-12 col-lg-10">
				<div id="sliderHome" class="swiper-container">
					<div class="swiper-wrapper">
						<?php foreach( $images as $image ): ?>
							<div class="swiper-slide">
								<img src="<?php echo esc_url($image); ?>" alt="" class="img-fluid">
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="swiper-button-next button-slider"></div>
				<div class="swiper-button-prev button-slider"></div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<?php get_footer(); ?>
