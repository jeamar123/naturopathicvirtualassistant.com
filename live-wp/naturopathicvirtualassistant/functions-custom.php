<?php 
ob_start();


/*----------------------* DISPLAY HOMEPAGE SLIDER *-------------------------*/

function home_page_slider( ) {



	$result = ob_get_contents();

	ob_end_clean(); 

	wp_reset_query();

	

	return $result;

}





/*----------------------* DISPLAY HOMEPAGE CONTENT *-------------------------*/

function page_content() {

	echo '<div class="main_post wow fadeInUp" data-wow-duration="2s">';

	if ( have_posts() ) :

		while ( have_posts( ) ) : the_post();

			the_content();

		endwhile; 

	endif;

	echo '</div>';



	$result = ob_get_contents();

	ob_end_clean(); 

	wp_reset_query();

	

	return $result;

}





/*----------------------* DISPLAY SEARCHED CONTENT *-------------------------*/

function page_searched_content() {

	echo '<div class="main_post wow fadeInUp" data-wow-duration="2s">';

	if ( have_posts() ) :

		while ( have_posts( ) ) : the_post();

			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 

	?>

			<div class="searched_wrapper">

				<div class="searched-title" style="margin-bottom: 20px;">

					<h3 style="margin-bottom:0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

					<small class="text-warning"><i class="fa fa-user"></i> &nbsp; <i>by</i> <?php the_author(); ?></small>

				</div>

				<div class="row">

					<div class="col-md-9 col-sm-9">

						<article class="text-justify">

							<?php the_excerpt(); ?>

						</article>

					</div>

					<div class="col-md-3 col-sm-3">

						<div class="thumbnail-wrapper">

							<?php if ( has_post_thumbnail() ) { ?>

									<a href="<?php the_permalink() ?>">

										<img class="img-thumbnail" src="<?php echo $image[0]; ?>">

									</a>

							<?php }else { ?>

									<a href="<?php the_permalink() ?>">

										<img class="img-thumbnail" src="<?php bloginfo('template_directory'); ?>/img/thumbnail-default.jpg">

									</a>

							<?php } ?>

						</div>

					</div>

				</div>

			</div>

			<hr>

	<?php

		endwhile; 

	endif;

	echo '</div>';



	$result = ob_get_contents();

	ob_end_clean(); 

	wp_reset_query();

	

	return $result;

}



/*----------------------* LOADS PAGES CSS *----------------------------------*/

function page_stylesheet() {

	echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri() .'/css/pages.css">';

}





/*----------------------* DISPLAY FEATURED OFFERS *--------------------------*/

function pods_sidebar_advantage( ) {

	$params = array(

		'limit' => 3

	);



	$pods_object = pods( 'featured_offer' , $params );

	

	while ( $pods_object->fetch() ) {

		$featured_title = $pods_object->field( 'featured_title' );

		$featured_description = $pods_object->field( 'featured_description' );

?>

		<div class="adv-list text-justify">

			<h5><?php echo $featured_title; ?></h5>

			<p>

				<?php echo $featured_description; ?>

			</p>

		</div>

<?php

	}

	$result = ob_get_contents();

	ob_end_clean(); 

	wp_reset_query();

	

	return $result;

}





/*----------------------* DISPLAY FOOTER LOGO *------------------------------*/

function pods_footer_logos( ) {

	$params = array(

		'limit' => 3,

		'order'=>'ASC'

	);



	$pods_object = pods( 'footer_logo' , $params );

	echo '<div class="bottom-brandings">';	

	while ( $pods_object->fetch() ) {

		$footer_logo_src = $pods_object->display( 'footer_logo' );

?>

		<div class="col-md-4 col-sm-6 col-xs-6">

			<img src="<?php echo $footer_logo_src; ?>">

		</div>

<?php

	}

	echo '</div>';

	$result = ob_get_contents();

	ob_end_clean(); 

	wp_reset_query();

	

	return $result;

}



/*----------------------* DISPLAY WEBSITE PAGE *------------------------------*/

function footer_menu_website( ) {

	$page_id = 849;



	if ( has_post_thumbnail( $page_id ) ):

		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'single-post-thumbnail' );

	endif;



	$image_URI = $image[0];



?>

	<div class="col-md-4 col-sm-4 footer-navigation">

		<h4>NEED A WEBSITE?</h4>

		<div class="web-tools">

			<a href="<?php echo get_page_link( $page_id ); ?>">

				<?php if ( get_post_thumbnail_id( $page_id ) ) { 

					echo "<img src='$image_URI'>";

				} ?>

			</a>

		</div>

	</div>



<?php


	$result = ob_get_contents();

	ob_end_clean(); 

	wp_reset_query();

	

	return $result;
}





/*----------------------* DISPLAY WEBSITE PAGE *------------------------------*/

function footer_form_lists( ) {





?>

	<ul class="list-unstyled">

		<?php 

			$args = array(

				'child_of'     => 34,

				'depth'        => 0,

				'echo'         => 1,

				'link_before'  => '<i class="fa fa-angle-double-right"></i>&nbsp;',

				'post_type'    => 'page',

				'post_status'  => 'publish',

				'sort_column'  => 'menu_order, post_title',

				'title_li'     => false, 

				'walker'       => new Walker_Page

			); 

		?>							

		<?php wp_list_pages($args); ?>

	</ul>



<?php

	$result = ob_get_contents();

	ob_end_clean(); 

	wp_reset_query();

	

	return $result;

}


/*----------------------* ERROR 404 PAGE *------------------------------*/

function error_404_page( ) {


?>
	<p>Sorry, the keyword you are looking for is not available. Maybe you want to perform a search?</p>

	

	<?php get_search_form(); ?>

	<br>

	<p>For best search results, mind the following suggestions:</p>

	<ul>

		<li>Always double check your spelling.</li>

		<li>Try similar keywords, for example: tablet instead of laptop.</li>

		<li>Try using more than one keyword.</li>

	</ul>


<?php

	$result = ob_get_contents();

	ob_end_clean(); 

	wp_reset_query();

	

	return $result;

}



?>

		