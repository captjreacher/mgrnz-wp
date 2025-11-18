<?php
/**
 * Custom Post Type for Portfolio Gallery
 */
if ( ! function_exists( 'ca_cpt_portfolio_gallery_init' ) ) {
	/**
	 * Registering custom post type 'ca_portfolio_gallery'.
	 *
	 * @return void
	 */
	function ca_cpt_portfolio_gallery_init() {
		$args = array(
			'labels'               => array(
				'name'              => _x( 'Portfolio Gallery', 'Portfolio Gallery', 'cozy-addons' ),
				'singular_name'     => _x( 'Portfolio Gallery', 'Portfolio Gallery', 'cozy-addons' ),
				'menu_name'         => _x( 'Portfolio Gallery', 'Admin Menu Text', 'cozy-addons' ),
				'name_admin_bar'    => _x( 'Portfolio Gallery', 'Add New on Toolbar', 'cozy-addons' ),
				'add_new'           => __( 'Add New', 'cozy-addons' ),
				'add_new_item'      => __( 'Add New Portfolio', 'cozy-addons' ),
				'new_item'          => __( 'New Portfolio', 'cozy-addons' ),
				'edit_item'         => __( 'Edit Portfolio', 'cozy-addons' ),
				'view_item'         => __( 'View Portfolio', 'cozy-addons' ),
				'all_items'         => __( 'All Portfolios', 'cozy-addons' ),
				'search_items'      => __( 'Search Portfolio Template', 'cozy-addons' ),
				'parent_item_colon' => __( 'Parent Portfolio Template:', 'cozy-addons' ),
				'not_found'         => __( 'No Portfolio Template found.', 'cozy-addons' ),
			),
			'public'               => true,
			'publicly_queryable'   => true,
			'show_ui'              => true,
			'show_in_menu'         => true,
			'query_var'            => true,
			'rewrite'              => array( 'slug' => 'ca-portfolio-gallery' ),
			'capability_type'      => 'post',
			'has_archive'          => true,
			'hierarchical'         => true,
			'menu_position'        => 20,
			'supports'             => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
			'show_in_rest'         => true,
			'menu_icon'            => 'dashicons-portfolio',
			'register_meta_box_cb' => 'add_ca_portfolio_gallery_meta_boxes',
		);
		register_post_type( 'ca_portfolio_gallery', $args );
	}

	add_action( 'init', 'ca_cpt_portfolio_gallery_init' );

}

if ( ! function_exists( 'ca_portfolio_gallery_taxonomy' ) ) :
	/**
	 * Registering Portfolio Gallery taxonomy 'ca_portfolio_gallery_category'.
	 *
	 * @return void
	 */
	function ca_portfolio_gallery_taxonomy() {
		$labels = array(
			'name'              => __( 'Categories', 'cozy-addons' ),
			'singular_name'     => __( 'Category', 'cozy-addons' ),
			'search_items'      => __( 'Search Categories', 'cozy-addons' ),
			'all_items'         => __( 'All Categories', 'cozy-addons' ),
			'parent_item'       => __( 'Parent Category', 'cozy-addons' ),
			'parent_item_colon' => __( 'Parent Category:', 'cozy-addons' ),
			'edit_item'         => __( 'Edit Category', 'cozy-addons' ),
			'update_item'       => __( 'Update Category', 'cozy-addons' ),
			'add_new_item'      => __( 'Add New Category', 'cozy-addons' ),
			'new_item_name'     => __( 'New Category', 'cozy-addons' ),
			'menu_name'         => __( 'Portfolio Gallery Categories', 'cozy-addons' ),
		);

		register_taxonomy(
			'ca_portfolio_gallery_category',
			array( 'ca_portfolio_gallery' ),
			array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'ca-portfolio-gallery-category' ),
				'show_in_rest'      => true,
			)
		);
	}
	add_action( 'init', 'ca_portfolio_gallery_taxonomy' );
endif;

if ( ! function_exists( 'register_ca_portfolio_gallery_custom_fields' ) ) {
	/**
	 * Register custom post meta in the Portfolio Gallery template.
	 *
	 * @return void
	 */
	function register_ca_portfolio_gallery_custom_fields() {
		register_meta(
			'post',
			'ca_portfolio_gallery_project_year',
			array(
				'type'         => 'string',
				'description'  => __( 'Project Year', 'cozy-addons' ),
				'single'       => true,
				'show_in_rest' => true,
			)
		);

		register_meta(
			'post',
			'ca_portfolio_gallery_client',
			array(
				'type'         => 'string',
				'description'  => __( 'End Date', 'cozy-addons' ),
				'single'       => true,
				'show_in_rest' => true,
			)
		);

		register_meta(
			'post',
			'ca_portfolio_gallery_skills',
			array(
				'type'         => 'string',
				'description'  => __( 'Skills/Tech', 'cozy-addons' ),
				'single'       => true,
				'show_in_rest' => true,
			)
		);

		register_meta(
			'post',
			'ca_portfolio_gallery_url',
			array(
				'type'         => 'string',
				'description'  => __( 'Website URL', 'cozy-addons' ),
				'single'       => true,
				'show_in_rest' => true,
			)
		);

		register_meta(
			'post',
			'ca_portfolio_gallery_images',
			array(
				'type'         => 'string',
				'description'  => __( 'Photo Gallery', 'cozy-addons' ),
				'single'       => true,
				'show_in_rest' => true,
			)
		);
	}
	add_action( 'init', 'register_ca_portfolio_gallery_custom_fields' );
}

