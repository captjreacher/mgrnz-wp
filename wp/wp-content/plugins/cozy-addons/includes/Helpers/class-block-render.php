<?php

namespace CozyAddons\Helpers;

class BlockRender {

	/**
	 * Holds the singleton instance of the class.
	 *
	 * @var self|null
	 */
	private static $instance = null;

	/**
	 * Returns the singleton instance of the class.
	 *
	 * Creates a new instance if one doesn't already exist.
	 * Ensures only one instance of this class is used throughout the plugin.
	 *
	 * @return self
	 */
	public static function get_instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Class constructor.
	 *
	 * Initializes admin functionality by loading necessary admin files.
	 *
	 * @access private
	 */
	private function __construct() {}

	/**
	 * Renders the portfolio gallery block output.
	 *
	 * @param array $attributes Block attributes.
	 * @param array $portfolio_gallery Portfolio gallery data.
	 *
	 * @return string Rendered HTML output.
	 */
	public static function portfolio_gallery_render( $attributes, $portfolio_gallery ) {
		$overlay_content = array(
			'position' => isset( $attributes['overlayContent']['position'] ) ? str_replace( ' ', '-', $attributes['overlayContent']['position'] ) : 'bottom-left',
		);

		$gallery = array(
			'icon' => array(
				'path'    => isset( $attributes['galleryOptions']['icon']['path'] ) ? $attributes['galleryOptions']['icon']['path'] : '',
				'viewBox' => array(
					'vx' => isset( $attributes['galleryOptions']['icon']['viewBox']['vx'] ) ? $attributes['galleryOptions']['icon']['viewBox']['vx'] : '',
					'vy' => isset( $attributes['galleryOptions']['icon']['viewBox']['vy'] ) ? $attributes['galleryOptions']['icon']['viewBox']['vy'] : '',
					'vw' => isset( $attributes['galleryOptions']['icon']['viewBox']['vw'] ) ? $attributes['galleryOptions']['icon']['viewBox']['vw'] : '',
					'vh' => isset( $attributes['galleryOptions']['icon']['viewBox']['vh'] ) ? $attributes['galleryOptions']['icon']['viewBox']['vh'] : '',
				),
			),
		);

		$allowed_tags = array(
			'h1',
			'h2',
			'h3',
			'h4',
			'h5',
			'h6',
			'p',
		);

		ob_start();

		foreach ( $portfolio_gallery as $key => $portfolio ) {
			$portfolio_id = $portfolio->ID;

			$img_url = get_the_post_thumbnail_url( $portfolio_id );

			$post_title = $portfolio->post_title;

			$post_url = get_permalink( $portfolio_id );

			$post_excerpt = $portfolio->post_excerpt;

			$post_content = $portfolio->post_content;

			$classes   = array();
			$classes[] = 'cozy-portfolio';
			$classes[] = 'cozy-block-' . $attributes['layout'];
			$classes[] = 'post-ID__' . $portfolio_id;
			$classes[] = 'layout-type-' . $attributes['layoutType'];
			$classes[] = 'carousel' === $attributes['layout'] ? 'swiper-slide' : '';
			$classes[] = 'gallery' !== $attributes['layoutType'] && isset( $attributes['popup']['enabled'] ) && filter_var( $attributes['popup']['enabled'], FILTER_VALIDATE_BOOLEAN ) ? 'has-modal' : '';

			$portfolio_taxonomy = get_the_terms( $portfolio_id, 'ca_portfolio_gallery_category' );
			$portfolio_tax_ids  = array();
			if ( is_array( $portfolio_taxonomy ) || ! is_wp_error( $portfolio_taxonomy ) ) {
				$portfolio_tax_ids = wp_list_pluck( $portfolio_taxonomy, 'term_id' );
			}

			?>
			<li class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>" data-post-id="<?php echo esc_attr( $portfolio_id ); ?>" data-post-taxonomies="<?php echo wp_json_encode( $portfolio_tax_ids ); ?>">
				<?php
				if ( ! empty( $img_url ) ) {
					$classes   = array();
					$classes[] = 'cozy-portfolio__featured-image';
					$classes[] = isset( $attributes['imageHoverEffect'] ) && filter_var( $attributes['imageHoverEffect'], FILTER_VALIDATE_BOOLEAN ) ? 'has-hover-effect' : '';
					?>
					<figure class="<?php echo esc_html( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
						<?php
						if ( 'gallery' !== $attributes['layoutType'] && ( ! isset( $attributes['popup']['enabled'] ) || ! $attributes['popup']['enabled'] ) && isset( $attributes['featuredImage']['link']['enabled'] ) && filter_var( $attributes['featuredImage']['link']['enabled'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_url ) ) {
							$new_tab   = isset( $attributes['featuredImage']['link']['newTab'] ) && filter_var( $attributes['featuredImage']['link']['newTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
							$no_follow = isset( $attributes['featuredImage']['link']['noFollow'] ) && filter_var( $attributes['featuredImage']['link']['noFollow'], FILTER_VALIDATE_BOOLEAN ) ? 'nofollow' : '';

							?>
							<a href="<?php echo esc_url( $post_url ); ?>" target="<?php echo esc_attr( $new_tab ); ?>" rel="<?php echo esc_attr( $no_follow ); ?>">
							<?php
						}
						?>
							<div class="image__overlay"></div>
							<img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $post_title ); ?>" />
							<?php
							if ( 'gallery' !== $attributes['layoutType'] && ( ! isset( $attributes['popup']['enabled'] ) || ! $attributes['popup']['enabled'] ) && isset( $attributes['featuredImage']['link']['enabled'] ) && filter_var( $attributes['featuredImage']['link']['enabled'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_url ) ) {
								?>
							</a>
								<?php
							}

							if ( 'overlay' === $attributes['layoutType'] || 'gallery' === $attributes['layoutType'] ) {
								$classes   = array();
								$classes[] = 'portfolio__content';
								$classes[] = 'overlay' === $attributes['layoutType'] ? 'position-' . $overlay_content['position'] : '';
								?>
							<div class="<?php echo esc_html( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
								<?php
								if ( 'gallery' !== $attributes['layoutType'] && isset( $attributes['enableOptions']['title'] ) && filter_var( $attributes['enableOptions']['title'], FILTER_VALIDATE_BOOLEAN ) ) {
									$title_tag     = isset( $attributes['postTitle']['tag'] ) && in_array( $attributes['postTitle']['tag'], $allowed_tags, true ) ? $attributes['postTitle']['tag'] : 'p';
									$title_content = '';
									if ( ( 'gallery' !== $attributes['layoutType'] || ! isset( $attributes['popup']['enabled'] ) || ! $attributes['popup']['enabled'] ) && isset( $attributes['postTitle']['link']['enabled'] ) && filter_var( $attributes['postTitle']['link']['enabled'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_url ) ) {
										$new_tab        = isset( $attributes['postTitle']['link']['newTab'] ) && filter_var( $attributes['postTitle']['link']['newTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
										$rel            = isset( $attributes['postTitle']['link']['noFollow'] ) && filter_var( $attributes['postTitle']['link']['noFollow'], FILTER_VALIDATE_BOOLEAN ) ? 'nofollow' : '';
										$title_content .= '<a href="' . esc_url( $post_url ) . '" target="' . esc_attr( $new_tab ) . '" rel="' . esc_attr( $rel ) . '">';
										$title_content .= esc_html( $post_title );
										$title_content .= '</a>';
									} else {
										$title_content .= esc_html( $post_title );
									}

									printf(
										'<%1$s class="cozy-portfolio__title">%2$s</%1$s>',
										esc_attr( $title_tag ),
										wp_kses(
											$title_content,
											array(
												'a' => array(
													'href' => array(),
													'target' => array(),
													'rel'  => array(),
												),
											)
										)
									);
								}

								if ( 'overlay' === $attributes['layoutType'] ) {
									if ( isset( $attributes['enableOptions']['excerpt'] ) && filter_var( $attributes['enableOptions']['excerpt'], FILTER_VALIDATE_BOOLEAN ) ) {
										?>
										<div class="cozy-portfolio__excerpt">
											<?php
											if ( isset( $attributes['enableOptions']['excerptType'] ) && 'default' === $attributes['enableOptions']['excerptType'] ) {
												echo esc_html( $post_excerpt );
											}
											if ( isset( $attributes['enableOptions']['excerptType'] ) && 'custom' === $attributes['enableOptions']['excerptType'] ) {
												$excerpt_count = isset( $attributes['enableOptions']['excerptCount'] ) ? $attributes['enableOptions']['excerptCount'] : '';
												echo esc_html( cozy_create_excerpt( $post_content, $excerpt_count ) );
											}
											?>
										</div>
										<?php
									}

									if ( filter_var( $attributes['enableOptions']['button'], FILTER_VALIDATE_BOOLEAN ) ) {
										$btn_label = isset( $attributes['overlayContent']['button']['label'] ) ? sanitize_text_field( $attributes['overlayContent']['button']['label'] ) : '';
										?>
										<span class='cozy-portfolio__read-more-btn'>
											<?php
											if ( 'gallery' !== $attributes['layoutType'] && ( ! isset( $attributes['popup']['enabled'] ) || ! filter_var( $attributes['popup']['enabled'] ) ) && isset( $attributes['overlayContent']['button']['link']['enabled'] ) && filter_var( $attributes['overlayContent']['button']['link']['enabled'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_url ) ) {
												$new_tab   = isset( $attributes['overlayContent']['button']['link']['newTab'] ) && filter_var( $attributes['overlayContent']['button']['link']['newTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
												$no_follow = isset( $attributes['overlayContent']['button']['link']['noFollow'] ) && filter_var( $attributes['overlayContent']['button']['link']['noFollow'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
												?>
												<a href="<?php echo esc_url( $post_url ); ?>" target="<?php echo esc_attr( $new_tab ); ?>" rel="<?php echo esc_attr( $no_follow ); ?>">
												<?php
											}

											echo esc_html( $btn_label );

											if ( 'gallery' !== $attributes['layoutType'] && ( ! isset( $attributes['popup']['enabled'] ) || ! filter_var( $attributes['popup']['enabled'] ) ) && isset( $attributes['overlayContent']['button']['link']['enabled'] ) && filter_var( $attributes['overlayContent']['button']['link']['enabled'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_url ) ) {
												?>
												</a>
												<?php
											}
											?>
										</span>
										<?php
									}
								}

								if ( 'gallery' === $attributes['layoutType'] && isset( $attributes['enableOptions']['icon'] ) && filter_var( $attributes['enableOptions']['icon'], FILTER_VALIDATE_BOOLEAN ) ) {
									?>
									<i class="gallery__icon">
										<svg
											viewBox="<?php echo esc_attr( $gallery['icon']['viewBox']['vx'] . ' ' . $gallery['icon']['viewBox']['vy'] . ' ' . $gallery['icon']['viewBox']['vw'] . ' ' . $gallery['icon']['viewBox']['vh'] ); ?>"
											fill="currentColor"
											xmlns="http://www.w3.org/2000/svg"
											aria-hidden="true">
											<path d="<?php echo esc_attr( $gallery['icon']['path'] ); ?>" />
										</svg>
									</i>
									<?php
								}
								?>
							</div>
								<?php
							}
							?>
					</figure>
					<?php
				}

				if ( 'default' === $attributes['layoutType'] ) {
					?>
					<div class="portfolio__content">
						<?php
						if ( isset( $attributes['enableOptions']['title'] ) && filter_var( $attributes['enableOptions']['title'], FILTER_VALIDATE_BOOLEAN ) && 'gallery' !== $attributes['layoutType'] ) {
							$title_tag     = isset( $attributes['postTitle']['tag'] ) && in_array( $attributes['postTitle']['tag'], $allowed_tags, true ) ? $attributes['postTitle']['tag'] : 'p';
							$title_content = '';
							if ( ( ! isset( $attributes['popup']['enabled'] ) || ! $attributes['popup']['enabled'] ) && isset( $attributes['postTitle']['link']['enabled'] ) && filter_var( $attributes['postTitle']['link']['enabled'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_url ) ) {
								$new_tab        = isset( $attributes['postTitle']['link']['newTab'] ) && filter_var( $attributes['postTitle']['link']['newTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
								$rel            = isset( $attributes['postTitle']['link']['noFollow'] ) && filter_var( $attributes['postTitle']['link']['noFollow'], FILTER_VALIDATE_BOOLEAN ) ? 'nofollow' : '';
								$title_content .= '<a href="' . esc_url( $post_url ) . '" target="' . esc_attr( $new_tab ) . '" rel="' . esc_attr( $rel ) . '">';
								$title_content .= esc_html( $post_title );
								$title_content .= '</a>';
							} else {
								$title_content .= esc_html( $post_title );
							}

							printf(
								'<%1$s class="cozy-portfolio__title">%2$s</%1$s>',
								esc_attr( $title_tag ),
								wp_kses(
									$title_content,
									array(
										'a' => array(
											'href'   => array(),
											'target' => array(),
											'rel'    => array(),
										),
									)
								)
							);
						}
						?>
					</div>
					<?php
				}

				/* Popup modal */
				if ( 'gallery' !== $attributes['layoutType'] && isset( $attributes['popup']['enabled'] ) && filter_var( $attributes['popup']['enabled'], FILTER_VALIDATE_BOOLEAN ) ) {
					$portfolio_categories = get_the_terms( $portfolio_id, 'ca_portfolio_gallery_category' );
					$modal_excerpt_count  = isset( $attributes['popup']['enableOptions']['excerptCount'] ) ? $attributes['popup']['enableOptions']['excerptCount'] : '';

					$portfolio_cpt_year   = get_post_meta( $portfolio_id, 'ca_portfolio_gallery_project_year', true );
					$portfolio_cpt_client = get_post_meta( $portfolio_id, 'ca_portfolio_gallery_client', true );
					$portfolio_cpt_skills = get_post_meta( $portfolio_id, 'ca_portfolio_gallery_skills', true );
					$portfolio_cpt_url    = get_post_meta( $portfolio_id, 'ca_portfolio_gallery_url', true );

					?>
					<div class="cozy-portfolio__modal display__none">
						<div class="modal__overlay"></div>
						<div class="modal__body">
							<svg class="close__icon" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M4.99999 4.058L8.29999 0.758003L9.24266 1.70067L5.94266 5.00067L9.24266 8.30067L8.29932 9.24334L4.99932 5.94334L1.69999 9.24334L0.757324 8.3L4.05732 5L0.757324 1.7L1.69999 0.75867L4.99999 4.058Z" fill="currentColor" />
							</svg>

							<div class="modal__content">
								<div class="modal__wrap-1">
									<?php
									if ( ! empty( $img_url ) ) {
										?>
										<figure class="modal__featured-image">
											<a href="<?php echo esc_url( $post_url ); ?>" target="_blank" rel="nofollow">
												<img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $post_title ); ?>" />
											</a>
										</figure>
										<?php
									}

									if ( isset( $attributes['popup']['enableOptions']['cat'] ) && filter_var( $attributes['popup']['enableOptions']['cat'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $portfolio_categories ) ) {
										?>
										<ul class="modal__portfolio-categories">
											<?php
											foreach ( $portfolio_categories as $category ) {
												?>
												<li class="modal__portfolio-category" data-slug="<?php echo esc_attr( $category->slug ); ?>" data-term-id="<?php echo esc_attr( $category->term_id ); ?>"><?php echo esc_html( $category->name ); ?></li>
												<?php
											}
											?>
										</ul>
										<?php
									}

									$title_tag     = isset( $attributes['postTitle']['tag'] ) && in_array( $attributes['postTitle']['tag'], $allowed_tags, true ) ? $attributes['postTitle']['tag'] : 'p';
									$title_content = '';
									if ( isset( $attributes['postTitle']['link']['enabled'] ) && filter_var( $attributes['postTitle']['link']['enabled'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_url ) ) {
										$new_tab        = isset( $attributes['postTitle']['link']['newTab'] ) && filter_var( $attributes['postTitle']['link']['newTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
										$rel            = isset( $attributes['postTitle']['link']['noFollow'] ) && filter_var( $attributes['postTitle']['link']['noFollow'], FILTER_VALIDATE_BOOLEAN ) ? 'nofollow' : '';
										$title_content .= '<a href="' . esc_url( $post_url ) . '" target="' . esc_attr( $new_tab ) . '" rel="' . esc_attr( $rel ) . '">';
										$title_content .= esc_html( $post_title );
										$title_content .= '</a>';
									} else {
										$title_content .= esc_html( $post_title );
									}

									printf(
										'<%1$s class="modal__post-title">%2$s</%1$s>',
										esc_attr( $title_tag ),
										wp_kses(
											$title_content,
											array(
												'a' => array(
													'href' => array(),
													'target' => array(),
													'rel'  => array(),
												),
											)
										)
									);

					if ( isset( $attributes['popup']['enableOptions']['excerpt'] ) && filter_var( $attributes['popup']['enableOptions']['excerpt'], FILTER_VALIDATE_BOOLEAN ) ) {
						?>
										<p class="modal__excerpt">
							<?php
							if ( isset( $attributes['popup']['enableOptions']['excerptType'] ) && filter_var( $attributes['popup']['enableOptions']['excerptType'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_excerpt ) ) {
								echo esc_html( $post_excerpt );
							} elseif ( ! empty( $post_content ) ) {
								echo esc_html( cozy_create_excerpt( $post_content, $modal_excerpt_count ) );
							}
							?>
										</p>
						<?php
					}
					?>
								</div>
								<div class="modal__wrap-2">
									<?php
									$title_tag     = isset( $attributes['postTitle']['tag'] ) && in_array( $attributes['postTitle']['tag'], $allowed_tags, true ) ? $attributes['postTitle']['tag'] : 'p';
									$title_content = '';
									if ( isset( $attributes['postTitle']['link']['enabled'] ) && filter_var( $attributes['postTitle']['link']['enabled'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_url ) ) {
										$new_tab        = isset( $attributes['postTitle']['link']['newTab'] ) && filter_var( $attributes['postTitle']['link']['newTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
										$rel            = isset( $attributes['postTitle']['link']['noFollow'] ) && filter_var( $attributes['postTitle']['link']['noFollow'], FILTER_VALIDATE_BOOLEAN ) ? 'nofollow' : '';
										$title_content .= '<a href="' . esc_url( $post_url ) . '" target="' . esc_attr( $new_tab ) . '" rel="' . esc_attr( $rel ) . '">';
										$title_content .= esc_html( $post_title );
										$title_content .= '</a>';
									} else {
										$title_content .= esc_html( $post_title );
									}

									printf(
										'<%1$s class="modal__post-title">%2$s</%1$s>',
										esc_attr( $title_tag ),
										wp_kses(
											$title_content,
											array(
												'a' => array(
													'href' => array(),
													'target' => array(),
													'rel'  => array(),
												),
											)
										)
									);

									if ( isset( $attributes['popup']['enableOptions']['cpt'] ) && filter_var( $attributes['popup']['enableOptions']['cpt'], FILTER_VALIDATE_BOOLEAN ) ) {
										?>
										<div class="modal__portfolio-cpt-wrap">
											<?php
											if ( isset( $attributes['popup']['enableOptions']['cptYear'] ) && filter_var( $attributes['popup']['enableOptions']['cptYear'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $portfolio_cpt_year ) ) {
												$cpt_label = isset( $attributes['enableOptions']['yearLabel'] ) ? $attributes['enableOptions']['yearLabel'] : 'Project Year';
												?>
												<p class="modal__portfolio-cpt portfolio-cpt__year">
												<p class="cpt__title"><?php echo esc_html( $cpt_label ); ?></p>
												<p class="cpt__subtitle"><?php echo esc_html( $portfolio_cpt_year ); ?></p>
												</p>
												<?php
											}

											if ( isset( $attributes['popup']['enableOptions']['cptClient'] ) && filter_var( $attributes['popup']['enableOptions']['cptClient'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $portfolio_cpt_client ) ) {
												$cpt_label = isset( $attributes['enableOptions']['clientLabel'] ) ? $attributes['enableOptions']['clientLabel'] : 'Client';
												?>
												<p class="modal__portfolio-cpt portfolio-cpt__client">
												<p class="cpt__title"><?php echo esc_html( $cpt_label ); ?></p>
												<p class="cpt__subtitle"><?php echo esc_html( $portfolio_cpt_client ); ?></p>
												</p>
												<?php
											}

											if ( isset( $attributes['popup']['enableOptions']['cptSkills'] ) && filter_var( $attributes['popup']['enableOptions']['cptSkills'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $portfolio_cpt_skills ) ) {
												$cpt_label = isset( $attributes['enableOptions']['skillsLabel'] ) ? $attributes['enableOptions']['skillsLabel'] : 'Skills/Tech';
												?>
												<p class="modal__portfolio-cpt portfolio-cpt__skills">
												<p class="cpt__title"><?php echo esc_html( $cpt_label ); ?></p>
												<p class="cpt__subtitle"><?php echo esc_html( $portfolio_cpt_skills ); ?></p>
												</p>
												<?php
											}

											if ( isset( $attributes['popup']['enableOptions']['cptURL'] ) && filter_var( $attributes['popup']['enableOptions']['cptURL'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $portfolio_cpt_url ) && '#' != $portfolio_cpt_url ) {
												$cpt_label = isset( $attributes['enableOptions']['urlLabel'] ) ? $attributes['enableOptions']['urlLabel'] : 'Website';
												$new_tab   = isset( $attributes['popup']['enableOptions']['urlNewTab'] ) && filter_var( $attributes['popup']['enableOptions']['urlNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
												$no_follow = isset( $attributes['popup']['enableOptions']['urlNoFollow'] ) && filter_var( $attributes['popup']['enableOptions']['urlNoFollow'], FILTER_VALIDATE_BOOLEAN ) ? 'nofollow' : '';
												?>
												<p class="modal__portfolio-cpt portfolio-cpt__url">
													<a href="<?php echo esc_url( $portfolio_cpt_url ); ?>" target="<?php echo esc_attr( $new_tab ); ?>" rel="<?php echo esc_attr( $no_follow ); ?>"><?php echo esc_html( $cpt_label ); ?></a>
												</p>
												<?php
											}
											?>
										</div>
										<?php
									}
									?>
								</div>
							</div>
						</div>
					<?php
				}
				?>
			</li>
			<?php
		}

		return ob_get_clean();
	}

	/**
	 * Renders the categorized post tabs block output.
	 *
	 * @param array  $attributes Block attributes.
	 * @param array  $post_data Post data.
	 * @param string $output Rendered HTML output (passed by reference).
	 *
	 * @return void
	 */
	public static function categorized_post_tabs_render( $attributes, $post_data, &$output ) {
		$classes   = array();
		$classes[] = 'cozy-block-categorized-post-tabs__post-item';
		$classes[] = 'layout-' . $attributes['postOptions']['content']['layout'];
		$classes[] = $attributes['postBoxStyles']['hoverEffect'] ? 'has-hover-effect' : '';
		$classes[] = $attributes['postBoxStyles']['shadow']['enabled'] ? 'has-box-shadow' : '';
		$classes[] = $attributes['postBoxStyles']['shadowHover']['enabled'] ? 'has-hover-box-shadow' : '';
		$classes[] = $attributes['postOptions']['imageOverlay'] ? 'has-image-overlay' : '';
		$output   .= '<li class="' . implode( ' ', $classes ) . '">';

		if ( $attributes['enableOptions']['postImage'] && ! empty( $post_data['post_image_url'] ) ) {
			$classes       = array();
			$classes[]     = 'post__image';
			$classes[]     = $attributes['postOptions']['image']['hoverEffect'] ? 'has-hover-effect' : '';
			$has_post_link = isset( $attributes['enableOptions']['imgLinkPost'] ) && $attributes['enableOptions']['imgLinkPost'] ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
			$open_new_tab  = isset( $attributes['enableOptions']['imgLinkPost'], $attributes['enableOptions']['imgOpenNewTab'] ) && $attributes['enableOptions']['imgLinkPost'] && $attributes['enableOptions']['imgOpenNewTab'] ? '_blank' : '';
			$output       .= '<figure class="' . implode( ' ', $classes ) . '"><a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener"><img src="' . $post_data['post_image_url'] . '" /></a></figure>';
		}

		$output .= '<div class="post__content-wrapper">';

		if ( $attributes['enableOptions']['postCategories'] && ! empty( $post_data['post_categories'] ) ) {
			$output .= '<div class="post__categories">';
			foreach ( $post_data['post_categories'] as $cat_data ) {
				$has_cat_link = isset( $attributes['enableOptions']['linkCat'] ) && $attributes['enableOptions']['linkCat'] ? 'href="' . esc_url( $cat_data['link'] ) . '"' : '';
				$open_new_tab = isset( $attributes['enableOptions']['linkCat'], $attributes['enableOptions']['catOpenNewTab'] ) && $attributes['enableOptions']['linkCat'] && $attributes['enableOptions']['catOpenNewTab'] ? '_blank' : '';
				$output      .= '<a class="post__category-item" ' . $has_cat_link . ' target="' . $open_new_tab . '" rel="noopener">' . esc_html( $cat_data['name'] ) . '</a>';
			}
			$output .= '</div>';
		}

		$has_post_link      = isset( $attributes['enableOptions']['titleLinkPost'] ) && $attributes['enableOptions']['titleLinkPost'] ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
		$open_new_tab       = isset( $attributes['enableOptions']['titleLinkPost'], $attributes['enableOptions']['titleOpenNewTab'] ) && $attributes['enableOptions']['titleLinkPost'] && $attributes['enableOptions']['titleOpenNewTab'] ? '_blank' : '';
		$classes            = array();
		$classes[]          = 'post__title';
		$additional_classes = isset( $attributes['postOptions']['title']['className'] ) ? $attributes['postOptions']['title']['className'] : '';
		if ( ! empty( $additional_classes ) ) {
			$classes = array_merge( $classes, explode( ' ', $additional_classes ) );
		}
		$output .= '<h2 class="' . esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ) . '"><a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener">' . esc_html( $post_data['post_title'] ) . '</a></h2>';

		if ( $attributes['enableOptions']['postAuthor'] || $attributes['enableOptions']['postComments'] || $attributes['enableOptions']['postDate'] ) {
			$output .= '<div class="post__meta">';

			$has_meta_link = isset( $attributes['enableOptions']['linkPostMeta'] ) && $attributes['enableOptions']['linkPostMeta'] ? true : false;
			$open_new_tab  = isset( $attributes['enableOptions']['linkPostMeta'], $attributes['enableOptions']['postMetaOpenNewTab'] ) && $attributes['enableOptions']['linkPostMeta'] && $attributes['enableOptions']['postMetaOpenNewTab'] ? '_blank' : '';
			$show_icon     = isset( $attributes['postMeta']['enableIcon'] ) && $attributes['postMeta']['enableIcon'] ? true : false;
			if ( $attributes['enableOptions']['postAuthor'] ) {
				$meta_link = $has_meta_link ? 'href="' . esc_url( $post_data['post_author_url'] ) . '"' : '';
				$output   .= '<a class="post__author display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
				if ( $show_icon ) {
					$output .= '<svg
											width="' . $attributes['postMeta']['font']['size'] . '"
											height="' . $attributes['postMeta']['font']['size'] . '"
											xmlns="http://www.w3.org/2000/svg"
											aria-hidden="true"
											viewBox="0 0 12 15"
										>
											<path d="M11.2972 14.6667H0.630493V13.3333C0.630493 12.4493 0.981683 11.6014 1.6068 10.9763C2.23193 10.3512 3.07977 10 3.96383 10H7.96383C8.84788 10 9.69573 10.3512 10.3208 10.9763C10.946 11.6014 11.2972 12.4493 11.2972 13.3333V14.6667ZM5.96383 8.66667C5.43854 8.66667 4.9184 8.5632 4.43309 8.36218C3.94779 8.16117 3.50683 7.86653 3.1354 7.49509C2.76396 7.12366 2.46933 6.6827 2.26831 6.1974C2.06729 5.7121 1.96383 5.19195 1.96383 4.66667C1.96383 4.14138 2.06729 3.62124 2.26831 3.13593C2.46933 2.65063 2.76396 2.20967 3.1354 1.83824C3.50683 1.4668 3.94779 1.17217 4.43309 0.971148C4.9184 0.770129 5.43854 0.666666 5.96383 0.666666C7.02469 0.666666 8.04211 1.08809 8.79225 1.83824C9.5424 2.58838 9.96383 3.6058 9.96383 4.66667C9.96383 5.72753 9.5424 6.74495 8.79225 7.49509C8.04211 8.24524 7.02469 8.66667 5.96383 8.66667Z" />
										</svg>';
				}

				$output .= '<p>' . esc_html( $post_data['post_author_name'] ) . '</p>';
				$output .= '</a>';
			}

			if ( $attributes['enableOptions']['postComments'] && intval( $post_data['comment_count'] ) > 0 ) {
				$meta_link = $has_meta_link ? 'href="' . esc_url( $post_data['comment_link'] ) . '"' : '';
				$output   .= '<a class="post__comments display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
				if ( $show_icon ) {
					$output .= '<svg
											width="' . $attributes['postMeta']['font']['size'] . '"
											height="' . $attributes['postMeta']['font']['size'] . '"
											xmlns="http://www.w3.org/2000/svg"
											aria-hidden="true"
											viewBox="0 0 25 20"
										>
											<path d="M18.0556 6.94444C18.0556 3.10764 14.0148 0 9.02778 0C4.0408 0 0 3.10764 0 6.94444C0 8.43316 0.611979 9.80469 1.64931 10.9375C1.06771 12.2483 0.108507 13.2899 0.0954861 13.3029C0 13.4028 -0.0260417 13.5503 0.0303819 13.6806C0.0868056 13.8108 0.208333 13.8889 0.347222 13.8889C1.93576 13.8889 3.25087 13.355 4.19705 12.8038C5.59462 13.4852 7.24826 13.8889 9.02778 13.8889C14.0148 13.8889 18.0556 10.7812 18.0556 6.94444ZM23.3507 16.4931C24.388 15.3646 25 13.9887 25 12.5C25 9.59635 22.678 7.10937 19.388 6.07205C19.4271 6.35851 19.4444 6.6493 19.4444 6.94444C19.4444 11.5408 14.77 15.2778 9.02778 15.2778C8.55903 15.2778 8.1033 15.2431 7.65191 15.1953C9.0191 17.691 12.2309 19.4444 15.9722 19.4444C17.7517 19.4444 19.4054 19.0451 20.8029 18.3594C21.7491 18.9106 23.0642 19.4444 24.6528 19.4444C24.7917 19.4444 24.9175 19.362 24.9696 19.2361C25.026 19.1102 25 18.9627 24.9045 18.8585C24.8915 18.8455 23.9323 17.8082 23.3507 16.4931Z" />
										</svg>';
				}

				$output .= '<p>' . esc_html( $post_data['comment_count'] ) . '</p>';
				$output .= '</a>';
			}

			if ( $attributes['enableOptions']['postDate'] ) {
				$meta_link = $has_meta_link ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
				$output   .= '<a class="post__date display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
				if ( $show_icon ) {
					$output .= '<svg
											width="' . $attributes['postMeta']['font']['size'] . '"
											height="' . $attributes['postMeta']['font']['size'] . '"
											xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 16 18"
											aria-hidden="true"
										>
											<path d="M7.66699 10.6666C7.43088 10.6666 7.23296 10.5868 7.07324 10.427C6.91352 10.2673 6.83366 10.0694 6.83366 9.83329C6.83366 9.59718 6.91352 9.39927 7.07324 9.23954C7.23296 9.07982 7.43088 8.99996 7.66699 8.99996C7.9031 8.99996 8.10102 9.07982 8.26074 9.23954C8.42046 9.39927 8.50033 9.59718 8.50033 9.83329C8.50033 10.0694 8.42046 10.2673 8.26074 10.427C8.10102 10.5868 7.9031 10.6666 7.66699 10.6666ZM4.33366 10.6666C4.09755 10.6666 3.89963 10.5868 3.73991 10.427C3.58019 10.2673 3.50033 10.0694 3.50033 9.83329C3.50033 9.59718 3.58019 9.39927 3.73991 9.23954C3.89963 9.07982 4.09755 8.99996 4.33366 8.99996C4.56977 8.99996 4.76769 9.07982 4.92741 9.23954C5.08713 9.39927 5.16699 9.59718 5.16699 9.83329C5.16699 10.0694 5.08713 10.2673 4.92741 10.427C4.76769 10.5868 4.56977 10.6666 4.33366 10.6666ZM11.0003 10.6666C10.7642 10.6666 10.5663 10.5868 10.4066 10.427C10.2469 10.2673 10.167 10.0694 10.167 9.83329C10.167 9.59718 10.2469 9.39927 10.4066 9.23954C10.5663 9.07982 10.7642 8.99996 11.0003 8.99996C11.2364 8.99996 11.4344 9.07982 11.5941 9.23954C11.7538 9.39927 11.8337 9.59718 11.8337 9.83329C11.8337 10.0694 11.7538 10.2673 11.5941 10.427C11.4344 10.5868 11.2364 10.6666 11.0003 10.6666ZM7.66699 14C7.43088 14 7.23296 13.9201 7.07324 13.7604C6.91352 13.6007 6.83366 13.4027 6.83366 13.1666C6.83366 12.9305 6.91352 12.7326 7.07324 12.5729C7.23296 12.4132 7.43088 12.3333 7.66699 12.3333C7.9031 12.3333 8.10102 12.4132 8.26074 12.5729C8.42046 12.7326 8.50033 12.9305 8.50033 13.1666C8.50033 13.4027 8.42046 13.6007 8.26074 13.7604C8.10102 13.9201 7.9031 14 7.66699 14ZM4.33366 14C4.09755 14 3.89963 13.9201 3.73991 13.7604C3.58019 13.6007 3.50033 13.4027 3.50033 13.1666C3.50033 12.9305 3.58019 12.7326 3.73991 12.5729C3.89963 12.4132 4.09755 12.3333 4.33366 12.3333C4.56977 12.3333 4.76769 12.4132 4.92741 12.5729C5.08713 12.7326 5.16699 12.9305 5.16699 13.1666C5.16699 13.4027 5.08713 13.6007 4.92741 13.7604C4.76769 13.9201 4.56977 14 4.33366 14ZM11.0003 14C10.7642 14 10.5663 13.9201 10.4066 13.7604C10.2469 13.6007 10.167 13.4027 10.167 13.1666C10.167 12.9305 10.2469 12.7326 10.4066 12.5729C10.5663 12.4132 10.7642 12.3333 11.0003 12.3333C11.2364 12.3333 11.4344 12.4132 11.5941 12.5729C11.7538 12.7326 11.8337 12.9305 11.8337 13.1666C11.8337 13.4027 11.7538 13.6007 11.5941 13.7604C11.4344 13.9201 11.2364 14 11.0003 14ZM1.83366 17.3333C1.37533 17.3333 0.982964 17.1701 0.656576 16.8437C0.330187 16.5173 0.166992 16.125 0.166992 15.6666V3.99996C0.166992 3.54163 0.330187 3.14926 0.656576 2.82288C0.982964 2.49649 1.37533 2.33329 1.83366 2.33329H2.66699V0.666626H4.33366V2.33329H11.0003V0.666626H12.667V2.33329H13.5003C13.9587 2.33329 14.351 2.49649 14.6774 2.82288C15.0038 3.14926 15.167 3.54163 15.167 3.99996V15.6666C15.167 16.125 15.0038 16.5173 14.6774 16.8437C14.351 17.1701 13.9587 17.3333 13.5003 17.3333H1.83366ZM1.83366 15.6666H13.5003V7.33329H1.83366V15.6666Z" />
										</svg>';
				}

				$output .= '<p>' . esc_html( $post_data['post_date_formatted'] ) . '</p>';
				$output .= '</a>';
			}

			$output .= '</div>';
		}

		if ( $attributes['enableOptions']['postContent'] ) {
			$output .= '<div class="post__content">';

			$output .= '<div>';
			if ( isset( $post_data['post_excerpt'] ) && ! empty( $post_data['post_excerpt'] ) ) {
				$output .= cozy_create_excerpt( $post_data['post_excerpt'], $attributes['enableOptions']['postExcerpt'] );
			} else {
				$output .= cozy_create_excerpt( $post_data['post_content'], $attributes['enableOptions']['postExcerpt'] );
			}
			$output .= '</div>';

			if ( $attributes['enableOptions']['readMore'] ) {
				$open_new_tab = isset( $attributes['enableOptions']['readMoreNewTab'] ) && $attributes['enableOptions']['readMoreNewTab'] ? '_blank' : '';
				$output      .= '<span class="post__read-more"><a class="post__read-more-link" href="' . esc_url( $post_data['post_link'] ) . '" target="' . $open_new_tab . '" rel="noopener">' . esc_html__( 'Read More', 'cozy-addons' ) . '</a></span>';
			}
			$output .= '</div>';
		}

		$output .= '</div>';

		$output .= '</li>';
	}

	/**
	 * Renders the advanced gallery block output.
	 *
	 * @param array  $attributes Block attributes.
	 * @param array  $item_data Gallery item data.
	 * @param string $output Rendered HTML output (passed by reference).
	 *
	 * @return void
	 */
	public static function advanced_gallery_render( $attributes, $item_data, &$output ) {
		$classes   = array();
		$classes[] = 'cozy-block-advanced-gallery__item';
		$classes[] = 'carousel' === $attributes['display'] ? 'swiper-slide' : '';
		$classes[] = filter_var( $attributes['enableOptions']['hoverTitle'], FILTER_VALIDATE_BOOLEAN ) ? 'has-hover-caption' : '';
		$output   .= '<li class="' . implode( ' ', $classes ) . '">';

		$classes   = array();
		$classes[] = 'cozy-block-advanced-gallery__image-wrapper';
		$classes[] = filter_var( $attributes['image']['hoverEffect'], FILTER_VALIDATE_BOOLEAN ) ? 'has-hover-effect' : '';
		$output   .= '<figure class="' . implode( ' ', $classes ) . '">';
		$output   .= '<span class="cozy-block-advanced-gallery__image-background"></span>';
		$output   .= '<img class="cozy-block-advanced-gallery__image" src="' . esc_url( $item_data['url'] ) . '" alt="' . esc_html( $item_data['alt'] ) . '" />';

		if ( filter_var( $attributes['enableOptions']['hoverIcon'], FILTER_VALIDATE_BOOLEAN ) ) {
			$view_box   = array();
			$view_box[] = $attributes['icon']['viewBox']['vx'];
			$view_box[] = $attributes['icon']['viewBox']['vy'];
			$view_box[] = $attributes['icon']['viewBox']['vw'];
			$view_box[] = $attributes['icon']['viewBox']['vh'];
			$output    .= '<div class="cozy-block-advanced-gallery__icon-wrapper">';
			$output    .= '<svg class="cozy-block-advanced-gallery__icon" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="' . implode( ' ', $view_box ) . '">';
			$output    .= '<path d="' . $attributes['icon']['path'] . '" />';
			$output    .= '</svg>';
			$output    .= '</div>';
		}

		if ( filter_var( $attributes['enableOptions']['hoverTitle'], FILTER_VALIDATE_BOOLEAN ) ) {
			$output .= '<div class="cozy-block-advanced-gallery__image-caption">';
			$output .= esc_html( $item_data['caption'] );
			$output .= '</div>';
		}
		$output .= '</figure>';

		$output .= '</li>';
	}

	/**
	 * Renders the popular post block output.
	 *
	 * @param array  $attributes Block attributes.
	 * @param array  $post_data Post data.
	 * @param string $output Rendered HTML output (passed by reference).
	 *
	 * @return void
	 */
	public static function popular_posts_render( $attributes, $post_data, &$output ) {
		$item_classes   = array();
		$item_classes[] = 'cozy-block-popular-posts__item';
		$output        .= '<li class="' . implode( ' ', $item_classes ) . '" data-post-id="' . esc_attr( $post_data['ID'] ) . '">';

		if ( 'list' === $attributes['display'] ) {
			$output .= '<div class="item__flex" style="display:flex;gap:' . $attributes['imageStyles']['gap'] . '">';
		}

			// Post Image.
		if ( filter_var( $attributes['enableOptions']['image'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_data['post_image_url'] ) ) {
			$figure_classes   = array();
			$figure_classes[] = 'cozy-block-popular-posts__image';
			$figure_classes[] = $attributes['imageStyles']['hoverEffect'] ? 'has-hover-effect' : '';
			$output          .= '<figure class="' . implode( ' ', $figure_classes ) . '">';
			$has_post_link    = isset( $attributes['enableOptions']['imgLinkPost'] ) && filter_var( $attributes['enableOptions']['imgLinkPost'], FILTER_VALIDATE_BOOLEAN ) ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
			$open_new_tab     = isset( $attributes['enableOptions']['imgLinkPost'], $attributes['enableOptions']['imgLinkNewTab'] ) && filter_var( $attributes['enableOptions']['imgLinkPost'], FILTER_VALIDATE_BOOLEAN ) && filter_var( $attributes['enableOptions']['imgLinkNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
			$output          .= '<a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener">';
			$output          .= '<img alt="' . esc_html( $post_data['post_title'] ) . '" src="' . esc_url( $post_data['post_image_url'] ) . '" />';
			$output          .= '</a>';
			$output          .= '</figure>';
		}

			$output .= '<div>';
			// Post Category.
		if ( filter_var( $attributes['enableOptions']['category'], FILTER_VALIDATE_BOOLEAN ) ) {
			$category_classes   = array();
			$category_classes[] = 'cozy-block-popular-posts__post-categories';
			$category_classes[] = $attributes['categoryStyles']['hoverEffect'] ? 'has-hover-effect' : '';
			$output            .= '<div class="' . implode( ' ', $category_classes ) . '">';
			$open_new_tab       = isset( $attributes['enableOptions']['linkCat'], $attributes['enableOptions']['catNewTab'] ) && filter_var( $attributes['enableOptions']['linkCat'], FILTER_VALIDATE_BOOLEAN ) && filter_var( $attributes['enableOptions']['catNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
			foreach ( $post_data['post_categories'] as $cat_data ) {
				$has_cat_link = isset( $attributes['enableOptions']['linkCat'] ) && filter_var( $attributes['enableOptions']['linkCat'], FILTER_VALIDATE_BOOLEAN ) ? 'href="' . esc_url( $cat_data['link'] ) . '"' : '';
				$output      .= '<a ' . $has_cat_link . ' target="' . $open_new_tab . '" rel="noopener">';
				$output      .= esc_html( $cat_data['name'] );
				$output      .= '</a>';
			}
			$output .= '</div>';
		}

			// Post Title.
			$has_post_link    = isset( $attributes['enableOptions']['titleLinkPost'] ) && filter_var( $attributes['enableOptions']['titleLinkPost'], FILTER_VALIDATE_BOOLEAN ) ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
			$open_new_tab     = isset( $attributes['enableOptions']['titleLinkPost'], $attributes['enableOptions']['titleLinkNewTab'] ) && filter_var( $attributes['enableOptions']['titleLinkPost'], FILTER_VALIDATE_BOOLEAN ) && filter_var( $attributes['enableOptions']['titleLinkNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
			$classes          = array();
			$classes[]        = 'cozy-block-popular-posts__post-title';
			$addition_classes = isset( $attributes['titleStyles']['className'] ) ? $attributes['titleStyles']['className'] : '';
		if ( ! empty( $addition_classes ) ) {
			$classes = array_merge( $classes, explode( ' ', $addition_classes ) );
		}
			$output .= '<h4 class="' . esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ) . '"><a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener">' . esc_html( $post_data['post_title'] ) . '</a></h4>';

		if ( ( isset( $attributes['enableOptions']['author'] ) && filter_var( $attributes['enableOptions']['author'], FILTER_VALIDATE_BOOLEAN ) ) || ( isset( $attributes['enableOptions']['comments'] ) && filter_var( $attributes['enableOptions']['comments'], FILTER_VALIDATE_BOOLEAN ) ) || filter_var( $attributes['enableOptions']['date'], FILTER_VALIDATE_BOOLEAN ) ) {
			$output .= '<div class="post__meta">';

			$has_meta_link = isset( $attributes['enableOptions']['linkPostMeta'] ) && $attributes['enableOptions']['linkPostMeta'] ? true : false;
			$open_new_tab  = isset( $attributes['enableOptions']['linkPostMeta'], $attributes['enableOptions']['postMetaNewTab'] ) && $attributes['enableOptions']['linkPostMeta'] && $attributes['enableOptions']['postMetaNewTab'] ? '_blank' : '';
			$show_icon     = isset( $attributes['enableOptions']['enableMetaIcon'] ) && $attributes['enableOptions']['enableMetaIcon'] ? true : false;

			if ( isset( $attributes['enableOptions']['author'] ) && filter_var( $attributes['enableOptions']['author'], FILTER_VALIDATE_BOOLEAN ) ) {
				$meta_link = $has_meta_link ? 'href="' . esc_url( $post_data['post_author_url'] ) . '"' : '';
				$output   .= '<a class="post__author display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
				if ( $show_icon ) {
					$output .= '<svg
													width="' . $attributes['dateStyles']['fontSize'] . '"
													height="' . $attributes['dateStyles']['fontSize'] . '"
													xmlns="http://www.w3.org/2000/svg"
													aria-hidden="true"
													viewBox="0 0 12 15"
												>
													<path d="M11.2972 14.6667H0.630493V13.3333C0.630493 12.4493 0.981683 11.6014 1.6068 10.9763C2.23193 10.3512 3.07977 10 3.96383 10H7.96383C8.84788 10 9.69573 10.3512 10.3208 10.9763C10.946 11.6014 11.2972 12.4493 11.2972 13.3333V14.6667ZM5.96383 8.66667C5.43854 8.66667 4.9184 8.5632 4.43309 8.36218C3.94779 8.16117 3.50683 7.86653 3.1354 7.49509C2.76396 7.12366 2.46933 6.6827 2.26831 6.1974C2.06729 5.7121 1.96383 5.19195 1.96383 4.66667C1.96383 4.14138 2.06729 3.62124 2.26831 3.13593C2.46933 2.65063 2.76396 2.20967 3.1354 1.83824C3.50683 1.4668 3.94779 1.17217 4.43309 0.971148C4.9184 0.770129 5.43854 0.666666 5.96383 0.666666C7.02469 0.666666 8.04211 1.08809 8.79225 1.83824C9.5424 2.58838 9.96383 3.6058 9.96383 4.66667C9.96383 5.72753 9.5424 6.74495 8.79225 7.49509C8.04211 8.24524 7.02469 8.66667 5.96383 8.66667Z" />
												</svg>';
				}

				$output .= '<p>' . esc_html( $post_data['post_author_name'] ) . '</p>';
				$output .= '</a>';
			}

			if ( isset( $attributes['enableOptions']['comments'] ) && filter_var( $attributes['enableOptions']['comments'], FILTER_VALIDATE_BOOLEAN ) && intval( $post_data['comment_count'] ) > 0 ) {
				$meta_link = $has_meta_link ? 'href="' . esc_url( $post_data['comment_link'] ) . '"' : '';
				$output   .= '<a class="post__comments display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
				if ( $show_icon ) {
					$output .= '<svg
												width="' . $attributes['dateStyles']['fontSize'] . '"
												height="' . $attributes['dateStyles']['fontSize'] . '"
												xmlns="http://www.w3.org/2000/svg"
												aria-hidden="true"
												viewBox="0 0 25 20"
											>
												<path d="M18.0556 6.94444C18.0556 3.10764 14.0148 0 9.02778 0C4.0408 0 0 3.10764 0 6.94444C0 8.43316 0.611979 9.80469 1.64931 10.9375C1.06771 12.2483 0.108507 13.2899 0.0954861 13.3029C0 13.4028 -0.0260417 13.5503 0.0303819 13.6806C0.0868056 13.8108 0.208333 13.8889 0.347222 13.8889C1.93576 13.8889 3.25087 13.355 4.19705 12.8038C5.59462 13.4852 7.24826 13.8889 9.02778 13.8889C14.0148 13.8889 18.0556 10.7812 18.0556 6.94444ZM23.3507 16.4931C24.388 15.3646 25 13.9887 25 12.5C25 9.59635 22.678 7.10937 19.388 6.07205C19.4271 6.35851 19.4444 6.6493 19.4444 6.94444C19.4444 11.5408 14.77 15.2778 9.02778 15.2778C8.55903 15.2778 8.1033 15.2431 7.65191 15.1953C9.0191 17.691 12.2309 19.4444 15.9722 19.4444C17.7517 19.4444 19.4054 19.0451 20.8029 18.3594C21.7491 18.9106 23.0642 19.4444 24.6528 19.4444C24.7917 19.4444 24.9175 19.362 24.9696 19.2361C25.026 19.1102 25 18.9627 24.9045 18.8585C24.8915 18.8455 23.9323 17.8082 23.3507 16.4931Z" />
											</svg>';
				}

				$output .= '<p>' . esc_html( $post_data['comment_count'] ) . '</p>';
				$output .= '</a>';
			}

			// Post Date.
			if ( filter_var( $attributes['enableOptions']['date'], FILTER_VALIDATE_BOOLEAN ) ) {
				$meta_link   = $has_meta_link ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
					$output .= '<a class="post__date display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
				if ( $show_icon ) {
					$output .= '<svg
													width="' . $attributes['dateStyles']['fontSize'] . '"
													height="' . $attributes['dateStyles']['fontSize'] . '"
													xmlns="http://www.w3.org/2000/svg"
													viewBox="0 0 16 18"
													aria-hidden="true"
												>
													<path d="M7.66699 10.6666C7.43088 10.6666 7.23296 10.5868 7.07324 10.427C6.91352 10.2673 6.83366 10.0694 6.83366 9.83329C6.83366 9.59718 6.91352 9.39927 7.07324 9.23954C7.23296 9.07982 7.43088 8.99996 7.66699 8.99996C7.9031 8.99996 8.10102 9.07982 8.26074 9.23954C8.42046 9.39927 8.50033 9.59718 8.50033 9.83329C8.50033 10.0694 8.42046 10.2673 8.26074 10.427C8.10102 10.5868 7.9031 10.6666 7.66699 10.6666ZM4.33366 10.6666C4.09755 10.6666 3.89963 10.5868 3.73991 10.427C3.58019 10.2673 3.50033 10.0694 3.50033 9.83329C3.50033 9.59718 3.58019 9.39927 3.73991 9.23954C3.89963 9.07982 4.09755 8.99996 4.33366 8.99996C4.56977 8.99996 4.76769 9.07982 4.92741 9.23954C5.08713 9.39927 5.16699 9.59718 5.16699 9.83329C5.16699 10.0694 5.08713 10.2673 4.92741 10.427C4.76769 10.5868 4.56977 10.6666 4.33366 10.6666ZM11.0003 10.6666C10.7642 10.6666 10.5663 10.5868 10.4066 10.427C10.2469 10.2673 10.167 10.0694 10.167 9.83329C10.167 9.59718 10.2469 9.39927 10.4066 9.23954C10.5663 9.07982 10.7642 8.99996 11.0003 8.99996C11.2364 8.99996 11.4344 9.07982 11.5941 9.23954C11.7538 9.39927 11.8337 9.59718 11.8337 9.83329C11.8337 10.0694 11.7538 10.2673 11.5941 10.427C11.4344 10.5868 11.2364 10.6666 11.0003 10.6666ZM7.66699 14C7.43088 14 7.23296 13.9201 7.07324 13.7604C6.91352 13.6007 6.83366 13.4027 6.83366 13.1666C6.83366 12.9305 6.91352 12.7326 7.07324 12.5729C7.23296 12.4132 7.43088 12.3333 7.66699 12.3333C7.9031 12.3333 8.10102 12.4132 8.26074 12.5729C8.42046 12.7326 8.50033 12.9305 8.50033 13.1666C8.50033 13.4027 8.42046 13.6007 8.26074 13.7604C8.10102 13.9201 7.9031 14 7.66699 14ZM4.33366 14C4.09755 14 3.89963 13.9201 3.73991 13.7604C3.58019 13.6007 3.50033 13.4027 3.50033 13.1666C3.50033 12.9305 3.58019 12.7326 3.73991 12.5729C3.89963 12.4132 4.09755 12.3333 4.33366 12.3333C4.56977 12.3333 4.76769 12.4132 4.92741 12.5729C5.08713 12.7326 5.16699 12.9305 5.16699 13.1666C5.16699 13.4027 5.08713 13.6007 4.92741 13.7604C4.76769 13.9201 4.56977 14 4.33366 14ZM11.0003 14C10.7642 14 10.5663 13.9201 10.4066 13.7604C10.2469 13.6007 10.167 13.4027 10.167 13.1666C10.167 12.9305 10.2469 12.7326 10.4066 12.5729C10.5663 12.4132 10.7642 12.3333 11.0003 12.3333C11.2364 12.3333 11.4344 12.4132 11.5941 12.5729C11.7538 12.7326 11.8337 12.9305 11.8337 13.1666C11.8337 13.4027 11.7538 13.6007 11.5941 13.7604C11.4344 13.9201 11.2364 14 11.0003 14ZM1.83366 17.3333C1.37533 17.3333 0.982964 17.1701 0.656576 16.8437C0.330187 16.5173 0.166992 16.125 0.166992 15.6666V3.99996C0.166992 3.54163 0.330187 3.14926 0.656576 2.82288C0.982964 2.49649 1.37533 2.33329 1.83366 2.33329H2.66699V0.666626H4.33366V2.33329H11.0003V0.666626H12.667V2.33329H13.5003C13.9587 2.33329 14.351 2.49649 14.6774 2.82288C15.0038 3.14926 15.167 3.54163 15.167 3.99996V15.6666C15.167 16.125 15.0038 16.5173 14.6774 16.8437C14.351 17.1701 13.9587 17.3333 13.5003 17.3333H1.83366ZM1.83366 15.6666H13.5003V7.33329H1.83366V15.6666Z" />
												</svg>';
				}

					$output .= '<p>' . esc_html( $post_data['post_date_formatted'] ) . '</p>';
					$output .= '</a>';
			}

			$output .= '</div>';

		}

			// Post Excerpt
		if ( filter_var( $attributes['enableOptions']['content'], FILTER_VALIDATE_BOOLEAN ) ) {
			$output .= '<p class="cozy-block-popular-posts__content">';
			if ( isset( $post_data['post_excerpt'] ) && ! empty( $post_data['post_excerpt'] ) ) {
				$output .= cozy_create_excerpt( $post_data['post_excerpt'], $attributes['enableOptions']['excerpt'] );
			} else {
				$output .= cozy_create_excerpt( $post_data['post_content'], $attributes['enableOptions']['excerpt'] );
			}
			$output .= '</p>';
		}
			$output .= '</div>';

		if ( 'list' === $attributes['display'] ) {
			$output .= '</div>';
		}

		$output .= '</li>';
	}

	/**
	 * Renders the trending post block output.
	 *
	 * @param array  $attributes Block attributes.
	 * @param array  $post_data Post data.
	 * @param string $output Rendered HTML output (passed by reference).
	 *
	 * @return void
	 */
	public static function trending_posts_render( $attributes, $post_data, &$output ) {
		$item_classes   = array();
		$item_classes[] = 'cozy-block-trending-posts__item';
		$output        .= '<li class="' . implode( ' ', $item_classes ) . '" data-post-id="' . esc_attr( $post_data['ID'] ) . '">';

		if ( 'list' === $attributes['display'] ) {
			$output .= '<div class="item__flex" style="display:flex;gap:' . $attributes['imageStyles']['gap'] . '">';
		}

			// Post Image.
		if ( filter_var( $attributes['enableOptions']['image'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_data['post_image_url'] ) ) {
			$figure_classes   = array();
			$figure_classes[] = 'cozy-block-trending-posts__image';
			$figure_classes[] = $attributes['imageStyles']['hoverEffect'] ? 'has-hover-effect' : '';
			$output          .= '<figure class="' . implode( ' ', $figure_classes ) . '">';
			$has_post_link    = isset( $attributes['enableOptions']['imgLinkPost'] ) && filter_var( $attributes['enableOptions']['imgLinkPost'], FILTER_VALIDATE_BOOLEAN ) ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
			$open_new_tab     = isset( $attributes['enableOptions']['imgLinkPost'], $attributes['enableOptions']['imgLinkNewTab'] ) && filter_var( $attributes['enableOptions']['imgLinkPost'], FILTER_VALIDATE_BOOLEAN ) && filter_var( $attributes['enableOptions']['imgLinkNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
			$output          .= '<a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener">';
			$output          .= '<img alt="' . esc_html( $post_data['post_title'] ) . '" src="' . esc_url( $post_data['post_image_url'] ) . '" />';
			$output          .= '</a>';
			$output          .= '</figure>';
		}

			$output .= '<div>';
			// Post Category.
		if ( filter_var( $attributes['enableOptions']['category'], FILTER_VALIDATE_BOOLEAN ) ) {
			$category_classes   = array();
			$category_classes[] = 'cozy-block-trending-posts__post-categories';
			$category_classes[] = $attributes['categoryStyles']['hoverEffect'] ? 'has-hover-effect' : '';
			$output            .= '<div class="' . implode( ' ', $category_classes ) . '">';
			$open_new_tab       = isset( $attributes['enableOptions']['linkCat'], $attributes['enableOptions']['catNewTab'] ) && filter_var( $attributes['enableOptions']['linkCat'], FILTER_VALIDATE_BOOLEAN ) && filter_var( $attributes['enableOptions']['catNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
			foreach ( $post_data['post_categories'] as $cat_data ) {
				$has_cat_link = isset( $attributes['enableOptions']['linkCat'] ) && filter_var( $attributes['enableOptions']['linkCat'], FILTER_VALIDATE_BOOLEAN ) ? 'href="' . esc_url( $cat_data['link'] ) . '"' : '';
				$output      .= '<a ' . $has_cat_link . ' target="' . $open_new_tab . '" rel="noopener">';
				$output      .= esc_html( $cat_data['name'] );
				$output      .= '</a>';
			}
			$output .= '</div>';
		}

			// Post Title.
			$has_post_link      = isset( $attributes['enableOptions']['titleLinkPost'] ) && filter_var( $attributes['enableOptions']['titleLinkPost'], FILTER_VALIDATE_BOOLEAN ) ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
			$open_new_tab       = isset( $attributes['enableOptions']['titleLinkPost'], $attributes['enableOptions']['titleLinkNewTab'] ) && filter_var( $attributes['enableOptions']['titleLinkPost'], FILTER_VALIDATE_BOOLEAN ) && filter_var( $attributes['enableOptions']['titleLinkNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
			$classes            = array();
			$classes[]          = 'cozy-block-trending-posts__post-title';
			$additional_classes = isset( $attributes['titleStyles']['className'] ) ? $attributes['titleStyles']['className'] : '';
		if ( ! empty( $additional_classes ) ) {
			$classes = array_merge( $classes, explode( ' ', $additional_classes ) );
		}
			$output .= '<h4 class="' . esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ) . '"><a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener">' . esc_html( $post_data['post_title'] ) . '</a></h4>';

		if ( ( isset( $attributes['enableOptions']['author'] ) && filter_var( $attributes['enableOptions']['author'], FILTER_VALIDATE_BOOLEAN ) ) || ( isset( $attributes['enableOptions']['comments'] ) && filter_var( $attributes['enableOptions']['comments'], FILTER_VALIDATE_BOOLEAN ) ) || filter_var( $attributes['enableOptions']['date'], FILTER_VALIDATE_BOOLEAN ) ) {
			$output .= '<div class="post__meta">';

			$has_meta_link = isset( $attributes['enableOptions']['linkPostMeta'] ) && $attributes['enableOptions']['linkPostMeta'] ? true : false;
			$open_new_tab  = isset( $attributes['enableOptions']['linkPostMeta'], $attributes['enableOptions']['postMetaNewTab'] ) && $attributes['enableOptions']['linkPostMeta'] && $attributes['enableOptions']['postMetaNewTab'] ? '_blank' : '';
			$show_icon     = isset( $attributes['enableOptions']['enableMetaIcon'] ) && $attributes['enableOptions']['enableMetaIcon'] ? true : false;

			if ( isset( $attributes['enableOptions']['author'] ) && filter_var( $attributes['enableOptions']['author'], FILTER_VALIDATE_BOOLEAN ) ) {
				$meta_link = $has_meta_link ? 'href="' . esc_url( $post_data['post_author_url'] ) . '"' : '';
				$output   .= '<a class="post__author display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
				if ( $show_icon ) {
					$output .= '<svg
													width="' . $attributes['dateStyles']['fontSize'] . '"
													height="' . $attributes['dateStyles']['fontSize'] . '"
													xmlns="http://www.w3.org/2000/svg"
													aria-hidden="true"
													viewBox="0 0 12 15"
												>
													<path d="M11.2972 14.6667H0.630493V13.3333C0.630493 12.4493 0.981683 11.6014 1.6068 10.9763C2.23193 10.3512 3.07977 10 3.96383 10H7.96383C8.84788 10 9.69573 10.3512 10.3208 10.9763C10.946 11.6014 11.2972 12.4493 11.2972 13.3333V14.6667ZM5.96383 8.66667C5.43854 8.66667 4.9184 8.5632 4.43309 8.36218C3.94779 8.16117 3.50683 7.86653 3.1354 7.49509C2.76396 7.12366 2.46933 6.6827 2.26831 6.1974C2.06729 5.7121 1.96383 5.19195 1.96383 4.66667C1.96383 4.14138 2.06729 3.62124 2.26831 3.13593C2.46933 2.65063 2.76396 2.20967 3.1354 1.83824C3.50683 1.4668 3.94779 1.17217 4.43309 0.971148C4.9184 0.770129 5.43854 0.666666 5.96383 0.666666C7.02469 0.666666 8.04211 1.08809 8.79225 1.83824C9.5424 2.58838 9.96383 3.6058 9.96383 4.66667C9.96383 5.72753 9.5424 6.74495 8.79225 7.49509C8.04211 8.24524 7.02469 8.66667 5.96383 8.66667Z" />
												</svg>';
				}

				$output .= '<p>' . esc_html( $post_data['post_author_name'] ) . '</p>';
				$output .= '</a>';
			}

			if ( isset( $attributes['enableOptions']['comments'] ) && filter_var( $attributes['enableOptions']['comments'], FILTER_VALIDATE_BOOLEAN ) && intval( $post_data['comment_count'] ) > 0 ) {
				$meta_link = $has_meta_link ? 'href="' . esc_url( $post_data['comment_link'] ) . '"' : '';
				$output   .= '<a class="post__comments display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
				if ( $show_icon ) {
					$output .= '<svg
												width="' . $attributes['dateStyles']['fontSize'] . '"
												height="' . $attributes['dateStyles']['fontSize'] . '"
												xmlns="http://www.w3.org/2000/svg"
												aria-hidden="true"
												viewBox="0 0 25 20"
											>
												<path d="M18.0556 6.94444C18.0556 3.10764 14.0148 0 9.02778 0C4.0408 0 0 3.10764 0 6.94444C0 8.43316 0.611979 9.80469 1.64931 10.9375C1.06771 12.2483 0.108507 13.2899 0.0954861 13.3029C0 13.4028 -0.0260417 13.5503 0.0303819 13.6806C0.0868056 13.8108 0.208333 13.8889 0.347222 13.8889C1.93576 13.8889 3.25087 13.355 4.19705 12.8038C5.59462 13.4852 7.24826 13.8889 9.02778 13.8889C14.0148 13.8889 18.0556 10.7812 18.0556 6.94444ZM23.3507 16.4931C24.388 15.3646 25 13.9887 25 12.5C25 9.59635 22.678 7.10937 19.388 6.07205C19.4271 6.35851 19.4444 6.6493 19.4444 6.94444C19.4444 11.5408 14.77 15.2778 9.02778 15.2778C8.55903 15.2778 8.1033 15.2431 7.65191 15.1953C9.0191 17.691 12.2309 19.4444 15.9722 19.4444C17.7517 19.4444 19.4054 19.0451 20.8029 18.3594C21.7491 18.9106 23.0642 19.4444 24.6528 19.4444C24.7917 19.4444 24.9175 19.362 24.9696 19.2361C25.026 19.1102 25 18.9627 24.9045 18.8585C24.8915 18.8455 23.9323 17.8082 23.3507 16.4931Z" />
											</svg>';
				}

				$output .= '<p>' . esc_html( $post_data['comment_count'] ) . '</p>';
				$output .= '</a>';
			}

			// Post Date.
			if ( filter_var( $attributes['enableOptions']['date'], FILTER_VALIDATE_BOOLEAN ) ) {
				$meta_link   = $has_meta_link ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
					$output .= '<a class="post__date display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
				if ( $show_icon ) {
					$output .= '<svg
													width="' . $attributes['dateStyles']['fontSize'] . '"
													height="' . $attributes['dateStyles']['fontSize'] . '"
													xmlns="http://www.w3.org/2000/svg"
													viewBox="0 0 16 18"
													aria-hidden="true"
												>
													<path d="M7.66699 10.6666C7.43088 10.6666 7.23296 10.5868 7.07324 10.427C6.91352 10.2673 6.83366 10.0694 6.83366 9.83329C6.83366 9.59718 6.91352 9.39927 7.07324 9.23954C7.23296 9.07982 7.43088 8.99996 7.66699 8.99996C7.9031 8.99996 8.10102 9.07982 8.26074 9.23954C8.42046 9.39927 8.50033 9.59718 8.50033 9.83329C8.50033 10.0694 8.42046 10.2673 8.26074 10.427C8.10102 10.5868 7.9031 10.6666 7.66699 10.6666ZM4.33366 10.6666C4.09755 10.6666 3.89963 10.5868 3.73991 10.427C3.58019 10.2673 3.50033 10.0694 3.50033 9.83329C3.50033 9.59718 3.58019 9.39927 3.73991 9.23954C3.89963 9.07982 4.09755 8.99996 4.33366 8.99996C4.56977 8.99996 4.76769 9.07982 4.92741 9.23954C5.08713 9.39927 5.16699 9.59718 5.16699 9.83329C5.16699 10.0694 5.08713 10.2673 4.92741 10.427C4.76769 10.5868 4.56977 10.6666 4.33366 10.6666ZM11.0003 10.6666C10.7642 10.6666 10.5663 10.5868 10.4066 10.427C10.2469 10.2673 10.167 10.0694 10.167 9.83329C10.167 9.59718 10.2469 9.39927 10.4066 9.23954C10.5663 9.07982 10.7642 8.99996 11.0003 8.99996C11.2364 8.99996 11.4344 9.07982 11.5941 9.23954C11.7538 9.39927 11.8337 9.59718 11.8337 9.83329C11.8337 10.0694 11.7538 10.2673 11.5941 10.427C11.4344 10.5868 11.2364 10.6666 11.0003 10.6666ZM7.66699 14C7.43088 14 7.23296 13.9201 7.07324 13.7604C6.91352 13.6007 6.83366 13.4027 6.83366 13.1666C6.83366 12.9305 6.91352 12.7326 7.07324 12.5729C7.23296 12.4132 7.43088 12.3333 7.66699 12.3333C7.9031 12.3333 8.10102 12.4132 8.26074 12.5729C8.42046 12.7326 8.50033 12.9305 8.50033 13.1666C8.50033 13.4027 8.42046 13.6007 8.26074 13.7604C8.10102 13.9201 7.9031 14 7.66699 14ZM4.33366 14C4.09755 14 3.89963 13.9201 3.73991 13.7604C3.58019 13.6007 3.50033 13.4027 3.50033 13.1666C3.50033 12.9305 3.58019 12.7326 3.73991 12.5729C3.89963 12.4132 4.09755 12.3333 4.33366 12.3333C4.56977 12.3333 4.76769 12.4132 4.92741 12.5729C5.08713 12.7326 5.16699 12.9305 5.16699 13.1666C5.16699 13.4027 5.08713 13.6007 4.92741 13.7604C4.76769 13.9201 4.56977 14 4.33366 14ZM11.0003 14C10.7642 14 10.5663 13.9201 10.4066 13.7604C10.2469 13.6007 10.167 13.4027 10.167 13.1666C10.167 12.9305 10.2469 12.7326 10.4066 12.5729C10.5663 12.4132 10.7642 12.3333 11.0003 12.3333C11.2364 12.3333 11.4344 12.4132 11.5941 12.5729C11.7538 12.7326 11.8337 12.9305 11.8337 13.1666C11.8337 13.4027 11.7538 13.6007 11.5941 13.7604C11.4344 13.9201 11.2364 14 11.0003 14ZM1.83366 17.3333C1.37533 17.3333 0.982964 17.1701 0.656576 16.8437C0.330187 16.5173 0.166992 16.125 0.166992 15.6666V3.99996C0.166992 3.54163 0.330187 3.14926 0.656576 2.82288C0.982964 2.49649 1.37533 2.33329 1.83366 2.33329H2.66699V0.666626H4.33366V2.33329H11.0003V0.666626H12.667V2.33329H13.5003C13.9587 2.33329 14.351 2.49649 14.6774 2.82288C15.0038 3.14926 15.167 3.54163 15.167 3.99996V15.6666C15.167 16.125 15.0038 16.5173 14.6774 16.8437C14.351 17.1701 13.9587 17.3333 13.5003 17.3333H1.83366ZM1.83366 15.6666H13.5003V7.33329H1.83366V15.6666Z" />
												</svg>';
				}

					$output .= '<p>' . esc_html( $post_data['post_date_formatted'] ) . '</p>';
					$output .= '</a>';
			}

			$output .= '</div>';

		}

		// Post Excerpt.
		if ( filter_var( $attributes['enableOptions']['content'], FILTER_VALIDATE_BOOLEAN ) ) {
			$output .= '<p class="cozy-block-trending-posts__content">';
			if ( isset( $post_data['post_excerpt'] ) && ! empty( $post_data['post_excerpt'] ) ) {
				$output .= cozy_create_excerpt( $post_data['post_excerpt'], $attributes['enableOptions']['excerpt'] );
			} else {
				$output .= cozy_create_excerpt( $post_data['post_content'], $attributes['enableOptions']['excerpt'] );
			}
			$output .= '</p>';
		}

			$output .= '</div>';

		if ( 'list' === $attributes['display'] ) {
			$output .= '</div>';
		}

		$output .= '</li>';
	}
}
