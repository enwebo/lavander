/**
 * File login-with-ajax.js
 *
 * Deal with multiple modals and their media.
 */
window.lavanderLoginWithAjax = {};

( function ( window, $, app ) {
	// Constructor.
	app.init = function () {
		app.cache();

		if ( app.meetsRequirements() ) {
			app.bindEvents();
		}
	};

	// Cache all the things.
	app.cache = function () {
		app.$c = {
			'body': $( 'body' )
		};
	};

	// Do we meet the requirements?
	app.meetsRequirements = function () {
		return $( '.lwa-register' ).length;
	};

	// Combine all events.
	app.bindEvents = function () {

		// Trigger a modal to open.
		app.$c.body.on( 'click touchstart', '.register', app.showRegisterForm );

		// Trigger the close button to close the modal.
		app.$c.body.on( 'click touchstart', '.close', app.closeFrom );

		// Allow the user to close the modal by clicking outside of the modal.
		app.$c.body.on( 'click touchstart', 'div.modal-open', app.closeModalByClick );
	};

	// Open the modal.
	app.showRegisterForm = function () {

		event.preventDefault();
		// Figure out what we show.
		var $register_form = $(this).parents('.lwa').find('.lwa-register');
		// Display the register form.
		if( register_form.length > 0 ){
			alert('');
			event.preventDefault();
			register_form.toggle('slow');
			$(this).parents('.lwa').find('.lwa-remember').toggle('slow');
		}


		// Display the modal.
		$modal.addClass( 'modal-open' );

		// Add body class.
		app.$c.body.addClass( 'modal-open' );
	};

	// Close the modal.
	app.closeFrom = function () {
		// Figure the opened modal we're closing and store the object.
		var $modal = $( $( 'div.modal-open .close' ).data( 'target' ) );

		// Find the iframe in the $modal object.
		var $iframe = $modal.find( 'iframe' );

		// Get the iframe src URL.
		var url = $iframe.attr( 'src' );

		// Remove the source URL, then add it back, so the video can be played again later.
		$iframe.attr( 'src', '' ).attr( 'src', url );

		// Finally, hide the modal.
		$modal.removeClass( 'modal-open' );

		// Remove the body class.
		app.$c.body.removeClass( 'modal-open' );
	};

	// Close if the user clicks outside of the modal
	app.closeModalByClick = function ( event ) {
		// If the parent container is NOT the modal dialog container, close the modal
		if ( !$( event.target ).parents( 'div' ).hasClass( 'modal-dialog' ) ) {
			app.closeForm();
		}
	};

	// Engage!
	$( app.init );
} )( window, jQuery, window.lavanderLoginWithAjax );
