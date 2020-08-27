<?php /* Template name: Nosotros */
get_header();

$header = get_field( 'header' );
$boxX = get_field( 'grupo_large' );
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
<?php if( have_rows('grupo_large') ) : ?>
<section id="highEmployee">
	<?php while( have_rows('grupo_large') ) : the_row();
		$groupRow = get_sub_field( 'employee_row' );
	?>
	<div id="employee-row" class="align-items-center p-2">
		<div class="column-left d-flex">
			<h2 class="bold text-uppercase"><?php echo $groupRow['name']; ?></h2>
			<h6 class="regular"><?php echo $groupRow['studies']; ?></h6>
		</div>
		<div class="column-right d-flex align-items-center">
			<p class="regular"><?php echo $groupRow['description']; ?></p>
			<img src="<?php echo $groupRow['employee_img']; ?>" alt="" class="img-fluid">
		</div>
	</div>
	<?php endwhile; ?>
</section>
<?php endif; ?>
<section id="carouselEmployee">
	<div class="container">
		<div class="row">
			<div class="col-12">
			<div id="empleados" class="swiper-container">
					<div class="swiper-wrapper">
						<?php
							$args = array(
								'post_type'			=> array('employee'),
								'post_status'		=> array('publish'),
								'nopaging'			=> true
							);

							$newQuery = new WP_Query($args);

						while( $newQuery->have_posts() ) : $newQuery->the_post();
						?>
							<div class="swiper-slide d-flex flex-column align-items-center">
								<?php the_post_thumbnail( 'full', array('class'=>'img-fluid') ); ?>
								<h5><?php the_title(); ?></h5>
								<p><?php the_content(); ?></p>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
