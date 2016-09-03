$( document ).ready( function() {
	
	// var url_path = window.location.origin;
	var url_path = "file:///C:/Users/Billy%20Joel%20Ranario/Google%20Drive/__PROJECTS/__HPM%20Projects/naturopathicvirtualassistant.com/html/";

	// console.log( url_path );

	$( '#banner' ).layerSlider({
	 	autostart: true,
		skin: 'fullwidth',
		skinsPath: url_path + 'skins/',
		responsiveUnder: 960,
		layersContainer: 960,
		hoverBottomNav: true,
		thumbnailNavigation : 'hover'
    });

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

} );