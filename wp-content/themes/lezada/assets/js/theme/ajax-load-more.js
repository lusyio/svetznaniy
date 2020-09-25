// AJAX load more post / product
(
	function( $ ) {

		lezada.ajaxLoadMore = function() {

			var $switcherFiveColumns  = $( '.ti-layout-grid4-alt' ),
				$switcherFourColumns  = $( '.ti-layout-grid3-alt' ),
				$switcherThreeColumns = $( '.ti-layout-grid2-alt' ),
				$columnSwitcher       = lezadaConfigs.categories_columns,
				$activeCol            = $( '.col-switcher' ).find( '.active' ),
				body                  = $( 'body' ),
				$col                  = $activeCol.attr( 'data-col' );

			if ( $col == 5 ) {
				$columnSwitcher = 5;
			}

			if ( $col == 4 ) {
				$columnSwitcher = 4;
			}

			if ( $col == 3 ) {
				$columnSwitcher = 3;
			}

			$switcherFiveColumns.on( 'click', function( e ) {
				e.preventDefault();
				$columnSwitcher = 5;
			} );

			$switcherFourColumns.on( 'click', function( e ) {
				e.preventDefault();
				$columnSwitcher = 4;
			} );

			$switcherThreeColumns.on( 'click', function( e ) {
				e.preventDefault();
				$columnSwitcher = 3;
			} );

			var loading       = false,
				loadPosts     = function( $el ) {

					var $loadMoreWrap        = $el.parent(),
						atts                 = $.parseJSON( $loadMoreWrap.attr( 'data-atts' ) ),
						btn_columns          = parseInt( atts.columns ),
						posts_per_page       = parseInt( atts.posts_per_page ),
						view                 = atts.view,
						$wrapContainer       = $( atts.container ),
						pAttr                = $.parseJSON( $wrapContainer.attr( 'data-atts' ) ),
						filter               = $loadMoreWrap.attr( 'data-filter' ),
						column_loadmore_post = 1,
						data                 = {
							action        : 'lezada_ajax_load_more',
							post_type     : atts.post_type,
							posts_per_page: posts_per_page,
							view          : view,
							category      : filter,
							exclude       : [],
						};

					if ( atts.post_type == 'product' ) {
						data.columns = btn_columns;
					} else {
						data.columns = column_loadmore_post;
					}

					if ( body.hasClass( 'post-type-archive-product' ) ) {
						data.columns = $columnSwitcher ? $columnSwitcher : btn_columns;
					}

					var $wrapper = null;

					if ( atts.post_type == 'post' ) {

						if ( $loadMoreWrap.hasClass( 'lezada-pagination' ) ) {
							$wrapper = $wrapContainer;
						} else {
							$wrapper = $wrapContainer.find( '.posts' );
						}
					}

					if ( atts.post_type == 'product' ) {

						if ( $loadMoreWrap.hasClass( 'woocommerce-pagination' ) ) {
							$wrapper = $wrapContainer;
						} else {
							$wrapper = $wrapContainer.find( '.products' );
						}
					}

					if ( $wrapper == null || $loadMoreWrap.hasClass( 'hidden' ) ) {
						return;
					}

					if ( atts.post_type == 'post' ) {

						if ( pAttr != null ) {

							data.filter = pAttr.filter;
							data.columns = pAttr.columns;

							if ( pAttr.filter == 'category' ) {
								data.cat_slugs = pAttr.cat_slugs;
							}

							if ( pAttr.filter == 'tag' ) {
								data.tag_slugs = pAttr.tag_slugs;
							}

							if ( atts.orderby !== null ) {
								data.orderby = pAttr.orderby;
							}

							if ( atts.order !== null ) {
								data.order = pAttr.order;
							}
						}
					}

					if ( atts.post_type == 'product' ) {

						if ( pAttr == null ) { // on product category page
							if ( atts.data_source == null || atts.data_source === 'undefined' ) {
								data.data_source = $loadMoreWrap.attr( 'data-filter' );
							} else {
								data.data_source = atts.data_source;
								data.category = atts.category;
								data.include_children = true;
							}

							if ( atts.data_source == 'categories' ) {
								data.data_source = atts.data_source;
								data.category = atts.category;
								data.include_children = true;
							}

							if ( atts.data_source == 'filter' ) {
								data.data_source = atts.data_source;
								data.tax_array = atts.tax_array;
							}

							if ( atts.orderby !== null ) {
								data.orderby = atts.orderby;
							}

							if ( atts.order !== null ) {
								data.order = atts.order;
							}

						} else {

							data.data_source = pAttr.data_source;

							if ( pAttr.data_source == 'category' ) {
								data.category = $loadMoreWrap.attr( 'data-filter' );
								data.include_children = pAttr.include_children == 'yes';
							} else {
								var arr_filter = ['featured_products', 'sale_products', 'best_selling_products',
												  'top_rated_products', 'recent_products'];
								if ( typeof pAttr.data_source !== 'undefined' ) {
									data.data_source = $loadMoreWrap.attr( 'data-filter' );
								}
							}

							if ( pAttr.data_source == 'product_attribute' ) {
								data.attribute = pAttr.attribute;
								data.filter = pAttr.filter;
							}

							if ( pAttr.data_source == 'categories' ) {
								data.product_cat_slugs = pAttr.product_cat_slugs;
								data.include_children = pAttr.include_children == 'yes';
							}

							if ( pAttr.orderby !== null ) {
								data.orderby = pAttr.orderby;
							}

							if ( pAttr.order !== null ) {
								data.order = pAttr.order;
							}
						}
					}

					//exclude queried posts
					var className = '.product-loop';

					if ( atts.post_type === 'post' ) {
						className = '.post-item';
					}

					var $posts = $wrapper.find( className );

					$posts.each( function() {
						var productID = $(this).attr('class').match( /post-\d+/gi )[0];
						productID = productID.replace( 'post-', '' );

						data.exclude.push( productID );
					} );

					$.ajax( {
						method    : 'POST',
						url       : lezadaConfigs.ajax_url,
						data      : data,
						beforeSend: function() {
							loading = true;
							$loadMoreWrap.addClass( 'loading' );
						},
						success   : function( response ) {

							if ( response ) {

								var iso = Isotope.data( $wrapper[0] );

								$wrapper.append( $( response ) );

								imagesLoaded( $wrapper, function() {

									var $items = $wrapper.find( '.adding-item' );

									if ( atts.post_type == 'post' ) {
										lezada.fitVideo();
										lezada.thumbGallery();
									}

									if ( atts.post_type == 'product' ) {
										lezada.reInitSwatches();
									}

									if ( iso != null ) {
										$items.each( function()  {
											iso.appended( $(this)[0] );
										} );
									}

									$items.each( function() {
										$(this).removeClass( 'adding-item' );
									} );

									if ( $items.length < posts_per_page ) {
										$loadMoreWrap.addClass( 'hidden' );
									}

									var c = $( $loadMoreWrap ).parent();
									var a = c.find( '.product-filter li a.active' ).attr( 'data-page' );
									if ( a ) {
										atts.paged = a;
									} else {
										atts.paged ++;
									}

									c.find( '.product-filter li a.active' ).attr( 'data-page', a );
									$loadMoreWrap.attr( 'data-atts', JSON.stringify( atts ) );
								} );

							} else {
								$loadMoreWrap.addClass( 'hidden' );
							}

							$loadMoreWrap.removeClass( 'loading' );
							loading = false;
						},
						error     : function( error ) {
							console.log( error );
						}
					} );
				};

			$('.lezada-loadmore-btn').on('click', function(e) {
				e.preventDefault();

				loadPosts( $(this) );
			});

			$( window ).on( 'scroll', function() {

				if ( $( '.lezada-loadmore-wrap' ).length && $('.lezada-loadmore-btn').hasClass('load-on-scroll') ) {

					var $loadMoreWrap = $('.lezada-loadmore-btn').parent();

					if ( $loadMoreWrap.offset().top <= $( this ).scrollTop() + $( this ).height()
						 && ! loading ) {
						loadPosts( $('.lezada-loadmore-btn') );
					}
				}
			} );
		};

	}
)( jQuery );
