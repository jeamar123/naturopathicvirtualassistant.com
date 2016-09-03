<?php 

define( 'theme_url' , get_template_directory_uri() . '/' );
define('root_path',  get_template_directory_uri() . '/' );

include "inc/widgets.php";
include "inc/class-tgm-plugin-activation.php";
include "inc/theme-options.php";
// include "inc/tgm-plugin-activation.php";
include "inc/custom-header.php";
include "init/wp-bootstrap-navwalker.php";
include  'functions-custom.php';

/* -----------------  Gets the Theme name --------------------- */
function get_theme_name() {
	$name = str_replace(dirname(dirname(__FILE__)),'',dirname(__FILE__));
	$name = ltrim($name,'\\');	
	return $name;
}

/* -----------------  Register Menus in Admin Page ------------- */
function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}

/* -----------------  Add class to link tag in menu ------------- */
// function add_menuclass($ulclass) {
// 	return preg_replace('/<a"/ ', '<a class="hvr-underline-from-center"', $ulclass, 1);
// }

/* -----------------  Register Sidebar -------------------------- */
function arphabet_widgets_init() {
	register_sidebar(array(
		'name' => __('Main sidebar', 'framewrok'),
		'id' => 'home_right_1',
		'description' => __('Default main sidebar.', 'framework'),
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title"><h2>',
		'after_title' => '</h2></div>'
	));
}

/* ----------------- Customize Read More in Excerpt ------------ */
function excerpt_readmore( $more ) {
	return ' ...';
}
function search_page_text_length($length) {
    return 50;
}


/* -----------------  Initiate registered functions ------------ */
add_action( 'init', 'register_my_menu' );
// add_filter('wp_nav_menu','add_menuclass');
add_theme_support( 'post-thumbnails' );
add_action( 'widgets_init', 'arphabet_widgets_init' );


/* ----------------- Initiate Read More in Excerpt ------------- */
add_filter( 'excerpt_more', 'excerpt_readmore' );
add_filter('excerpt_length', 'search_page_text_length');


?>