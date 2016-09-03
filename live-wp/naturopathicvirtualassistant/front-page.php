

<?php get_header();  ?>



	<!-- #main-container -->

	<section id="main-container">

		<div id="banner-wrapper">

			<div class="container">

				<div class="banner-content" id="banner">

				

					<!-- slide one -->

					<div class="ls-slide slide-content"  data-ls="delayin: 900;offsetyin: top;">

						<div class="ls-l img-content-slider slider-img-1" data-ls="offsetxin:left;">

							<img src="<?php bloginfo('template_directory'); ?>/img/slide-call.png">	

							<img src="<?php bloginfo('template_directory'); ?>/img/slide-call.png" class="ls-tn">	

						</div>

						<div class="ls-l texts-content slider-text-1" data-ls="offsetxin:right;delayin:700">

							<h2>Never miss ANOTHER CALL</h2>

						</div>

						<div class="ls-l texts-content slider-text-1" data-ls="offsetxin:right;delayin:1000">

							<p>

								Virtual Assistant will take calls, schedule appointments, and other routine office functions. 

							</p>

						</div>

					</div>

				

					<!-- slide two -->

					<div class="ls-slide slide-content"  data-ls="delayin: 900;offsetyin: top;">

						<div class="ls-l img-content-slider slider-img-2" data-ls="offsetxin:right">

							<img src="<?php bloginfo('template_directory'); ?>/img/slide-receptionist.png">	

							<img src="<?php bloginfo('template_directory'); ?>/img/slide-receptionist.png" class="ls-tn">	

						</div>

						<div class="ls-l texts-content slider-text-2 st1" data-ls="offsetxin:left;delayin:700">

							<h2>More than a Receptionist</h2>

						</div>

						<div class="ls-l texts-content slider-text-2 st2" data-ls="offsetxin:left;delayin:1000">

							<p>

								The person you can work with one-on-one to tackle your specific needs.

							</p>

						</div>

						<div class="ls-l texts-content slider-text-2 st3" data-ls="offsetxin:left;delayin:1200">

							<ul class="list-circle">

								<li>Handle billing and accounting</li>

								<li>Prepare and send out e-mail newsletters</li>

								<li>Handle client inquiries by phone or e-mail.. and more!</li>

							</ul>

						</div>

					</div>

				

					<!-- slide three -->

					<div class="ls-slide slide-content"  data-ls="delayin: 900;offsetyin: top;">

						<div class="ls-l img-content-slider slider-img-3" data-ls="offsetxin:right">

							<img src="<?php bloginfo('template_directory'); ?>/img/slide-web.png">	

							<img src="<?php bloginfo('template_directory'); ?>/img/slide-web.png" class="ls-tn">	

						</div>

						<div class="ls-l texts-content slider-text-3" data-ls="offsetxin:left;delayin:700">

							<ul class="list-circle">

								<li><i class="fa fa-check-square-o"></i> Web Domain Services</li>

								<li><i class="fa fa-check-square-o"></i> Website Development</li>

								<li><i class="fa fa-check-square-o"></i> Website Upgrade</li>

								<li><i class="fa fa-check-square-o"></i> Content Management</li>

							</ul>

						</div>

					</div>



				</div>

			</div>

		</div>

		

		<div id="newsletter-wrapper">

			<div class="container">

				<div class="newsletter-content">

					<div class="form" id="newsletter-form">

						<div class="remove-margin pull-left">Get a chance to receive freebies upon subscribing!</div>

						<form class="form-inline">

							<div class="form-group">

								<input type="text" class="form-control name" placeholder="Your Name">

							</div>

							<div class="form-group">

								<input type="email" class="form-control email" placeholder="Your Email">

							</div>

							<button class="btn btn-warning form-control">Subscribe Now</button>

						</form>

					</div>

				</div>

			</div>

		</div>



		<!-- #page-content -->

		<div id="page-content">



			<div class="container">

				<div class="article-wrapper">

					<div class="home-web-advantage">

						<div class="advantage-heading">

							<div class="horizontal-gray-line"></div>

							<label>Advantage</label>

						</div>

						<div class="features col-md-4 col-sm-6 col-xs-6">

							<div class="icon-wrapper">

								<i class="fa fa-dollar" style="width:132px;"></i>

							</div>	

							<div class="column-content">

								<h4>Substantially LOWER costs</h4>

							</div>

						</div>

						<div class="features col-md-4 col-sm-6 col-xs-6">

							<div class="icon-wrapper">

								<i class="fa fa-black-tie" style="width:132px;"></i>

							</div>	

							<div class="column-content">

								<h4>Professionalism</h4>

							</div>

						</div>

						<div class="features col-md-4 col-xs-12">

							<div class="icon-wrapper">

								<i class="fa fa-desktop" style="width:132px;"></i>

							</div>	

							<div class="column-content">

								<h4>Let us figure the technology out for you!</h4>

							</div>

						</div>

					</div>

					<article>

						<?php echo page_content(); ?>

					</article>

				</div>



				<div class="row">

					<?php pods_footer_logos( ); ?>

				</div>

			</div>

		</div>

		<!-- End: #page-content -->

	</section>

<?php get_footer() ?>