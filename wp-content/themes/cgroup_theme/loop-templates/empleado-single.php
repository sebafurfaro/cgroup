<div id="empleados" class="swiper-container">
	<div class="swiper-wrapper">
		<?php
			$args = array(
				'post_type'			=> array('Empleados'),
				'post_status'		=> array('publish'),
				'category_name'	=> 'empleados',
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