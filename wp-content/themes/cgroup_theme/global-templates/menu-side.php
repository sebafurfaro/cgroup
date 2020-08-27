<div id="sidebar-menu">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => '',
							'container_id'    => 'navbarDesk',
							'menu_class'      => 'nav-menu',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
				<a href="#" class="btn-link contact-online ml-0 text-uppercase text-white">Contacto online</a>
			</div>
		</div>
	</div>
</div>