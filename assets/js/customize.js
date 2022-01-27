/* global twentytwentyoneGetHexLum */

( function() {
	// Wait until the customizer has finished loading.
	wp.customize.bind( 'ready', function() {
		// Hide the "respect_user_color_preference" setting if the background-color is dark.
		if ( 127 > twentytwentyoneGetHexLum( wp.customize( 'background_color' ).get() ) ) {
			wp.customize.control( 'respect_user_color_preference' ).deactivate();
			wp.customize.control( 'respect_user_color_preference_notice' ).deactivate();
		}

		// Handle changes to the background-color.
		wp.customize( 'background_color', function( setting ) {
			setting.bind( function( value ) {
				if ( 127 > twentytwentyoneGetHexLum( value ) ) {
					wp.customize.control( 'respect_user_color_preference' ).deactivate();
					wp.customize.control( 'respect_user_color_preference_notice' ).activate();
				} else {
					wp.customize.control( 'respect_user_color_preference' ).activate();
					wp.customize.control( 'respect_user_color_preference_notice' ).deactivate();
				}
			} );
		} );
	} );
}() );

function openCity(evt, cityName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
	  tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
	  tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " active";
  }