if ( ! function_exists( 'add_ca_portfolio_gallery_meta_boxes' ) ) {
	/**
	 * Adding meta box for custom meta fields for Portfolio Gallery.
	 *
	 * @return void
	 */
	function add_ca_portfolio_gallery_meta_boxes() {
		add_meta_box(
			'ca_portfolio_gallery_custom_fields',
			__( 'Portfolio Fields', 'cozy-addons' ),
			'ca_portfolio_gallery_fields_callback',
			'ca_portfolio_gallery',
			'side',
			'high'
		);
	}
}

if ( ! function_exists( 'ca_portfolio_gallery_fields_callback' ) ) {
	/**
	 * Callback function to add input fields for Portfolio Gallery meta field.
	 *
	 * @param object $post WP Post object for Portfolio Gallery template.
	 *
	 * @return void
	 */
	function ca_portfolio_gallery_fields_callback( $post ) {
		$ca_portfolio_gallery_project_year = get_post_meta( $post->ID, 'ca_portfolio_gallery_project_year', true );
		$ca_portfolio_gallery_client       = get_post_meta( $post->ID, 'ca_portfolio_gallery_client', true );
		$ca_portfolio_gallery_skills       = get_post_meta( $post->ID, 'ca_portfolio_gallery_skills', true );
		$ca_portfolio_gallery_url          = get_post_meta( $post->ID, 'ca_portfolio_gallery_url', true );

		$current_year = gmdate( 'Y' );
		?>
		<label class="components-base-control__label" for="ca_portfolio_gallery_project_year"><?php echo esc_html__( 'Field 1', 'cozy-addons' ); ?></label>
		<?php wp_nonce_field( -1, 'ca_portfolio_project_year' ); ?>
		<input class="components-text-control__input" type="number" placeholder="<?php esc_html_e( 'Project Year', 'cozy-addons' ); ?>" min="1900" max="<?php echo esc_html( $current_year ); ?>" id="ca_portfolio_gallery_project_year" name="ca_portfolio_gallery_project_year" value="<?php echo esc_attr( $ca_portfolio_gallery_project_year ); ?>" /><br><br>
		
		<label class="components-base-control__label" for="ca_portfolio_gallery_client"><?php echo esc_html__( 'Field 2', 'cozy-addons' ); ?></label><br/>
		<?php wp_nonce_field( -1, 'ca_portfolio_client' ); ?>
		<input class="components-text-control__input" type="string" id="ca_portfolio_gallery_client" placeholder="<?php esc_html_e( 'Client', 'cozy-addons' ); ?>" name="ca_portfolio_gallery_client" value="<?php echo esc_attr( $ca_portfolio_gallery_client ); ?>" /><br><br>

		<label class="components-base-control__label" for="ca_portfolio_gallery_skills"><?php echo esc_html__( 'Field 3', 'cozy-addons' ); ?></label>
		<?php wp_nonce_field( -1, 'ca_portfolio_skills' ); ?>
		<input class="components-text-control__input" type="string" id="ca_portfolio_gallery_skills" placeholder="<?php esc_html_e( 'Skills/Tech', 'cozy-addons' ); ?>" name="ca_portfolio_gallery_skills" value="<?php echo esc_attr( $ca_portfolio_gallery_skills ); ?>" /><br><br>

		<label class="components-base-control__label" for="ca_portfolio_gallery_url"><?php echo esc_html__( 'External URL', 'cozy-addons' ); ?></label>
		<?php wp_nonce_field( -1, 'ca_portfolio_url' ); ?>
		<input class="components-text-control__input" type="url" id="ca_portfolio_gallery_url" placeholder="<?php esc_html_e( 'https://', 'cozy-addons' ); ?>" name="ca_portfolio_gallery_url" value="<?php echo esc_attr( $ca_portfolio_gallery_url ); ?>" /><br><br>

		<!-- <label class="components-base-control__label" for="ca_portfolio_gallery_url"><?php echo esc_html__( 'Add More Images', 'cozy-addons' ); ?></label>
		<input type="file" multiple="" /> -->
		<?php
	}
}


