<?php
/**
 * Plugin Name:       Custom Post Types Manager
 * Plugin URI:        https://sarahjobs.com/wordpress/plugins/cpt-manager
 * Description:       Manage custom posts types for your project
 * Version:           1.0.0
 * Requires at least: 5.4
 * Requires PHP:      7.4
 * Author:            Sarah Siqueira
 * Author URI:        https://sarahjobs.com/about
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl.html
 * Text Domain:       cpt-manager
 * Domain Path:       /languages
 * Update URI:        https://sarahjobs.com/wordpress/plugins/cpt-manager/update
 *
 * @package CustomPostTypesManager
 * @author sarahcssiqueira
 */

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

new CustomPostsManager();

/**
 * Main Class
 */
class CustomPostsManager {

	public $custom_post_types = [];

	/**
	 * Constructor for handle WordPress Hooks
	 */
	public function __construct() {

		add_action( 'init', [ $this, 'post_types_list' ] );
		add_action( 'init', [ $this, 'register_cpt' ] );
	}

	/**
	 * Store the custom post types inside an
	 * array
	 */
	public function post_types_list() {

		$this->custom_post_types = [
			[
				'name'      => 'projects',
				'singular'  => 'project',
				'label'     => 'My Projects',
				'menu_icon' => 'dashicons-media-document',
			],
			[
				'name'      => 'Ideas',
				'singular'  => 'ideas',
				'label'     => 'My Ideas',
				'menu_icon' => 'dashicons-art',
			],
		];

	}

	/**
	 * Register the post types
	 */
	public function register_cpt() {

		foreach ( $this->custom_post_types as $custom_post_type ) {

			register_post_type(
				$custom_post_type['name'],
				[
					'supports'     => [
						'title',
						'editor',
						'author',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'comments',
						'revisions',
						'post-formats',
					],
					'labels'       => [
						'name'           => _x( $custom_post_type['label'], 'plural' ),
						'singular_name'  => _x( $custom_post_type['singular'], 'singular' ),
						'menu_name'      => _x( $custom_post_type['label'], 'admin menu' ),
						'name_admin_bar' => _x( $custom_post_type['label'], 'admin bar' ),
						'add_new'        => _x( 'Add ' . $custom_post_type['singular'], 'add new project' ),
						'add_new_item'   => __( 'Add ' . $custom_post_type['singular'] ),
						'new_item'       => __( 'New ' . $custom_post_type['singular'], 'New project' ),
						'edit_item'      => __( 'Edit ' . $custom_post_type['singular'] ),
						'view_item'      => __( 'View ' . $custom_post_type['singular'] ),
						'all_items'      => __( 'All ' . $custom_post_type['name'] ),
						'search_items'   => __( 'Search ' . $custom_post_type['name'] ),
						'not_found'      => __( 'No ' . $custom_post_type['name'] . ' found' ),
					],
					'public'       => true,
					'show_in_rest' => true,
					'query_var'    => true,
					'rewrite'      => [
						'slug' => $custom_post_type['singular'],
					],
					'has_archive'  => true,
					'hierarchical' => false,
					'menu_icon'    => $custom_post_type['menu_icon'],
				]
			);
		}
	}

}
