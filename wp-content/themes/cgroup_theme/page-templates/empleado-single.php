<div id="empleados" class="swiper-container">
	<div class="swiper-wrapper">
		<?php
			$args = array(
				'post_type'			=> array('Empleados'),
				'post_status'		=> array('publish'),
				'category_name'		=> 'empleados',
				'nopaging'			=> true,
				'showposts'			=> 6
			);

			$newQuery = new WP_Query($args);

			while( $newQuery->have_posts() ) : $newQuery->the_post();

			$datosExtra = the_field( 'datos_extra' );
		?>
			<div class="swiper-slide d-flex flex-column align-items-center">
				<?php the_post_thumbnail( 'full', array('class'=>'img-fluid') ); ?>
				<h5><?php the_title(); ?></h5>
				
			</div>
		<?php endwhile; ?>
	</div>
	<div class="swiper-pagination"></div>
</div>