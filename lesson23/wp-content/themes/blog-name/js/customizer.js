/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'first_word', function( value ) {
		value.bind( function( to ) {
			$( '.first-word' ).text( to );
		} );
	} );
	wp.customize( 'second_word', function( value ) {
		value.bind( function( to ) {
			$( '.second-word' ).text( to );
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

	//Slider effects
	wp.customize( 'fade_slide_options', function( value ) {
		value.bind( function( to ) {
			$('.slider').slick('unslick');
			if(to ==='slide') {
				$('.slider').slick({
					dots: true,
					arrows: false,
					cssEase: 'ease-in',
					slidesToShow: 1,
					autoplay: true,
					slideToScroll: 1,
					speed: 500
				});
			} else {
				$('.slider').slick({
					dots: true,
					arrows: false,
					cssEase: 'ease-in',
					slidesToShow: 1,
					autoplay: true,
					fade: true,
					speed: 500
				});
			}
		} );
	} );
	
	//Frontpage blog posts title
	wp.customize( 'front_page_title', function( value ) {
		value.bind( function( to ) {
			$( '.frontpage-title' ).text( to );
		} );
	} );

	//sidebar banner
	wp.customize('sidebar_image', function (value) {
		value.bind(function (to) {
			if ($.trim(to).length) {
				$('.sidebar-banner').css('background-image', 'url(' + to + ')');
			} else {
				$('.sidebar-banner').css('background-image', '');
			}
		});
	});

	//Add names to categories pages
	wp.customize( 'subtitle', function( value ) {
		value.bind(function (to) {
			$('.subtitle').text(to);
		});
	});
	//contact page
	wp.customize( 'subtitle', function( value ) {
		value.bind(function (to) {
			$('.subtitle').text(to);
		});
	});

	wp.customize( 'description', function( value ) {
		value.bind(function (to) {
			$('.desc').text(to);
		});
	});

	wp.customize( 'phone_number', function( value ) {
		value.bind(function (to) {
			$('.phone-number').text(to);
		});
	});
	wp.customize( 'small_exp', function( value ) {
		value.bind(function (to) {
			$('.small-exp').text(to);
		});
	});
	wp.customize( 'email', function( value ) {
		value.bind(function (to) {
			$('.email').text(to);
		});
	});


	//Footer customize
	wp.customize( 'footer_copyright', function( value ) {
		value.bind( function( to ) {
			$( '.copyright' ).text( to );
		});
	});
} )( jQuery );
