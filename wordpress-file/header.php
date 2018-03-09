



<div id="navi-wrap">
	<nav id="mainnav" class="clearfix" role="navigation">
		<?php
			// Display Main Navigation
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container' => false,
				'menu_id' => 'mainnav-menu',
				'menu_class' => 'main-navigation-menu',
				'echo' => true,
				'fallback_cb' => 'courage_default_menu',
			) );
		?>
	</nav>
</div>



