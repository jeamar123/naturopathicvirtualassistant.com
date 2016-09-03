<?php 
 
get_header();

page_stylesheet();

?>



	<!-- #main-container -->

	<section id="main-container">



		<div class="breadcrumbs">

			<div class="container">

				<div class="col-md-12">

					<h3>Page not found</h3>

				</div>

			</div>

		</div>

		<!-- #page-content -->

		<div id="page-content">

			<div class="container">

				<div class="article-wrapper page-article-wrapper">

					<div class="col-md-8">

						<article>

							<?php echo error_404_page(); ?>

						</article>

					</div>

					<div class="col-md-3 col-md-offset-1">

						<?php get_sidebar(); ?>

					</div>

				</div>



				<div class="row">

					
					<?php pods_footer_logos( ); ?>


				</div>

			</div>

		</div>

		<!-- End: #page-content -->

	</section>

	<!-- End: #main-container -->

<?php get_footer(); ?>