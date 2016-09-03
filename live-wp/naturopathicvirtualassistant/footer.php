
	<!-- Footer -->
	<footer>
		<div class="gradient-separator"></div>
		<div class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/img/green-background-2_004505471.jpg">
			<div class="parallax-window-content text-center">
				<div class="contact-link-wrapper">
					<h4 class="remove-margin">CALL <?php echo get_theme_mod( 'phone' ); ?></h4>
					<a href="http://www.naturopathicvirtualassistant.com/contact" class="hvr-outline-in">GET STARTED TODAY</a>
				</div>
			</div>
		</div>
		<div class="footer-nav-wrapper">
			<div class="container">
				<div class="col-md-4 col-sm-4 footer-navigation footer-nav-2">
					<h4>GET STARTED WITH THESE FORMS</h4>
					<?php footer_form_lists(); ?>
				</div>
				<?php footer_menu_website( ); ?>
				<div class="col-md-4 col-sm-4 footer-navigation">
					<h4>CONTACT US!</h4>

					<?php if ( get_theme_mod( 'phone' ) ) { ?>
						<p>
							<i class="fa fa-phone"></i>&nbsp; Tel: <?php echo get_theme_mod( 'phone' ); ?>
						</p>
					<?php } ?>	

					<?php if ( get_theme_mod( 'fax' ) ) { ?>
						<p>
							<i class="fa fa-fax"></i>&nbsp; Fax: <?php echo get_theme_mod( 'fax' ); ?>
						</p>
					<?php } ?>	

					<?php if ( get_theme_mod( 'address' ) ) { ?>
						<p>
							<i class="fa fa-map-marker"></i>&nbsp; <?php echo get_theme_mod( 'address' ); ?>
						</p>
					<?php } ?>	

					<p>
						<i class="fa fa-envelope"></i>&nbsp; Send us your message using our <a href="http://www.naturopathicvirtualassistant.com/contact">Contact form</a>
					</p>

				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container text-center">
				<p>&copy; <?php echo get_theme_mod( 'copyright' ); ?> - <a href="http://<?php echo get_theme_mod( 'credit' ); ?>"><?php bloginfo( 'name' ); ?></a></p>
			</div>
		</div>
	</footer>
	<!-- End: Footer -->

	<!-- Scripts -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/greensock.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/layerslider.kreaturamedia.jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/layerslider.transitions.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/parallax.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/waypoints.min.js"></script>	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/waypoints-sticky.min.js"></script>	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>	
	<?php  wp_footer(); ?>
</body>
</html>
