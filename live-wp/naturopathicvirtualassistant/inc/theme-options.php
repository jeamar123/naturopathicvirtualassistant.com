<?php
function customize_options_register($wp_customize) {
	$themeurl = get_template_directory_uri().'/';
	
/*---- Start THEME LOGO ----*/
	$wp_customize->add_section('theme_header', array(
		'title' => __('Header', 'billy-theme'),
		'description' => 'Modify the theme logo',
		'priority'   => 32
	));
	$wp_customize->add_setting('favicon', array(
		'default' => $themeurl.'images/favicon.png'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'favicon', array(
		'label' => __('Set Favicon', 'billy-theme'),
		'section' => 'theme_header', 
		'settings' => 'favicon'
	) ));
/*---- End THEME LOGO ----*/
	
/*--- Start THEME COPYRIGHT and CREDIT ---*/
	$wp_customize->add_section('theme_copyright_credit', array(
		'title' => __('Copyright and Credit', 'billy-theme'),
		'description' => 'Add theme Copyright and Credit'
	));
	/*--- Copyright ---*/
	$wp_customize->add_setting('copyright', array(
		'default' => 'Copyright 2015'
	));
	$wp_customize->add_control('copyright', array(
		'label' => __('Set Theme Copyright here', 'billy-theme'),
		'section' => 'theme_copyright_credit', 
		'settings' => 'copyright'
	));
	/*--- Credit ---*/
	$wp_customize->add_setting('credit', array(
		'default' => 'naturopathicvirtualassistant.com'
	));
	$wp_customize->add_control('credit', array(
		'label' => __('Set Theme Credit/Developed by', 'billy-theme'),
		'section' => 'theme_copyright_credit', 
		'settings' => 'credit'
	));

	/*--- Footer Content ---*/
	$wp_customize->add_section('theme_footer_desctription', array(
		'title' => __('Add Blog description', 'billy-theme'),
		'description' => 'Footer Description'
	));	
	// Title
	$wp_customize->add_setting('footer_title', array(
		'default' => ''
	));
	$wp_customize->add_control('footer_title', array(
		'label' => __('Add blog owner', 'billy-theme'),
		'section' => 'theme_footer_desctription', 
		'settings' => 'footer_title'
	));
	// Description
	$wp_customize->add_setting('footer_description', array(
		'default' => ''
	));
	$wp_customize->add_control('footer_description', array(
		'label' => __('Add blog owner description', 'billy-theme'),
		'section' => 'theme_footer_desctription', 
		'settings' => 'footer_description'
	));

/*--- End THEME COPYRIGHT and CREDIT ---*/


/*---------------- ADD SOCIAL LINKS ----------------*/
	$wp_customize->add_section('theme_social_links', array(
		'title' => __('Social Links', 'billy-theme'),
		'description' => 'Add Social Links details.'
	));
		/*--- Facebook ---*/
	$wp_customize->add_setting('facebook', array(
		'default' => 'https://www.facebook.com/'
	));
	$wp_customize->add_control('facebook', array(
		'label' => __('Enter your Facebook link', 'billy-theme'),
		'section' => 'theme_social_links', 
		'settings' => 'facebook'
	));
		/*--- Twitter ---*/
	$wp_customize->add_setting('twitter', array(
		'default' => 'https://twitter.com/'
	));
	$wp_customize->add_control('twitter', array(
		'label' => __('Enter your Twitter link', 'billy-theme'),
		'section' => 'theme_social_links', 
		'settings' => 'twitter'
	));
		/*--- Instagram ---*/
	$wp_customize->add_setting('instagram', array(
		'default' => 'https://instagram.com/'
	));
	$wp_customize->add_control('instagram', array(
		'label' => __('Enter your Instagram link', 'billy-theme'),
		'section' => 'theme_social_links', 
		'settings' => 'instagram'
	));
/*---------------- end: ADD SOCIAL LINKS ----------------*/


/*--- Start CONTACT Information ---*/
	$wp_customize->add_section('theme_contact_info', array(
		'title' => __('Contact Information', 'billy-theme'),
		'description' => 'Add Contact Information details.'
	));
	/*--- Address ---*/
	$wp_customize->add_setting('address', array(
		'default' => 'Your Address, Here'
	));
	$wp_customize->add_control('address', array(
		'label' => __('Enter your address here', 'billy-theme'),
		'section' => 'theme_contact_info', 
		'settings' => 'address'
	));
	/*--- Phone Number ---*/
	$wp_customize->add_setting('phone', array(
		'default' => '00 00 00 00'
	));
	$wp_customize->add_control('phone', array(
		'label' => __('Enter your phone number here', 'billy-theme'),
		'section' => 'theme_contact_info', 
		'settings' => 'phone'
	));
	/*--- Fax Number ---*/
	$wp_customize->add_setting('fax', array(
		'default' => '00 00 00 00'
	));
	$wp_customize->add_control('fax', array(
		'label' => __('Enter your fax number here', 'billy-theme'),
		'section' => 'theme_contact_info', 
		'settings' => 'fax'
	));

	/*--- Email ---*/
	$wp_customize->add_setting('email', array(
		'default' => 'mail@example.com'
	));
	$wp_customize->add_control('email', array(
		'label' => __('Enter your email here', 'billy-theme'),
		'section' => 'theme_contact_info', 
		'settings' => 'email'
	));
/*--- End CONTACT Information ---*/
}

add_action('customize_register', 'customize_options_register');
?>
