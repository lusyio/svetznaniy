// Visual Composer shortcode
(
	function( $ ) {

		var $window   = $( window ),
			$document = $( document ),
			body      = document.body;

		lezada.imageCarousel = function() {

			$( '.lezada-image-carousel' ).each( function() {

				var $this = $( this ),
					atts  = JSON.parse( $this.attr( 'data-atts' ) );

				if ( atts == null ) {
					return;
				}

				if ( typeof atts.auto_play_speed === 'undefined' || isNaN( atts.auto_play_speed ) ) {
					atts.auto_play_speed = 5;
				}

				var configs = {
					accessibility : false,
					slidesToShow  : parseInt( atts.number_of_images_to_show ),
					slidesToScroll: parseInt( atts.number_of_images_to_show ),
					infinite      : (
						atts.loop == 'yes'
					),
					autoplay      : (
						atts.auto_play == 'yes'
					),
					autoplaySpeed : parseInt( atts.auto_play_speed ) * 1000,
					adaptiveHeight: true,
					speed         : 1000,
					responsive    : [{
						breakpoint: 992,
						settings  : {
							slidesToShow  : 2,
							slidesToScroll: 2,
						},
					}, {
						breakpoint: 544,
						settings  : {
							arrows        : true,
							dots          : false,
							adaptiveHeight: true,
							slidesToShow  : 1,
							slidesToScroll: 1,
						},
					},],
				};

				if ( ! atts.nav_type ) {
					configs.arrows = false;
					configs.dots = false;
				} else {
					if ( atts.nav_type == 'dots' ) {
						configs.arrows = false;
						configs.dots = true;
					}
					if ( atts.nav_type == 'both' ) {
						configs.arrows = true;
						configs.dots = true;
					}
				}

				if ( parseInt( atts.number_of_images_to_show ) == 1 ) {
					configs['responsive'] = [{
						breakpoint: 992,
						settings  : {
							adaptiveHeight: true,
							slidesToShow  : 1,
							slidesToScroll: 1,
						},
					}, {
						breakpoint: 544,
						settings  : {
							arrows        : true,
							dots          : false,
							adaptiveHeight: true,
							slidesToShow  : 1,
							slidesToScroll: 1,
						},
					},];
				}

				$this.slick( configs );
				$this.slick( 'setPosition' );

				if ( ! $this.hasClass( 'custom_link' ) ) {

					$( '.tm-carousel-item:not(.slick-cloned)' ).magnificPopup( {
						type        : 'image',
						delegate    : 'a',
						removalDelay: 300,
						mainClass   : 'mfp-fade',
						gallery     : {
							enabled: true,
						},
					} );
				}
			} );
		};

		lezada.testimonialCarousel = function() {

			$( '.lezada-testimonial-carousel' ).each( function() {

				var $this = $( this ),
					atts  = JSON.parse( $this.attr( 'data-atts' ) );

				if ( atts == null ) {
					return;
				}

				if ( typeof atts.auto_play_speed === 'undefined' || isNaN( atts.auto_play_speed ) ) {
					atts.auto_play_speed = 5;
				}

				var configs = {
					accessibility : false,
					infinite      : (
						atts.loop == 'yes'
					),
					autoplay      : (
						atts.auto_play == 'yes'
					),
					autoplaySpeed : parseInt( atts.auto_play_speed ) * 1000,
					slidesToShow  : parseInt( atts.items_to_show ),
					slidesToScroll: 1,
					speed         : 1000,
					responsive    : [{
						breakpoint: 768,
						settings  : {
							slidesToShow: 1,
						},
					},],
				};

				if ( ! atts.nav_type ) {
					configs.arrows = false;
					configs.dots = false;
				} else {
					if ( atts.nav_type == 'dots' ) {
						configs.arrows = false;
						configs.dots = true;
					}
					if ( atts.nav_type == 'both' ) {
						configs.arrows = true;
						configs.dots = true;
					}
				}

				$this.slick( configs );
			} );
		};

		lezada.instagramCarousel = function() {

			var carousels = [].slice.call( document.querySelectorAll( '.lezada-instagram--carousel' ) );

			carousels.forEach( function( carousel ) {

				var atts = JSON.parse( carousel.getAttribute( 'data-atts' ) );

				if ( atts == null ) {
					return;
				}

				if ( typeof atts.auto_play_speed === 'undefined' || isNaN( atts.auto_play_speed ) ) {
					atts.auto_play_speed = 5;
				}

				var configs = {
					accessibility : false,
					infinite      : (
						atts.loop == 'yes'
					),
					autoplay      : (
						atts.auto_play == 'yes'
					),
					autoplaySpeed : parseInt( atts.auto_play_speed ) * 1000,
					slidesToShow  : parseInt( atts.number_of_items_to_show ),
					slidesToScroll: parseInt( atts.number_of_items_to_show ),
					speed         : 1000,
					responsive    : [{
						breakpoint: 768,
						settings  : {
							slidesToShow  : 2,
							slidesToScroll: 2
						},
					}, {
						breakpoint: 425,
						settings  : {
							slidesToShow  : 1,
							slidesToScroll: 1
						},
					},],
				}

				if ( ! atts.nav_type ) {
					configs.arrows = false;
					configs.dots = false;
				} else {
					if ( atts.nav_type == 'dots' ) {
						configs.arrows = false;
						configs.dots = true;
					}
					if ( atts.nav_type == 'both' ) {
						configs.arrows = true;
						configs.dots = true;
					}
				}

				$( carousel.querySelectorAll( '.tm-instagram-pics' ) ).slick( configs );

			} );
		};

		lezada.countdown = function() {

			var equalWidthForCountdown = function() {

				if ( ! md.mobile() && ! md.phone() && ! md.tablet() ) {
					$( '.tm-countdown, .product-countdown' ).each( function() {

						var max_width = 0;

						$( this ).find( '.countdown-section' ).each( function() {

							var width = $( this ).outerWidth();

							if ( width > max_width ) {
								max_width = width;
							}
						} );

						$( this ).find( '.countdown-section' ).css( 'width', max_width );
					} );
				}
			};

			$( '.lezada-countdown' ).each( function() {
				var $this         = $( this ),
					format        = $this.attr( 'data-countdown-format' ),
					text_singular = $this.attr( 'data-label-singular' ).split( ',' ),
					text_plural   = $this.attr( 'data-label-plural' ).split( ',' ),
					date          = new Date( $this.text().trim() ),
					server_date   = new Date( $this.attr( 'data-server-date' ) );

				if ( $this.is( '.user-timezone' ) ) {
					$this.countdown( {
						labels : text_plural,
						labels1: text_singular,
						format : format,
						until  : date,
						onTick : function() {
							equalWidthForCountdown();
						},
					} );
				} else {
					$this.countdown( {
						labels    : text_plural,
						labels1   : text_singular,
						format    : format,
						until     : date,
						serverSync: server_date,
						onTick    : function() {
							equalWidthForCountdown();
						},
					} );
				}

			} );
		};

		lezada.productCategoriesShortcode = function() {

			// Carousel
			$( '.lezada-product-categories.categories-layout-carousel' ).each( function() {

				var $this  = $( this ),
					atts   = JSON.parse( $this.attr( 'data-atts' ) ),
					number = parseInt( atts.number_of_items_to_show );

				if ( typeof atts.auto_play_speed === 'undefined' || isNaN( atts.auto_play_speed ) ) {
					atts.auto_play_speed = 5000;
				}

				var configs = {
					accessibility : false,
					slidesToShow  : number,
					infinite      : atts.loop == 'yes',
					autoplay      : atts.auto_play == 'yes',
					autoplaySpeed : parseInt( atts.auto_play_speed * 1000 ),
					centerMode    : atts.center_mode == 'yes',
					centerPadding : atts.center_padding,
					adaptiveHeight: true,
					speed         : 1000,
					responsive    : [{
						breakpoint: 1199,
						settings  : {
							centerPadding: '100px',
						},
					}, {
						breakpoint: 992,
						settings  : {
							slidesToShow  : number - 1,
							slidesToScroll: number,
							centerPadding : '80px',
						},
					}, {
						breakpoint: 768,
						settings  : {
							slidesToShow  : (
								number > 2
							) ? number - 2 : 2,
							slidesToScroll: 1,
							centerPadding : '50px',
						},
					}, {
						breakpoint: 479,
						settings  : {
							adaptiveHeight: true,
							arrows        : true,
							dots          : false,
							slidesToShow  : 1,
							centerPadding : '0px',
						},
					},],
				};

				if ( ! atts.nav_type ) {
					configs.arrows = false;
					configs.dots = false;
				} else {
					if ( atts.nav_type == 'dots' ) {
						configs.arrows = false;
						configs.dots = true;
					}
					if ( atts.nav_type == 'both' ) {
						configs.arrows = true;
						configs.dots = true;
					}
				}

				$this.slick( configs );
				$this.slick( 'setPosition' );

			} );

			// Masonry
			if ( typeof(
					$.fn.isotope
				) == 'undefined' || typeof (
					$.fn.imagesLoaded
				) == 'undefined' ) {
				return;
			}

			// Categories masonry
			var $catsContainer = $( '.lezada-product-categories.categories-layout-masonry' );

			$catsContainer.isotope( {
				masonry     : {
					columnWidth: '.col-xl-3.category-grid-item',
				},
				itemSelector: '.category-grid-item',
			} ).imagesLoaded().progress( function() {
				$catsContainer.isotope( 'layout' );
			} )
		};

		// Product Visual Composer Shortcode (Products Grid & Products Carousel)
		lezada.productsShortCode = function() {

			var productGrid = function() {

				if ( typeof(
						$.fn.isotope
					) == 'undefined' || typeof(
						$.fn.imagesLoaded
					) == 'undefined' ) {
					return;
				}

				$( '.lezada-product-grid' ).each( function() {

					var $this     = $( this ),
						$products = $this.find( '.products' ),
						atts      = JSON.parse( $this.attr( 'data-atts' ) );

					if ( atts == null ) {
						return;
					}

					$products.isotope( {
						layoutMode  : 'fitRows',
						itemSelector: '.product'
					} );

					$products.imagesLoaded().progress( function() {
						$products.isotope( 'layout' );
					} );
				} );
			};

			var productTabs = function() {

				if ( typeof(
						$.fn.isotope
					) == 'undefined' || typeof(
						$.fn.imagesLoaded
					) == 'undefined' ) {
					return;
				}

				$( '.lezada-product-tabs' ).each( function() {

					var $this     = $( this ),
						$products = $this.find( '.products' ),
						atts      = JSON.parse( $this.attr( 'data-atts' ) );

					if ( atts == null ) {
						return;
					}

					$products.isotope( {
						layoutMode        : 'fitRows',
						itemSelector      : '.product',
						hiddenStyle       : {
							opacity: 0
						},
						visibleStyle      : {
							opacity: 1
						},
						transitionDuration: '0.5s'
					} );

					$products.imagesLoaded().progress( function() {
						$products.isotope( 'layout' );
					} );
				} );

				$( '.lezada-product-tabs' ).on( 'click', '.product-filter a', function( e ) {

					e.preventDefault();

					var t = $( this ),
						r = t.data( 'category' ),
						f = t.data( 'filter' ),
						u = t.parents( '.lezada-product-tabs' );
					u.find( '.lezada-loadmore-wrap' ).attr( 'data-filter', f );
					if ( r ) {
						u.find( '.lezada-loadmore-wrap' ).attr( 'data-filter', r );
					}
					u.find( '.lezada-loadmore-wrap' ).removeClass( 'hidden' );

					var $link           = $( this ),
						$grid           = $link.closest( '.lezada-product-tabs' ),
						$products       = $grid.find( '.products' ),
						filterValue     = $link.attr( 'data-filter' ),
						prependProducts = function( $newProducts ) {

							var iso = $products.data( 'isotope' );

							$products.prepend( $newProducts );

							$products.imagesLoaded( function() {

								var $items = $products.find( '.adding-item' ),
									gridFx = new GridLoaderFx( $products[0], '.adding-item' );

								if ( iso != null ) {
									$products.isotope( 'prepended', $items );
								}

								gridFx._render( 'Amun' );
								$items.removeClass( 'adding-item' );
							} );
						};

					if ( $link.hasClass( 'active' ) ) {
						return false;
					}

					var $ul            = $link.closest( '.product-filter' ),
						oldFilterValue = $ul.find( '.active' ).attr( 'data-filter' );

					$ul.find( '.active' ).removeClass( 'active' );
					$link.addClass( 'active' );

					if ( $grid.hasClass( 'filter-type-filter' ) ) {

						$link.closest( '.lezada-product-tabs' )
							 .find( '.products' )
							 .isotope( { filter: filterValue } );
					} else {

						filterValue = filterValue.replace( /\./g, '' );
						filterValue = filterValue.replace( /product_cat-/g, '' );

						oldFilterValue = oldFilterValue.replace( /\./g, '' );
						oldFilterValue = oldFilterValue.replace( /product_cat-/g, '' );

						var oldItem = $grid.attr( 'id' ) + '_' + oldFilterValue,
							cache   = sessionStorage.getItem( $grid.attr( 'id' ) + '_' + filterValue );

						// cache old content
						if ( ! sessionStorage.getItem( oldItem ) ) {
							$products.children( '.product' ).addClass( 'adding-item' );
							sessionStorage.setItem( oldItem, $products.html() );
						}

						// page ajax loading
						var data_btn = u.find( '.lezada-loadmore-wrap' ).attr( 'data-atts' );
						if ( data_btn ) {
							var atts_btn = JSON.parse( data_btn );
							var next_page = $link.attr( 'data-page' );
							atts_btn.paged = next_page;
							atts_btn = JSON.stringify( atts_btn );
							u.find( '.lezada-loadmore-wrap' ).attr( 'data-atts', atts_btn );
						} else {
							next_page = 1;
						}

						var atts = JSON.parse( $grid.attr( 'data-atts' ) );

						if ( atts == null ) {
							return;
						}

						var data = {
							action        : 'lezada_ajax_load_more',
							post_type     : 'product',
							posts_per_page: atts.number * next_page,
							columns       : atts.columns,
							data_source   : atts.data_source
						};

						if ( atts.filter == 'category' ) {
							data.category = filterValue;
							data.include_children = atts.include_children == 'yes';
						}

						if ( atts.filter == 'group' ) {
							data.data_source = filterValue;
						}

						$.ajax( {
							method    : 'POST',
							url       : lezadaConfigs.ajax_url,
							data      : data,
							cache     : true,
							beforeSend: function() {
								$products.addClass( 'loading' );
							},
							success   : function( response ) {

								if ( response ) {

									$products.children( '.product' ).remove();

									// add to grid
									prependProducts( $( response ) );
								}

								$products.removeClass( 'loading' );
							},
							error     : function( error ) {
								console.log( error );
							}
						} );
					}
				} );
			};

			var productCarousel = function() {

				$( '.lezada-product-carousel' ).each( function() {

					var $this = $( this ),
						atts  = JSON.parse( $this.attr( 'data-atts' ) );

					if ( atts == null ) {
						return;
					}

					if ( typeof atts.auto_play_speed === 'undefined' || isNaN( atts.auto_play_speed ) ) {
						atts.auto_play_speed = 5;
					}

					var configs = {
						accessibility : false,
						slidesToShow  : parseInt( atts.columns ),
						slidesToScroll: parseInt( atts.columns ),
						speed         : 1000,
						infinite      : (
							atts.loop === 'yes'
						),
						autoplay      : (
							atts.auto_play === 'yes'
						),
						autoplaySpeed : parseInt( atts.auto_play_speed ) * 1000,
						responsive    : [{
							breakpoint: 992,
							settings  : {
								slidesToShow  : 3,
								slidesToScroll: 3,
							},
						}, {
							breakpoint: 768,
							settings  : {
								slidesToShow  : 2,
								slidesToScroll: 2,
							},
						}, {
							breakpoint: 425,
							settings  : {
								adaptiveHeight: true,
								arrows        : true,
								dots          : false,
								centerMode    : true,
								centerPadding : '50px',
								slidesToShow  : 1,
								slidesToScroll: 1,
							},
						}, {
							breakpoint: 375,
							settings  : {
								adaptiveHeight: true,
								arrows        : true,
								dots          : false,
								centerMode    : true,
								centerPadding : '30px',
								slidesToShow  : 1,
								slidesToScroll: 1,
							},
						},],
					};

					if ( ! atts.nav_type ) {
						configs.arrows = false;
						configs.dots = false;
					} else {
						if ( atts.nav_type == 'dots' ) {
							configs.arrows = false;
							configs.dots = true;
						}
						if ( atts.nav_type == 'both' ) {
							configs.arrows = true;
							configs.dots = true;
						}
					}

					$this.find( '.products' ).slick( configs );

				} );
			};

			var productWidget = function() {

				$( '.lezada-product-widget' )
					.find( '.hint--left' )
					.removeClass( 'hint--left' )
					.addClass( 'hint--top' );

				$( '.lezada-product-widget' )
					.find( '.hint--top-left' )
					.removeClass( 'hint--top-left' )
					.addClass( 'hint--top' );

				$( '.lezada-product-widget' ).each( function() {

					var $this = $( this ),
						atts  = JSON.parse( $this.attr( 'data-atts' ) );

					if ( atts == null ) {
						return;
					}

					var enable_carousel = atts.enable_carousel === 'yes';

					if ( enable_carousel ) {

						var $products = $this.find( '.product_list_widget' );

						if ( typeof atts.auto_play_speed === 'undefined' || isNaN( atts.auto_play_speed ) ) {
							atts.auto_play_speed = 5;
						}

						var configs = {
							accessibility : false,
							slidesToShow  : 1,
							slidesToScroll: 1,
							speed         : 1000,
							autoplay      : atts.auto_play === 'yes',
							autoplaySpeed : parseInt( atts.auto_play_speed ) * 1000,
						};
						if ( ! atts.nav_type ) {
							configs.arrows = false;
							configs.dots = false;
						} else {
							if ( atts.nav_type == 'dots' ) {
								configs.arrows = false;
								configs.dots = true;
							}
							if ( atts.nav_type == 'both' ) {
								configs.arrows = atts.arrows_position == 'left-right';
								configs.dots = true;
							}
							if ( atts.nav_type == 'arrows' ) {
								configs.arrows = atts.arrows_position == 'left-right';
							}
						}

						$products.slick( configs );

						// custom navigation
						$this.find( '.slick-prev.small' ).on( 'click', function() {
							$products.slick( 'slickPrev' );
						} );

						$this.find( '.slick-next.small' ).on( 'click', function() {
							$products.slick( 'slickNext' );
						} );
					}
				} );
			};

			productGrid();
			productTabs();
			productCarousel();
			productWidget();
		};

		lezada.vcTabs = function() {

			$( '.vc_tta-panel' ).each( function() {

				var $this     = $( this ),
					$carousel = $this.find( '.slick-slider' );

				$document.on( 'beforeShow.vc.accordion', function() {
					$this.find( '.product' ).addClass( 'animated' );
				} );

				$document.on( 'afterShow.vc.accordion', function() {
					$window.trigger( 'resize' );

					setTimeout( function() {
						$this.find( '.product' ).removeClass( 'zoomOut' ).addClass( 'zoomIn' );
					}, 500 );
				} );

				if ( $carousel.length && $carousel.find( '.slick-arrow' ).length ) {

					$document.on( 'beforeShow.vc.accordion', function() {
						$carousel.find( '.slick-track' ).addClass( 'filtering' ).css( 'opacity', 0 );
					} );

					$document.on( 'afterShow.vc.accordion', function() {

						var $panelBody = $carousel.closest( '.vc_tta-panel-body' );

						$panelBody.css( 'overflow', 'initial' );
						$carousel.slick( 'setPosition' );

						$carousel.find( '.slick-track' ).removeClass( 'filtering' ).css( 'opacity', 1 );
					} );
				}
			} );
		};

		lezada.vcRow = function() {

			var init = function() {

				var rows        = [].slice.call( document.querySelectorAll( '.vc_row.vc_row-lezada-wide' ) ),
					siteContent = document.getElementsByClassName( 'site-content' );

				rows.forEach( function( row ) {

					if ( window.innerWidth < 992 ) {
						row.style = '';
						return;
					}

					if ( body.classList.contains( 'site-header-vertical' ) && window.innerWidth >= 1200 ) {
						var margin = $( body ).css( 'margin-left' );
						margin = parseInt( margin.replace( 'px', '' ) );
					}

					var w = body.classList.contains( 'site-header-vertical' ) ? window.innerWidth - margin : window.innerWidth,
						l = siteContent[0].getBoundingClientRect().left;

					w = w * .95;
					l = - 1 * (
						l - w * 0.05 / 2
					);

					if ( row.classList.contains( 'vc_row-no-padding' ) ) {
						w -= 30;
						l += 15;
					}

					if ( body.classList.contains( 'site-header-vertical' ) && window.innerWidth >= 1200 ) {
						l += margin;
					}

					row.style.position = 'relative';
					row.style.width = w + 'px';
					row.style.left = l + 'px';

					setTimeout( function() {
						row.classList.add( 'row-calculated' );
					}, 300 );

					setTimeout( function() {
						var $products = $( row ).find( '.products' );

						if ( $products.data( 'isotope' ) ) {
							$products.isotope( 'layout' );
						}
					}, 1000 );
				} );
			};

			var stretchRow = function( mode ) {

				if ( ! body.classList.contains( 'site-header-vertical' ) && window.innerWidth < 1200 ) {
					return;
				}

				var rows = [].slice.call( document.querySelectorAll( '.vc_row[data-vc-stretch-content="true"]' ) );

				rows.forEach( function( row ) {

					if ( row.getAttribute( 'style' ) != null && ! row.classList.contains( 'row-calculated' ) ) {

						var margin = $( body ).css( 'margin-left' );
						margin = parseInt( margin.replace( 'px', '' ) );

						var w = window.innerWidth - margin,
							l = parseInt( row.style.left.replace( 'px', '' ) );

						row.style.width = w + 'px';
						row.style.left = (
										 l + margin
										 ) + 'px';
						row.classList.add( 'row-calculated' );
					}
					if ( mode != 'resize' ) {
						setTimeout( function() {
							var $products = $( row ).find( '.products' );

							if ( $products.data( 'isotope' ) ) {
								$products.isotope( 'layout' );
							}
						}, 1000 );
					}
				} );

				if ( mode != 'resize' ) {
					$window.trigger( 'resize' );
				}

			};

			init();

			$window.on( 'load', function() {
				stretchRow( 'load' );
			} );

			$window.on( 'resize', function() {
				init();

				var rows = [].slice.call( document.querySelectorAll( '.vc_row.row-calculated[data-vc-stretch-content="true"]' ) );
				rows.forEach( function( row ) {
					row.classList.remove( 'row-calculated' );
				} );

				setTimeout( function() {
					stretchRow( 'resize' );
				} );
			} );
		};

		lezada.vcColumn = function() {

			var $stickyCol = $( '.vc_col-lezada-sticky .vc_column-inner' );

			if ( md.mobile() || md.phone() || md.tablet() || ! $stickyCol.length || $window.width() < 1200 ) {
				return;
			}

			$stickyCol.stick_in_parent();
		}

		lezada.bannerGrid5 = function() {

			var banners = [].slice.call( document.querySelectorAll( '.lezada-banner-grid-5' ) );

			banners.forEach( function( _banner ) {

				var _items = [].slice.call( _banner.querySelectorAll( '.tm-shortcode' ) );

				if ( _items ) {

					for ( var i = 0; i < _items.length; i += 5 ) {

						var chuck  = _items.splice( i, i + 5 ),
							$chuck = $( chuck );

						$chuck.filter( ':lt(3)' ).wrapAll( '<div class="banners banners-column-1"/>' );
						$chuck.filter( ':gt(2)' ).wrapAll( '<div class="banners banners-column-2"/>' );
					}

					_banner.classList.add( 'banner-loaded' );
				}
			} );
		};

		lezada.bannerGrid6 = function() {

			var banners = [].slice.call( document.querySelectorAll( '.lezada-banner-grid-6' ) );

			banners.forEach( function( _banner ) {

				var _items = [].slice.call( _banner.querySelectorAll( '.tm-shortcode' ) );

				if ( _items ) {

					for ( var i = 0; i < _items.length; i += 6 ) {

						var chuck  = _items.splice( i, i + 6 ),
							$chuck = $( chuck );

						$chuck.filter( ':lt(3)' ).wrapAll( '<div class="banners banners-column-1"/>' );
						$chuck.filter( ':eq(3)' ).wrapAll( '<div class="banners banners-column-2"/>' );
						$chuck.filter( ':gt(3)' ).wrapAll( '<div class="banners banners-column-3"/>' );
					}

					_banner.classList.add( 'banner-loaded' );
				}
			} );
		};

		lezada.bannerGrid6v2 = function() {

			var banners = [].slice.call( document.querySelectorAll( '.lezada-banner-grid-6v2' ) );

			banners.forEach( function( _banner ) {

				var _items = [].slice.call( _banner.querySelectorAll( '.tm-shortcode' ) );

				if ( _items ) {

					for ( var i = 0; i < _items.length; i += 6 ) {

						var chuck  = _items.splice( i, i + 6 ),
							$chuck = $( chuck );

						$chuck.wrapAll( '<div class="banners-wrap"/>' );
						$chuck.filter( ':lt(2)' ).wrapAll( '<div class="banners banners-column-1"/>' );
						$chuck.filter( ':gt(1)' ).wrapAll( '<div class="banners banners-column-2"/>' );
					}

					_banner.classList.add( 'banner-loaded' );
				}
			} );
		};

		lezada.bannerCarousel = function() {
			$( '.lezada-banner-carousel' ).find( '.banner-items' ).slick( {
				dots         : true,
				speed        : 1000,
				slidesToShow : 1,
				centerMode   : true,
				variableWidth: true,
				dots         : false,
				responsive   : [{
					breakpoint: 768,
					settings  : {
						slidesToShow  : 1,
						slidesToScroll: 1,
						centerMode    : false,
						variableWidth : false,
					},
				}],
			} );
		}

	}
)( jQuery );