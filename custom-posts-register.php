<?php
/*
* Plugin Name: Pet Register
* Description: Register custom post type to store pets data.
* Author: Sarah Siqueira
*
*/
 
// require_once plugin_dir_path(__FILE__) . 'includes/cpr-functions.php' ;


/* Custom Post Type Start */


    function new_posttype() {

        $supports = array(
        'title',
        'editor',
        'author', 
        'thumbnail', 
        'excerpt', 
        'custom-fields', // support custom fields
        'comments', 
        'revisions', 
        'post-formats', 
        );
        

        //Defining the Labels for Your Custom Post Type

        $labels = array(
        'name' => _x('pets', 'plural'),
        'singular_name' => _x('pet', 'singular'),
        'menu_name' => _x('Pets', 'admin menu'),
        'name_admin_bar' => _x('Pet', 'admin bar'),
        'add_new' => _x('Add Pet', 'add new pet'),
        'add_new_item' => __('Add New Pet'),
        'new_item' => __('New pet', 'New Pet'),
        'edit_item' => __('Edit pet'),
        'view_item' => __('View pet'),
        'all_items' => __('All pets'),
        'search_items' => __('Search pets'),
        'not_found' => __('No pets found.'),
        );


        //Defining the Arguments for Your Custom Post Type
        
        $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'pets'),
        'has_archive' => true,
        'hierarchical' => false,
        );

        register_post_type('pets', $args);
        }

    // Hooking up our function

        add_action('init', 'new_posttype');

    /*Custom Post type end*/


    /* For new posts, repeat and replace "pet/pets" for the new post type name.

/*
        function new_pettype() {
            $labels = array(
              'name'              => _x( 'Product Categories', 'taxonomy general name' ),
              'singular_name'     => _x( 'Product Category', 'taxonomy singular name' ),
              'search_items'      => __( 'Search Product Categories' ),
              'all_items'         => __( 'All Product Categories' ),
              'parent_item'       => __( 'Parent Product Category' ),
              'parent_item_colon' => __( 'Parent Product Category:' ),
              'edit_item'         => __( 'Edit Product Category' ), 
              'update_item'       => __( 'Update Product Category' ),
              'add_new_item'      => __( 'Add New Product Category' ),
              'new_item_name'     => __( 'New Product Category' ),
              'menu_name'         => __( 'Product Categories' ),
            );
            $args = array(
              'labels' => $labels,
              'hierarchical' => true,
            );
            register_taxonomy( 'product_category', 'product', $args );
          }
          add_action( 'init', 'new_pettype', 0 );

          */