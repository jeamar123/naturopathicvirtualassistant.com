$( document ).ready( function() {

	

	// var url_path = window.location.origin;

	var url_path = $( '#template_directory' ).val() + '/';





	/*-----------------* for sliding banner *-------------------------------*/

	$( '#banner' ).layerSlider({

	 	autostart: true,

		skin: 'fullwidth',

		skinsPath: url_path + 'skins/',

		responsiveUnder: 960,

		layersContainer: 960,

		hoverBottomNav: true,

		thumbnailNavigation : 'hover'

    });

	/*-----------------* for sticky subscription *--------------------------*/

		$( "#newsletter-wrapper" ).waypoint( 'sticky' );



	/*-----------------* for navbar toggle icon *---------------------------*/

	$( '.navbar-toggle' ).click( function() {

		var status = $( '#main-menu-wrapper' ).attr( 'aria-expanded' );

		if( status == 'true' ){

			$( this ).find( '.icon-bar' ).show();

			$( this ).find( '.fa-close' ).hide();

		}else if( status == 'false' ) {

			$( this ).find( '.icon-bar' ).hide();

			$( this ).find( '.fa-close' ).show();

		}



	} );



	/*-----------------* Add icon angle-right in submenu *-------------------*/

	$( 'ul#main-menu li ul li a' ).prepend( '<i class="fa fa-angle-right"></i>&nbsp;' );



	/*-----------------* Adds animation on homepage feature *----------------*/

	$( '.icon-wrapper' ).mouseover( function() {

		$( this ).children( ':first-child' ).addClass( 'animated tada hovered' );

		$( this ).children( 'i' ).addClass( 'text-hovered' );

	} );

	$( '.icon-wrapper' ).mouseout( function() {

		$( this ).children( ':first-child' ).removeClass( 'animated tada hovered' );

		$( this ).children( 'i' ).removeClass( 'text-hovered' );

	} );

						

} );