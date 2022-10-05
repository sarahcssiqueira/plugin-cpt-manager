<?php
/*
* Plugin Name: Custom Post Register
* Description: Register custom posts types
* Author: Sarah Siqueira
*
*
* INSTRUCTIONS:
* This plugin for you easily replace the custom post type name for wherever you want. 
* You should replace all the worlds "pet/pets" for the new post type name.
*
*
*/


/* Custom Post Type Start */


    function new_posttype_pet() {

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
        

        //Defining Labels for Custom Post Type

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


        // Defining Arguments for Custom Post Type
        
        $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'pets'),
        'has_archive' => true,
        'hierarchical' => false,
        );

        /*  More information about this function on 
        * 'https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/'

        */

        register_post_type('pets', $args);
        }


        add_action('init', 'new_posttype_pet');

        /*Custom Post type end*/
