// Video popup and gifplayer
(
	function( $ ) {

		lezada.videoPopup = function() {

			$( '.button-video a' ).magnificPopup( {
				type           : 'iframe',
				mainClass      : 'mfp-fade',
				removalDelay   : 160,
				preloader      : false,
				fixedContentPos: false
			} );

			$( '.video-lightbox-btn' ).magnificPopup( {
				type           : 'iframe',
				mainClass      : 'mfp-fade',
				removalDelay   : 160,
				preloader      : false,
				fixedContentPos: false
			} );

			$('.gif').gifplayer();

			$(".lezada-image-gallery").lightGallery({
				selector: 'a',
				thumbnail: true,
				animateThumb: false,
				showThumbByDefault: false
			});

		};
	}
)( jQuery );
