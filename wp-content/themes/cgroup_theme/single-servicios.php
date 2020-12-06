<?php
/**
 *  The template for displaying all single services
 *
 *
 */


get_header();

if( have_posts() ) : the_post();

$header = get_field( 'header' );
$grupo1 = get_field( 'grupo-1' );
$images = get_field( 'slider_small' );
$sliders = get_field( 'slider_big' );
?>
<section
	id="header"
	class="bg-full"
	style="background-image:url('<?php echo $header['img_back']; ?>);">
		<div class="overlay"></div>
</section>
<div class="rectangle"></div>
<section id="about-intro">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<h2
					class="h2-title text-uppercase"
					data-aos="slide-right"
					data-aos-offset="0"
					data-aos-easing="ease-out-cubic"><?php echo $grupo1['title']; ?></h2>
			</div>
			<div class="col-12 col-md-6">
				<h6
					data-aos="fade-left"
					data-aos-offset="0"
					data-aos-easing="ease-out-cubic"><?php echo $grupo1['subtitle']; ?></h6>
			</div>
		</div>
	</div>
</section>
<section id="about-story">
	<?php if( $images ): ?>
	<div id="about-photos">
		<div class="shape-2"></div>
		<div
			id="sliderAbout"
			class="swiper-container"
			style="height:400px;"
			data-aos="zoom-in-up"
			data-aos-offset="150"
			data-aos-easing="ease-out-cubic">
				<div class="swiper-wrapper">
					<?php foreach( $images as $image ): ?>
					<div class="swiper-slide">
						<img src="<?php echo esc_url($image); ?>" alt="" class="img-fluid" style="height:400px; object-fit:cover;">
					</div>
					<?php endforeach; ?>
				</div>
				<div class="swiper-button-next button-slider"></div>
				<div class="swiper-pagination"></div>
				<div class="swiper-button-prev button-slider"></div>
		</div>
	</div>
	<?php endif; ?>
	<div id="about-content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p
						data-aos="zoom-in-up"
						data-aos-offset="150"
						data-aos-easing="ease-out-cubic"><?php echo $grupo1['description']; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="boxes" class="bg-white">
	<?php if( have_rows('box_content') ): ?>
	<div class="container">
		<div class="row">
			<?php while( have_rows('box_content') ): the_row();
					$box = get_sub_field('box');
			?>
			<div class="col-12 col-lg-6 mb-4 px-2">
				<h2
					class="text-uppercase"
					data-aos="zoom-in-up"
					data-aos-offset="150"
					data-aos-easing="ease-out-cubic"><?php echo $box['title']; ?></h2>
				<p
					data-aos="zoom-in-up"
					data-aos-offset="150"
					data-aos-delay="25"
					data-aos-easing="ease-out-cubic"><?php echo $box['description']; ?></p>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<?php endif; ?>
</section>
<section id="bigSlider">
	<?php if($sliders): ?>
	<div class="container">
		<div class="row d-flex justify-content-center align-items-center">
			<div class="col-12">
				<div id="sliderAbout2" class="swiper-container">
					<div class="swiper-wrapper">
						<?php foreach($sliders as $slider): ?>
						<div class="swiper-slide">
							<img src="<?php echo esc_url($slider); ?>" alt="" class="img-fluid">
						</div>
						<?php endforeach; ?>
					</div>
					<div class="swiper-button-next button-slider"></div>
					<div class="swiper-button-prev button-slider"></div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
</section>


<?php endif;
get_footer(); ?>