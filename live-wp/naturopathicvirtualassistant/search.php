<?php 
get_header();
page_stylesheet();
?>

	<!-- #main-container -->
	<section id="main-container">

		<div class="breadcrumbs">
			<div class="container">
				<div class="col-md-12">
					<h3>SEARCH RESULTS FOR: <?php echo @$_GET['s']; ?></h3>
				</div>
			</div>
		</div>
		<!-- #page-content -->
		<div id="page-content">
			<div class="container">
				<div class="article-wrapper page-article-wrapper">
					<div class="col-md-8">
						<article>
							<?php echo page_searched_content(); ?>
						</article>
					</div>
					<div class="col-md-3 col-md-offset-1">
						<?php get_sidebar(); ?>
					</div>
				</div>

				<div class="row">
					<div class="bottom-brandings">
						<div class="col-md-4 col-sm-6 col-xs-6">
							<img src="<?php bloginfo('template_directory'); ?>/img/scnm.gif">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<img src="<?php bloginfo('template_directory'); ?>/img/bastyr.gif">
						</div>
						<div class="col-md-4">
							<img src="<?php bloginfo('template_directory'); ?>/img/ccnm.gif">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End: #page-content -->
	</section>
	<!-- End: #main-container -->

<?php get_footer(); ?>