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
	<button
		class="btn-play"
		type="button"
		data-toggle="modal"
		data-target="#videopopup">
			<i class="fas fa-play"></i>
	</button>
</section>
<section id="promise">
	<div class="shape"></div>
	<div class="video-about">
		<iframe
			src="https://player.vimeo.com/video/293869854"
			width="640"
			height="360"
			frameborder="0"
			allow="autoplay; fullscreen"
			allowfullscreen
			data-aos="fade-right"
			data-aos-offset="300"
			data-aos-easing="ease-in-out"></iframe>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 box">
				<div class="text-about">
					<h2
						class="h2-title text-uppercase mb-3"
						data-aos="zoom-in-up"
						data-aos-offset="150"
						data-aos-easing="ease-out-cubic"><?php echo $g1[ 'title' ]; ?></h2>
					<p
						class="short-content mb-0"
						data-aos="zoom-in-up"
						data-aos-offset="150"
						data-aos-delay="10"
						data-aos-easing="ease-out-cubic"><?php echo $g1[ 'description' ]; ?></p>
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
						class="box-img bg-full d-flex align-items-center justify-content-center"
						data-aos="zoom-in-up"
						data-aos-offset="300"
						data-aos-easing="ease-in-sine">
							<?php the_post_thumbnail('full', array('css'=>'img-fluid box-img_img')); ?>
							<h4 class="text-uppercase mb-0"><?php the_title(); ?></h4>
					</a>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<section id="who-home">
	<div class="shape"></div>
	<img
		src="<?php echo $g2[ 'img_left' ];?>"
		class="img-fluig img-left"
		data-aos="fade-right"
		data-aos-offset="300"
		data-aos-easing="ease-in">
	<div class="container">
		<div class="row">
			<div class="col-12 box">
				<h2
					class="heading text-uppercase mb-3"
					data-aos="zoom-in-up"
					data-aos-offset="150"
					data-aos-delay="0"
					data-aos-easing="ease-out-cubic"><?php echo $g2[ 'title' ];?></h2>
				<h2
					class="h2-title text-uppercase mb-3"
					data-aos="zoom-in-up"
					data-aos-offset="150"
					data-aos-delay="10"
					data-aos-easing="ease-out-cubic"><?php echo $g2[ 'subtitle' ]; ?></h2>
				<p
					class="short-content mb-4"
					data-aos="zoom-in-up"
					data-aos-offset="150"
					data-aos-delay="20"
					data-aos-easing="ease-out-cubic"><?php echo $g2[ 'description' ]; ?></p>
				<a
					href="/nosotros/"
					class="btn btn-custom text-white"
					data-aos="zoom-in-up"
					data-aos-offset="150"
					data-aos-delay="25"
					data-aos-easing="ease-out-cubic"><?php echo $g2[ 'btn_name' ];?></a>
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
								<img src="<?php echo esc_url($image); ?>" class="img-fluid">
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
