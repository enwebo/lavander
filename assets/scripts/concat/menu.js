/**
 * file menu.js
 *
 * Mobile Navigation Menu
 */
window.lavanderMobileNav = {};
( function ( window, $, app ) {
	// Constructor
	app.init = function () {
		app.cache();

		if ( app.meetsRequirements() ) {
			app.bindEvents();
		}
	};

	// Cache all the things
	app.cache = function () {
		app.$c = {
			'window': $( window ),
			'body': $( 'body' ),
			'navMenuContainer': $( '.menu' ),
		};
	};

	// Combine all events
	app.bindEvents = function () {


		// Show more items when the "more" item is clicked.
		app.$c.body.on( 'click', '.menu-btn', app.displayMenu );

		// Add the more classes when hovering a parent menu item.
		app.$c.body.on( 'click', '.menu .menu-item-has-children > a', app.setSecondClick );

		// Hide the menu when the close button is clicked.
		app.$c.body.on( 'click', '.close-menu', app.hideMenu );
	};

	// Do we meet the requirements?
	app.meetsRequirements = function () {
		return app.$c.navMenuContainer.length;
	};

	// Toggle the menu items on a click of the "more" link.
	app.displayMenu = function ( event ) {
		event.preventDefault();

		// Hide the menu if it's already opened
		if ( app.$c.body.hasClass( 'menu-more' ) && !app.$c.body.hasClass( 'sub-menu-more' ) ) {
			app.removeMenuClasses();
			return;
		}

		// Remove any instances of classes already in place.
		// This makes sure we can click to switch between submenus.
		app.removeMenuClasses();

		app.$c.navMenuContainer.toggleClass( 'more' );
		app.$c.body.toggleClass( 'menu-more' );
	};

	// Let the submenu parent be a normal link on the second click
	app.setSecondClick = function ( event ) {
		// Check to see if this parent has the visible class
		if( !$( this ).parent( 'li' ).hasClass( 'visible' ) ) {
			// Don't let the link fire as a normal link
			event.preventDefault();
		}

		// Remove any instances of classes already in place
		// This makes sure we can click to switch between submenus
		app.removeMenuClasses();

		// Toggle the class to display the submenu
		$( this ).parent( 'li' ).toggleClass( 'visible' );

		// Add our "more" classes as we do when clicking the "More" link
		app.$c.navMenuContainer.toggleClass( 'more' );
		app.$c.body.toggleClass( 'menu-more sub-menu-more' );
	};

	// Hide the menu items
	app.hideMenu = function () {
		app.removeMenuClasses();
	};

	app.removeMenuClasses = function () {
		// Remove any instances of classes already in place
		// This makes sure we can click to switch between submenus
		app.$c.body.removeClass( 'menu-more' );
		app.$c.navMenuContainer.removeClass( 'visible' );
		// $( '.menu-item-has-children' ).removeClass( 'visible' );
	};

	// Engage
	$( app.init );
} )( window, jQuery, window.lavanderMobileNav );
