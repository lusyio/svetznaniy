'use strict'

var lezadaAdmin;

(function( $ ) {

	lezadaAdmin = (
		function() {

			var // logo
				$customLogo                 = $( '#lezada_custom_logo' ),
				customLogo                  = $customLogo.val(),
				$logo                       = $( '.cmb-row.cmb2-id-lezada-logo' ),
				$logoAlt                    = $( '.cmb-row.cmb2-id-lezada-logo-alt' ),
				$logoMobile                 = $( '.cmb-row.cmb2-id-lezada-logo-mobile' ),
				$logoMobileAlt              = $( '.cmb-row.cmb2-id-lezada-logo-mobile-alt' ),

				// Off-Canvas Sidebar
				$offCanvasButtonOn          = $( '#lezada_offcanvas_button_on' ),
				$offCanvasAction            = $( '#lezada_offcanvas_action' ),
				$offCanvasPosition          = $( '.cmb-row.cmb2-id-lezada-offcanvas-position' ),
				$offCanvasCustom            = $( '.cmb-row.cmb2-id-lezada-offcanvas-custom-sidebar' ),
				$offCanvasActionRow         = $( '.cmb-row.cmb2-id-lezada-offcanvas-action' ),
				$offCanvasCorlor            = $( '.cmb-row.cmb2-id-lezada-offcanvas-button-color' ),
				offCanvasActionVal          = $offCanvasAction.val(),
				offCanvasSideBarVal         = $offCanvasButtonOn.val(),

				// Page Title
				$pageTitleOn                = $( '#lezada_page_title_on' ),
				$pageTitleStyle             = $( '#lezada_page_title_style' ),
				$disableParallaxRow         = $( '.cmb-row.cmb2-id-lezada-disable-parallax' ),
				$removeWhiteSpaceRow        = $( '.cmb-row.cmb2-id-lezada-remove-whitespace' ),
				$pageTitleStyleRow          = $( '.cmb-row.cmb2-id-lezada-page-title-style' ),
				$pageTitleTextColorRow      = $( '.cmb-row.cmb2-id-lezada-page-title-text-color' ),
				$pageSubTitleColorRow       = $( '.cmb-row.cmb2-id-lezada-page-subtitle-color' ),
				$pageTitleBgColorRow        = $( '.cmb-row.cmb2-id-lezada-page-title-bg-color' ),
				$pageTitleOverlayColorRow   = $( '.cmb-row.cmb2-id-lezada-page-title-overlay-color' ),
				$pageTitleBgImageRow        = $( '.cmb-row.cmb2-id-lezada-page-title-bg-image' ),
				pageTitleOnVal              = $pageTitleOn.val(),
				pageTitleStyleVal           = $pageTitleStyle.val(),

				// Breadcrumbs
				$breadCrumbsOn              = $( '#lezada_breadcrumbs' ),
				$breadCrumbsPosition        = $( '.cmb-row.cmb2-id-lezada-breadcrumbs-position' ),
				breadCrumbsOnVal            = $breadCrumbsOn.val(),

				// Page Sidebar
				$pageSideBarPosition        = $( '#lezada_page_sidebar_config' ),
				$customPageSideBar          = $( '.cmb-row.cmb2-id-lezada-page-custom-sidebar' ),
				pageSideBarPositionVal      = $pageSideBarPosition.val(),

				// Post Sidebar
				$postSideBarPosition        = $( '#lezada_post_sidebar_config' ),
				$customPostSideBar          = $( '.cmb-row.cmb2-id-lezada-post-custom-sidebar' ),
				postSideBarPositionVal      = $postSideBarPosition.val(),

				// Product general
				$productShowFeaturedImage   = $( '#lezada_show_featured_images' ),
				productShowFeaturedImageVal = $productShowFeaturedImage.val(),
				$thumbnailPosition          = $( '.cmb-row.cmb2-id-lezada-product-thumbnails-position' ),
				$productPageLayout          = $( '#lezada_product_page_layout' ),
				productPageLayout           = $productPageLayout.val(),
				$productBackground          = $( '.cmb-row.cmb2-id-lezada-product-bgcolor' ),

				// Product Sidebar
				$productSideBarPosition     = $( '#lezada_product_sidebar_config' ),
				$customProductSideBar       = $( '.cmb-row.cmb2-id-lezada-product-custom-sidebar' ),
				productSideBarPositionVal   = $productSideBarPosition.val();

			return {

				equalHeight: function() {

					var $tabs     = $( '.insight-cmb2-tabs' ),
						$tabsNav  = $tabs.find( '.ui-tabs-nav' ),
						navHeight = $tabsNav.outerHeight();

					setTimeout( function() {
						$tabs.find( '.ui-tabs-panel' ).each( function() {

							if ( $( this ).css( 'display' ) == 'block' ) {

								if ( $( this ).outerHeight() < navHeight ) {
									$( this ).css( 'height', navHeight );
								} else {
									$( this ).css( 'height', 'auto' );
								}
							}

						} );
					}, 500 );

					$tabsNav.find( '.ui-tabs-anchor' ).on( 'click', function() {

						var id          = $( this ).attr( 'href' ),
							$panel      = $tabs.find( '.ui-tabs-panel' + id ),
							panelHeight = $panel.outerHeight();

						if ( panelHeight < navHeight ) {
							$panel.css( 'height', navHeight );
						} else {
							$panel.css( 'height', 'auuto' );
						}

					} );
				},

				init: function() {

					this.equalHeight();

					this.toggleLogoSettings( customLogo == 'on' );

					this.toggleOffCanvasSettings( offCanvasSideBarVal == 'off' );

					this.toggleOffCanvasAction( offCanvasActionVal );

					this.togglePageTitleStyle( pageTitleStyleVal );

					this.togglePageTitleSettings( pageTitleOnVal == 'off' );

					this.toggleBreadCrumbsSettings( breadCrumbsOnVal == 'off' );

					this.togglePageSidebarPosition( pageSideBarPositionVal );

					this.togglePostSidebarPosition( postSideBarPositionVal );

					this.toggleProductSidebarPosition( productSideBarPositionVal );

					this.toggleProductPageLayout( productPageLayout );

					this.toggleFeaturedImages( productShowFeaturedImageVal == 'off' || productShowFeaturedImageVal == 'default' );

					this.events();
				},

				events: function() {

					$customLogo.on( 'change', function() {
						lezadaAdmin.toggleLogoSettings( $( this ).val() == 'on' );
					} );

					$offCanvasButtonOn.on( 'change', function() {
						lezadaAdmin.toggleOffCanvasSettings( $( this ).val() == 'off' );
					} );

					$offCanvasAction.on( 'change', function() {
						lezadaAdmin.toggleOffCanvasAction( $( this ).val() );
					} );

					$pageTitleOn.on( 'change', function() {
						lezadaAdmin.togglePageTitleSettings( $( this ).val() == 'off' );
					} );

					$pageTitleStyle.on( 'change', function() {
						lezadaAdmin.togglePageTitleStyle( $( this ).val() );
					} );

					$breadCrumbsOn.on( 'change', function() {
						lezadaAdmin.toggleBreadCrumbsSettings( $( this ).val() == 'off' );
					} );

					$pageSideBarPosition.on( 'change', function() {
						lezadaAdmin.togglePageSidebarPosition( $( this ).val() );
					} );

					$postSideBarPosition.on( 'change', function() {
						lezadaAdmin.togglePostSidebarPosition( $( this ).val() );
					} );

					$productSideBarPosition.on( 'change', function() {
						lezadaAdmin.toggleProductSidebarPosition( $( this ).val() );
					} );

					$productPageLayout.on( 'change', function() {
						lezadaAdmin.toggleProductPageLayout( $( this ).val() );
					} );

					$productShowFeaturedImage.on( 'change', function() {
						lezadaAdmin.toggleFeaturedImages( $( this ).val() == 'off' || $( this ).val() == 'default' );
					} );
				},

				toggleLogoSettings: function( on ) {

					if ( on ) {
						$logo.slideDown();
						$logoAlt.slideDown();
						$logoMobile.slideDown();
						$logoMobileAlt.slideDown();
					} else {
						$logo.slideUp();
						$logoAlt.slideUp();
						$logoMobile.slideUp();
						$logoMobileAlt.slideUp();
					}

					lezadaAdmin.equalHeight();
				},

				toggleOffCanvasSettings: function( off ) {

					if ( off ) {
						$offCanvasPosition.slideUp();
						$offCanvasCorlor.slideUp();
						$offCanvasActionRow.slideUp();
						$offCanvasCustom.slideUp();
					} else {
						$offCanvasPosition.slideDown();
						$offCanvasCorlor.slideDown();
						$offCanvasActionRow.slideDown();

						if ( $offCanvasAction.val() == 'sidebar' ) {
							$offCanvasCustom.slideDown();
						} else {
							$offCanvasCustom.slideUp();
						}
					}
				},

				toggleOffCanvasAction: function( action ) {

					if ( action == 'sidebar' ) {
						$offCanvasCustom.slideDown();
					} else {
						$offCanvasCustom.slideUp();
					}
				},

				togglePageTitleSettings: function( off ) {

					var pageTitleStyle = $pageTitleStyle.val();

					if ( off ) {
						$removeWhiteSpaceRow.slideDown();
						$disableParallaxRow.slideUp();
						$pageTitleStyleRow.slideUp();
						$pageTitleTextColorRow.slideUp();
						$pageSubTitleColorRow.slideUp();
						$pageTitleBgColorRow.slideUp();
						$pageTitleOverlayColorRow.slideUp();
						$pageTitleBgImageRow.slideUp();
					} else {
						$removeWhiteSpaceRow.slideUp();
						$disableParallaxRow.slideUp();
						$pageTitleStyleRow.slideDown();
						lezadaAdmin.togglePageTitleStyle( pageTitleStyle );
					}

					lezadaAdmin.equalHeight();
				},

				togglePageTitleStyle: function( style ) {

					if ( style == 'bg_color' ) {
						$pageTitleTextColorRow.slideDown();
						$pageSubTitleColorRow.slideDown();
						$pageTitleBgColorRow.slideDown();
						$pageTitleOverlayColorRow.slideUp();
						$pageTitleBgImageRow.slideUp();
					} else if ( style == 'bg_image' ) {
						$pageTitleTextColorRow.slideDown();
						$pageSubTitleColorRow.slideDown();
						$pageTitleBgColorRow.slideUp();
						$pageTitleOverlayColorRow.slideDown();
						$pageTitleBgImageRow.slideDown();
					} else {
						$pageTitleTextColorRow.slideUp();
						$pageSubTitleColorRow.slideUp();
						$pageTitleBgColorRow.slideUp();
						$pageTitleOverlayColorRow.slideUp();
						$pageTitleBgImageRow.slideUp();
					}

					lezadaAdmin.equalHeight();
				},

				toggleBreadCrumbsSettings: function( off ) {

					if ( off ) {
						$breadCrumbsPosition.slideUp();
					} else {
						$breadCrumbsPosition.slideDown();
					}
				},

				togglePageSidebarPosition: function( position ) {

					if ( position === 'default' || position === 'no' ) {
						$customPageSideBar.slideUp();
					} else {
						$customPageSideBar.slideDown();
					}
				},

				togglePostSidebarPosition: function( position ) {

					if ( position === 'default' || position === 'no' ) {
						$customPostSideBar.slideUp();
					} else {
						$customPostSideBar.slideDown();
					}
				},

				toggleProductSidebarPosition: function( position ) {

					if ( position === 'default' || position === 'no' ) {
						$customProductSideBar.slideUp();
					} else {
						$customProductSideBar.slideDown();
					}
				},

				toggleProductPageLayout: function( val ) {

					if ( val == 'background' || val == 'background-fullwidth' ) {
						$productBackground.slideDown();
					} else {
						$productBackground.slideUp();
					}
				},

				toggleFeaturedImages: function( off ) {

					if ( off ) {
						$thumbnailPosition.slideDown();
					} else {
						$thumbnailPosition.slideUp();
					}
				}
			};
		}()
	);

})( jQuery );

