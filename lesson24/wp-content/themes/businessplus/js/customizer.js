/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

	//displaying sections on homepage

	wp.customize( 'display_about_us', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '#about' ).hide() : $( '#about' ).show();
		} );
	} );

	wp.customize( 'display_services', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '#services' ).hide() : $( '#services' ).show();
		} );
	} );

	wp.customize( 'display_testimonials', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '#testimonials' ).hide() : $( '#testimonials' ).show();
		} );
	} );

	wp.customize( 'display_news', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '#news' ).hide() : $( '#news' ).show();
		} );
	} );

	wp.customize( 'display_partners', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '#partners' ).hide() : $( '#partners' ).show();
		} );
	} );

} )( jQuery );
