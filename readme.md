# Custom Post Register

WordPress Core provides five post types by default: Post, Page, Attachment, Revision and Menu. Although, while working on a project, we may need to create our specific content types, and that can be easily done with a few lines of code and is the purpose of this plugin, using the [**register_post_type()**](https://developer.wordpress.org/reference/functions/register_post_type/) function.

# Usage

For using this plugin, just clone this repository to your machine and paste it inside your WordPress plugins folder.
Then go to the main file **custom-posts-register.php** and replace the value of the variable below with your desired custom post type name. 

```
    $cpt_name = 'Cpt';
```

You can also set a custom icon to be displayed on your WordPress admin panel, replace the value of the variable **cpt_icon** for one of the [WordPress Dashicons](https://developer.wordpress.org/resource/dashicons/) you prefer.

```
    $cpt_icon = 'dashicons-media-code';
```

# Licensing

The code in this project is licensed under GPL v2 or later.

[def]: https://developer.wordpress.org/resource/dashicons/