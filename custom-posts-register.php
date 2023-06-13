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

/**
 * Exit if accessed directly 
 **/
if(! defined('ABSPATH') ) { exit;
}

new CustomPostsRegister(); // Initialize

class CustomPostsRegister
{

    function __construct()
    {    
        add_action('init', array($this, 'register_cpt'));
    }

    function register_cpt()
    {
        $cpt_name = 'Cpt';
        $cpt_icon = 'dashicons-pressthis';

        register_post_type(
            '$cpt_name', array(
                'supports' => array(
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
                'labels' => array(
                    'name' => _x($cpt_name, 'plural'),
                    'singular_name' => _x($cpt_name, 'singular'),
                    'menu_name' => _x($cpt_name, 'admin menu'),
                    'name_admin_bar' => _x($cpt_name, 'admin bar'),
                    'add_new' => _x('Add' . ' ' . $cpt_name, 'add new' . $cpt_name),
                    'add_new_item' => __('Add New' . ' ' . $cpt_name),
                    'new_item' => __('New' . ' ' . $cpt_name, 'New' . ' ' . $cpt_name),
                    'edit_item' => __('Edit' . ' ' . $cpt_name),
                    'view_item' => __('View' . ' ' . $cpt_name),
                    'all_items' => __('All' . ' ' . $cpt_name),
                    'search_items' => __('Search' . $cpt_name),
                    'not_found' => __('No' . ' ' .$cpt_name . ' found'),
                ),
                'public' => true,
                'query_var' => true,
                'rewrite' => array('slug' => $cpt_name),
                'has_archive' => true,
                'hierarchical' => false,
                'menu_icon' => $cpt_icon,
                )
        );
    }

}