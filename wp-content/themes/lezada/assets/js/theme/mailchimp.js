// Mailchimp
(function( $ ) {

	lezada.mailchimpSubscribe = function() {

		var _forms = [].slice.call( document.querySelectorAll( '.lezada-mailchimp .mailchimp-form' ) );

		_forms.forEach( function( _form ) {

			_form.addEventListener( 'submit', function( e ) {

				e.preventDefault();

				_form.classList.add( 'mailchimp-loading' );

				var _message = _form.parentNode.querySelector( '.mailchimp-message' );

				_message.innerHTML = '';
				_message.classList.remove( 'success' );
				_message.classList.remove( 'error' );

				$.ajax( {
					url    : lezadaConfigs.ajax_url,
					type   : 'POST',
					data   : {
						action : 'lezada_ajax_subscribe',
						email  : _form.querySelector( '.mailchimp-email' ).value,
						list_id: _form.querySelector( '.mailchimp-list-id' ).value, //optin  : true
					},
					success: function( res ) {

						if (res) {

							var response = JSON.parse( res );

							_message.innerHTML = response.message;
							_message.classList.add( response.action_status ? 'success' : 'error' );
						}

						_form.classList.remove( 'mailchimp-loading' );
					}
				} );
			} );
		} );

	};
})( jQuery );
