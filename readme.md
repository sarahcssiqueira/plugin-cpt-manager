# WordPress Posts Types

By default, WordPress comes with five post types: 
- Post;
- Page;
- Attachment;
- Revision;
- Menu.

While working in a project built with WordPress, we may need to create our own specific content type, like for example  movies, books, series, pets, kinds of flowers (if it's a project for flower shop ecommerce or whatever).

## WordPress Custom Posts Types

Here is the magic of custom post types in Wordpress, the type of 'posts' can be anything we want, limit is our imagination. We just need to create custom post types. That can be easily done with few lines of code of plugins


## Registering a new custom post types

There are amazing plugins available on the plugins repositor that can help us with that, but, we also can do it with a few lines of code. Once a custom post type is registered, it gets a new top-level administrative screen that can be used to manage and create posts of that type.

To register a new post type, we should use the [**register_post_type()**](https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/) function.

### Where the code goes?

Important: We also can add the code on 'functions.php' file at our WordPress installation theme folder. But, unless we are using a child theme, the functions.php will override when we run some update of WordPress Core Files, so, the best practice, in this case (no child theme) is to create a plugin to register the custom post type we need for the project.


For using this plugin, just clone this repo to your machine, then paste inside your WordPress plugins folder. This readme.md is not necessary at all, so you can delete it.

The php file is commented, for you easily replace the custom post type name for wherever you want.