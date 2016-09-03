<?php

function iwp_responsive_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'iwp_responsive_custom_header_args', array(
		'width'                  => 1240,
		'height'                 => 620,
		'header-text'            => FALSE,
		'flex-height'            => TRUE,
		'admin-preview-callback' => 'iwp_responsive_admin_header_image',
	) ) );
}

	add_action( 'after_setup_theme', 'iwp_responsive_custom_header_setup' );

if ( ! function_exists( 'iwp_responsive_admin_header_image' ) ) :

	function iwp_responsive_admin_header_image() {
	?>
		<div id="headimg">
			<?php if( get_header_image() ) : ?>
				<img src="<?php header_image(); ?>" alt="banner" />
			<?php endif; ?>
		</div>
	<?php
	}
	
endif;
?>
