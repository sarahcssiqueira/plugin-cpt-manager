<?php
/**
 * Plugin Name:       Custom Post Register
 * Plugin URI:        https://sarahjobs.com/wordpress/plugins/cpt-register
 * Description:       Register custom posts types for your project
 * Version:           1.0.0
 * Requires at least: 5.4
 * Requires PHP:      7.4
 * Author:            Sarah Siqueira
 * Author URI:        https://sarahjobs.com/about
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl.html
 * Text Domain:       cpt-register
 * Domain Path:       /languages
 * Update URI:        https://sarahjobs.com/wordpress/plugins/cpt-register/update
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

new CustomPostsRegister();

class CustomPostsRegister {

	function __construct() {
		add_action( 'init', array( $this, 'register_cpt' ) );
	}

	function register_cpt() {

		register_post_type(
			'cptname',
			array(
				'supports'     => array(
					'title',
					'editor',
					'author',
					'thumbnail',
					'excerpt',
					'custom-fields',
					'comments',
					'revisions',
					'post-formats',
				),
				'labels'       => array(
					'name'           => _x( 'cptname', 'plural' ),
					'singular_name'  => _x( 'cptname', 'singular' ),
					'menu_name'      => _x( 'cptname', 'admin menu' ),
					'name_admin_bar' => _x( 'cptname', 'admin bar' ),
					'add_new'        => _x( 'Add cptname', 'add new cptname' ),
					'add_new_item'   => __( 'Add New cptname' ),
					'new_item'       => __( 'New cptname', 'New cptname' ),
					'edit_item'      => __( 'Edit cptname' ),
					'view_item'      => __( 'View cptname' ),
					'all_items'      => __( 'All cptname' ),
					'search_items'   => __( 'Search cptname' ),
					'not_found'      => __( 'No cptname found' ),
				),
				'public'       => true,
				'query_var'    => true,
				'rewrite'      => array(
					'slug' => 'cptname',
				),
				'has_archive'  => true,
				'hierarchical' => false,
				'menu_icon'    => 'dashicons-media-code',
			)
		);
	}

}