jQuery( document ).ready( function() {
	lezadaAdmin.init();
} );

var lezadaProductAttributeFilterDependencyCallback = function() {
	(
		function( $, that ) {
			var $filterDropdown,
				$empty;

			$filterDropdown = $( '[data-vc-shortcode-param-name="filter"]', that.$content );
			$filterDropdown.removeClass( 'vc_dependent-hidden' );
			$empty = $( '#filter-empty', $filterDropdown );

			var $settings = JSON.parse( $filterDropdown.attr( 'data-param_settings' ) );

			if ( $empty.length ) {
				$empty.parent().remove();
				$( '.edit_form_line', $filterDropdown )
					.prepend( $( '<div class="vc_checkbox-label"><span>No values found</span></div>' ) );
			}

			$( 'select[name="attribute"]', that.$content ).change( function() {
				$( '.vc_checkbox-label', $filterDropdown ).remove();
				$filterDropdown.removeClass( 'vc_dependent-hidden' );

				$.ajax( {
					type    : 'POST',
					dataType: 'json',
					url     : window.ajaxurl,
					data    : {
						action   : 'vc_woocommerce_get_attribute_terms',
						attribute: this.value,
						_vcnonce : window.vcAdminNonce
					}
				} ).done( function( data ) {
					if ( 0 < data.length ) {
						$( '.edit_form_line', $filterDropdown ).prepend( $( data ) );
					} else {
						$( '.edit_form_line', $filterDropdown )
							.prepend( $( '<div class="vc_checkbox-label"><span>No values found</span></div>' ) );
					}
				} );
			} );

			if ( typeof $settings.dependency !== 'undefined' ) {

				var $select = $( 'select[name="' + $settings.dependency.element + '"]' );

				if ( $settings.dependency.value.indexOf( $select.val() ) < 0 ) {
					$filterDropdown.hide();
				} else {
					$filterDropdown.show();
				}

				$select.on( 'change', function() {

					if ( $settings.dependency.value.indexOf( $( this ).val() ) < 0 ) {
						$filterDropdown.hide();
					} else {
						$filterDropdown.show();
					}
				} );
			}

		}( window.jQuery, this )
	);
};