if ( ! function_exists( 'ca_portfolio_gallery_save_custom_meta' ) ) {
	/**
	 * Autosave empty string meta fields are not set.
	 *
	 * @param integer $post_id Template post ID.
	 *
	 * @return void
	 */
	function ca_portfolio_gallery_save_custom_meta( $post_id ) {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if ( ! current_user_can( 'manage_options', $post_id ) ) {
			return;
		}

		if ( isset( $_POST['ca_portfolio_gallery_project_year'] ) ) {
			$year_nonce = isset( $_POST['ca_portfolio_project_year'] ) ? sanitize_key( wp_unslash( $_POST['ca_portfolio_project_year'] ) ) : '';
			if ( ! empty( $year_nonce ) && wp_verify_nonce( $year_nonce ) ) {
				update_post_meta( $post_id, 'ca_portfolio_gallery_project_year', sanitize_text_field( wp_unslash( $_POST['ca_portfolio_gallery_project_year'] ) ) );
			}
		}

		if ( isset( $_POST['ca_portfolio_gallery_client'] ) ) {
			$client_nonce = isset( $_POST['ca_portfolio_client'] ) ? sanitize_key( wp_unslash( $_POST['ca_portfolio_client'] ) ) : '';
			if ( ! empty( $client_nonce ) && wp_verify_nonce( $client_nonce ) ) {
				update_post_meta( $post_id, 'ca_portfolio_gallery_client', sanitize_text_field( wp_unslash( $_POST['ca_portfolio_gallery_client'] ) ) );
			}
		}

		if ( isset( $_POST['ca_portfolio_gallery_skills'] ) ) {
			$skills_nonce = isset( $_POST['ca_portfolio_skills'] ) ? sanitize_key( wp_unslash( $_POST['ca_portfolio_skills'] ) ) : '';
			if ( ! empty( $skills_nonce ) && wp_verify_nonce( $skills_nonce ) ) {
				update_post_meta( $post_id, 'ca_portfolio_gallery_skills', sanitize_text_field( wp_unslash( $_POST['ca_portfolio_gallery_skills'] ) ) );
			}
		}

		if ( isset( $_POST['ca_portfolio_gallery_url'] ) ) {
			$url_nonce = isset( $_POST['ca_portfolio_url'] ) ? sanitize_key( wp_unslash( $_POST['ca_portfolio_url'] ) ) : '';
			if ( ! empty( $url_nonce ) && wp_verify_nonce( $url_nonce ) ) {
				update_post_meta( $post_id, 'ca_portfolio_gallery_url', sanitize_url( wp_unslash( $_POST['ca_portfolio_gallery_url'] ) ) );
			}
		}
	}

	add_action( 'save_post', 'ca_portfolio_gallery_save_custom_meta' );

}

if ( ! function_exists( 'ca_portfolio_gallery_post_type_columns' ) ) {
	/**
	 * Register meta columns.
	 *
	 * @param string $columns The custom column meta field.
	 *
	 * @return array $columns Merged default columns array with meta fields.
	 */
	function ca_portfolio_gallery_post_type_columns( $columns ) {
		$columns['ca_portfolio_gallery_project_year'] = 'Project Year';
		$columns['ca_portfolio_gallery_client']       = 'Client';
		$columns['ca_portfolio_gallery_skills']       = 'Skills/Tech';
		$columns['ca_portfolio_gallery_url']          = 'URL';
		return $columns;
	}
	add_filter( 'manage_ca_portfolio_gallery_posts_columns', 'ca_portfolio_gallery_post_type_columns' );
}

if ( ! function_exists( 'ca_portfolio_gallery_cpt_column_content' ) ) {
	/**
	 * Displays the custom post meta in the Portfolio Gallery Template table
	 *
	 * @param string  $column_name The custom column meta field.
	 *
	 * @param integer $post_id Template post ID.
	 *
	 * @return void
	 */
	function ca_portfolio_gallery_cpt_column_content( $column_name, $post_id ) {
		if ( 'ca_portfolio_gallery_project_year' === $column_name ) {
			$ca_portfolio_gallery_project_year = get_post_meta( $post_id, 'ca_portfolio_gallery_project_year', true );
			echo '' !== $ca_portfolio_gallery_project_year ? wp_kses_post( $ca_portfolio_gallery_project_year ) : 'N/A';
		}
		if ( 'ca_portfolio_gallery_client' === $column_name ) {
			$ca_portfolio_gallery_client = get_post_meta( $post_id, 'ca_portfolio_gallery_client', true );
			echo '' !== $ca_portfolio_gallery_client ? wp_kses_post( $ca_portfolio_gallery_client ) : 'N/A';
		}
		if ( 'ca_portfolio_gallery_skills' === $column_name ) {
			$ca_portfolio_gallery_skills = get_post_meta( $post_id, 'ca_portfolio_gallery_skills', true );
			echo '' !== $ca_portfolio_gallery_skills ? wp_kses_post( $ca_portfolio_gallery_skills ) : 'N/A';
		}
		if ( 'ca_portfolio_gallery_url' === $column_name ) {
			$ca_portfolio_gallery_url = get_post_meta( $post_id, 'ca_portfolio_gallery_url', true );
			echo '' !== $ca_portfolio_gallery_url ? wp_kses_post( $ca_portfolio_gallery_url ) : 'N/A';
		}
	}
	add_action( 'manage_ca_portfolio_gallery_posts_custom_column', 'ca_portfolio_gallery_cpt_column_content', 10, 2 );
}