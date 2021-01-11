<?php /* Template name: Nosotros */
get_header();

$header = get_field( 'header' );
$boxX = get_field( 'grupo_large' );
$datosExtra = the_field( 'datos_extra' );
?>
<section
	id="header"
	class="bg-full"
	style="background-image:url('<?php echo $header['img_back']; ?>);">
		<div class="overlay"></div>
</section>
<div class="rectangle"></div>
<?php if( have_rows('grupo_large') ) : ?>
<section id="highEmployee">
	<?php while( have_rows('grupo_large') ) : the_row();
		$groupRow = get_sub_field( 'employee_row' );
	?>
	<div id="employee-row" class="align-items-center p-2">
		<div class="column-left">
			<div class="row-heading">
				<h2
					class="h2-title text-uppercase"
					data-aos="zoom-in-up"
					data-aos-offset="150"
					data-aos-easing="ease-out-cubic"><?php echo $groupRow['name']; ?></h2>
				<h6
					class="h6-title"
					data-aos="zoom-in-up"
					data-aos-offset="150"
					data-aos-easing="ease-out-cubic"><?php echo $groupRow['studies']; ?></h6>
			</div>
			<p
				class="short-content mb-0"
				data-aos="zoom-in-up"
				data-aos-offset="150"
				data-aos-easing="ease-out-cubic"><?php echo $groupRow['description']; ?></p>
		</div>
		<div class="column-right">
			<img
				src="<?php echo $groupRow['employee_img']; ?>"
				class="img-fluid"
				data-aos="zoom-in-up"
				data-aos-offset="150"
				data-aos-easing="ease-out-cubic">
		</div>
	</div>
	<?php endwhile; ?>
</section>
<?php endif; ?>
<section id="carouselEmployee">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-11 col-lg-10 mx-auto inner-row">
				<div id="empleados" class="swiper-container">
					<div class="swiper-wrapper">
						<?php
							$args = array(
								'post_type'			=> array('employee'),
								'post_status'		=> array('publish'),
								'category_name'		=> 'empleados',
								'nopaging'			=> true
							);

							$newQuery = new WP_Query($args);

							while( $newQuery->have_posts() ) : $newQuery->the_post();
						?>
							<div class="swiper-slide d-flex flex-column align-items-center">
								<?php the_post_thumbnail( 'full', array('class'=>'img-fluid') ); ?>
								<h6 class="h6-title"><?php the_title(); ?></h6>
								<h6><?php echo $datosExtra[ 'posicion' ]; ?></h6>
								<a href="mailto:"<?php echo $datosExtra[ 'correo' ]; ?>"><?php echo $datosExtra[ 'correo' ]; ?></a>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="swiper-button-next button-slider"></div>
					<div class="swiper-button-prev button-slider"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
