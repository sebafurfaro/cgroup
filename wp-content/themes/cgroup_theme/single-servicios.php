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
<section id="header">
	<img src="<?php echo $header['img_back']; ?>" alt="" class="img-fluid">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="heading my-3"><?php echo $header['heading']; ?></h2>
				<p><?php echo $header['subheading']; ?></p>
				<a href="<?php echo $header['url']; ?>" class="btn btn-custom"><?php echo $header['btn_value']; ?></a>
			</div>
		</div>
	</div>
</section>
<section id="about-into">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="text-uppercase"><?php echo $grupo1['title']; ?></h2>
				<h6><?php echo $grupo1['subtitle']; ?></h6>
			</div>
		</div>
	</div>
</section>
<section id="about-story">
	<?php if( $images ): ?>
	<div class="about-photos">
		<div id="sliderAbout" class="swiper-container" style="height:500px;">
			<div class="swiper-wrapper">
				<?php foreach( $images as $image ): ?>
				<div class="swiper-slide">
					<img src="<?php echo esc_url($image); ?>" alt="" class="img-fluid" style="height:500px; object-fit:cover;">
				</div>
				<?php endforeach; ?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
	<?php endif; ?>
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<p><?php echo $grupo1['description']; ?></p>
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
			<div class="col-12 col-lg-6">
				<h2><?php echo $box['title']; ?></h2>
				<p><?php echo $box['description']; ?></p>
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
			<div class="col-12 col-lg-8">
				<div id="sliderAbout2" class="swiper-container" style="max-height:600px;">
					<div class="swiper-wrapper">
						<?php foreach($sliders as $slider): ?>
						<div class="swiper-slide">
							<img src="<?php echo esc_url($slider); ?>" alt="" class="img-fluid">
						</div>
						<?php endforeach; ?>
					</div>
					<div class="swiper-navigation"></div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
</section>


<?php endif;
get_footer(); ?>