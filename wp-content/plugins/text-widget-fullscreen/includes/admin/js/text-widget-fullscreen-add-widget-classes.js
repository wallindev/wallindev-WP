/*
 * Project: http://wpimpress.com
 * Contact: info@wpimpress.com
*/

var text_widget_fullscreen_add_widget_classes;
( function( $ ) {
	text_widget_fullscreen_add_widget_classes = {
		init : function() {
			$( '#widgets-right' ).find( 'div.widget' ).each( function() {
				var widget = $( this );
				text_widget_fullscreen_add_widget_classes.widget_add_class( widget );
			} );
			
			$(document).on('widget-added', function (e, widget) {
				e.preventDefault();

				text_widget_fullscreen_add_widget_classes.widget_add_class( widget );
			});
		},

		widget_add_class : function( widget ) {
			var widget_slug = widget.children( '.widget-inside' ).find( 'input.id_base' ).val();
			var widget_class_we_need = 'widget_' + widget_slug;
			
			if ( widget_slug == 'text' ) {
				if ( ! widget.hasClass( widget_class_we_need ) ) {
					widget.addClass( widget_class_we_need );
				}
			}
		}
	};

	$( document ).ready( function( $ ) { text_widget_fullscreen_add_widget_classes.init(); } );
} ) ( jQuery );