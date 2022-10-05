<?php
/*
* Plugin Name: Custom Post Register
* Description: Function is register custom posts types for your project
* Author: Sarah Siqueira
*
*
* INSTRUCTIONS:
* This plugin can be used by you to easily create your custom post types. 
* All you need to do is to replace all the words "pet/pets" for the new post type name, 
* that fits better to your project.
* 
* IMPORTANT
* Post type name must not exceed 20 characters and may only contain lowercase alphanumeric characters, dashes, and underscores. 
*/


/* Custom Post Type Start */


    function new_posttype_pet() {

    // Core feature(s) the post type supports. Default is an array containing 'title' and 'editor'.

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
        

    //Array of labels for this post type.

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

        
        register_post_type('pets', $args);
        }


        add_action('init', 'new_posttype_pet');



      //  More information about this function on official documentation: 
      // 'https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/' */