<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<title><?php bloginfo( 'name' ); ?></title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta name="description" content="" />

	<meta name="author" content="" />

	<?php if( get_theme_mod('favicon') ){ ?>

	<link rel="icon" href="<?php echo get_theme_mod('favicon'); ?>" />

	<?php } ?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">

	<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css"> -->

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.min.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/layerslider.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/hover-min.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/homepage.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">

	

	<?php if( is_page('page.php') ) :?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/pages.css" media="screen" />

	<?php endif;?>



	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>



	<?php wp_head(); ?>



</head>

<body>

	<input type="hidden" value="<?php bloginfo('template_directory'); ?>" id="template_directory">

	<!-- Header -->

	<header>

		<section class="top-search">

			<div class="container">

				<div class="row search_box">

					<div class="col-md-6 col-sm-6 col-xs-12 main-branding">

						<div class="logo-wrapper">

							<a href="<?php echo site_url() ?>">

								<img src="<?php bloginfo('template_directory'); ?>/img/logo.png">

							</a>

						</div>

						<div class="navbar-header">

							<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

								<span class="sr-only">Toggle navigation</span>

								<span class="icon-bar"></span>

								<span class="icon-bar"></span>

								<span class="icon-bar"></span>

								<i class="fa fa-close" style="display:none"></i>

							</button>

						</div>

					</div>

					<div class="col-md-6 col-sm-6 hidden-xs row-search-form">

						<div class="form-wrapper">

							<?php get_search_form(); ?>

						</div>

					</div>

				</div>

			</div>

		</section>



		<!-- Main Menu Contents -->

		<section class="main-navigation">

			<div class="container" id="main-menu-container">

				<nav class="navbar navbar-collapse bs-navbar-collapse collapse" id="main-menu-wrapper" aria-expanded="false" style="height: 1px;">

					

					<div class="visible-xs" id="dropdown-search">

						<div class="row">

							<div class="col-md-12 col-sm-12 row-search-form">

								<div class="form-wrapper">

									<?php get_search_form(); ?>

								</div>

							</div>

						</div>

					</div>



					<?php

						wp_nav_menu( array(

							'menu' => 'top',

							'depth' => 3,

							'container' => FALSE,

							'menu_class' => 'nav navbar-nav',

							'menu_id'	=> 'main-menu',

							'walker' => new wp_bootstrap_navwalker())

						);

					?>



					<?php if ( get_theme_mod( 'phone' ) ) { ?>

						<ul class="list-inline social-links remove-margin pull-right">

							<li>

								<i class="fa fa-phone-square"></i> <?php echo get_theme_mod( 'phone' ); ?>

							</li>

						</ul>

					<?php } ?>	

					

				</nav>

			</div>

		</section>

		<div class="gradient-separator"></div>

	</header>