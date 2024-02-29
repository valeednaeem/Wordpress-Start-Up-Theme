<?php

    include("includes/index.php");

    //add_theme_support('admin-bar');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('custom-logo');
    add_theme_support('featured-content');
    add_theme_support('get_avatar');
    //add_theme_support('html5');
    add_theme_support('menus');
    //add_theme_support('post-formats');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
    add_theme_support('wp_list_comments');

    add_post_type_support('page','excerpt');

    // Custom Post Type - Books

    function custom_post_type_registration() {
        $labels = array(
            'name'               => _x( 'Books', 'post type general name', 'wall-v-hosting-theme' ),
            'singular_name'      => _x( 'Book', 'post type singular name', 'wall-v-hosting-theme' ),
            'menu_name'          => _x( 'Books', 'admin menu', 'wall-v-hosting-theme' ),
            'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'wall-v-hosting-theme' ),
            'add_new'            => _x( 'Add New', 'book', 'wall-v-hosting-theme' ),
            'add_new_item'       => __( 'Add New Book', 'wall-v-hosting-theme' ),
            'new_item'           => __( 'New Book', 'wall-v-hosting-theme' ),
            'edit_item'          => __( 'Edit Book', 'wall-v-hosting-theme' ),
            'view_item'          => __( 'View Book', 'wall-v-hosting-theme' ),
            'all_items'          => __( 'All Books', 'wall-v-hosting-theme' ),
            'search_items'       => __( 'Search Books', 'wall-v-hosting-theme' ),
            'parent_item_colon'  => __( 'Parent Books:', 'wall-v-hosting-theme' ),
            'not_found'          => __( 'No books found.', 'wall-v-hosting-theme' ),
            'not_found_in_trash' => __( 'No books found in Trash.', 'wall-v-hosting-theme' ),
        );

        $args = array(
            'labels'             => $labels,
            'description'        => __( 'Description of your custom post type', 'wall-v-hosting-theme' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'books' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'taxonomies'         => array( 'category', 'post_tag' ),
            'menu_icon'          => 'dashicons-book',
            'exclude_from_search'=> false,
            'publicly_queryable' => true,
            'capability_type'    => 'page',
            'show_in_nav_menus'  => true,
            'show_in_rest'       => true,
            'rest_base'          => 'books-api',
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'page-attributes', 'post-formats', 'revisions', 'trackbacks' ),
        );

        register_post_type( 'book', $args );

    }

    add_action( 'init', 'custom_post_type_registration' );

    register_nav_menus( 
        array(
            'main-menu'                 => 'Main Menu',
            'footer-menu'               => 'Footer Menu',
            'sidebar-menu'              => 'Sidebar Menu',
            'product-categories-menu'   => 'Product Categories'
        )
    );

    function add_custom_menu_classes($classes, $item, $args) {
        // Check if it's the menu you want to target
        if ($args->theme_location == 'main-menu') {
            // Add your custom class to the array
            $classes[] = 'main-menu-item';
        } elseif ($args->theme_location == 'footer-menu') {
            $classes[] = 'footer-menu-item';
        } elseif ($args->theme_location == 'sidebar-menu') {
            $classes[] = 'sidebar-menu-item';
        } elseif ($args->theme_location == 'product-categories-menu') {
            $classes[] = 'product-categories-menu-item';
        }

        return $classes;
    }

    add_filter('nav_menu_css_class', 'add_custom_menu_classes', 10, 3);

    function custom_sidebars()
    {
        if(function_exists('register_sidebar'))
        {

            // Register Sidebar on the Left Sidebar
            register_sidebar(
                array(
                    'name'            => 'Left Sidebar Widget Area',
                    'id'              => 'leftsidebar',
                    'before_widget'   => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'    => '</div>',
                    'before_title'    => '<h3>',
                    'after_title'     => '</h3>'
                )
            );

            // Register Sidebar on the Right Sidebar
            register_sidebar(
                array(
                    'name'            => 'Right Sidebar Widget Area',
                    'id'              => 'rightsidebar',
                    'before_widget'   => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'    => '</div>',
                    'before_title'    => '<h3>',
                    'after_title'     => '</h3>'

                )
            );

            // Register Sidebar 1 on the Footer
            register_sidebar(
                array(
                    'name'            => 'Footer 1 Sidebar Widget Area',
                    'id'              => 'footer1sidebar',
                    'before_widget'   => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'    => '</div>',
                    'before_title'    => '<h3>',
                    'after_title'     => '</h3>'

                )
            );

            // Register Sidebar 2 on the Footer
            register_sidebar(
                array(
                    'name'            => 'Footer 2 Sidebar Widget Area',
                    'id'              => 'footer2sidebar',
                    'before_widget'   => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'    => '</div>',
                    'before_title'    => '<h3>',
                    'after_title'     => '</h3>'

                )
            );

            // Register Sidebar 3 on the Footer
            register_sidebar(
                array(
                    'name'            => 'Footer 3 Sidebar Widget Area',
                    'id'              => 'footer3sidebar',
                    'before_widget'   => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'    => '</div>',
                    'before_title'    => '<h3>',
                    'after_title'     => '</h3>'

                )
            );

            // Register Sidebar 4 on the Footer
            register_sidebar(
                array(
                    'name'            => 'Footer 4 Sidebar Widget Area',
                    'id'              => 'footer4sidebar',
                    'before_widget'   => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'    => '</div>',
                    'before_title'    => '<h3>',
                    'after_title'     => '</h3>'

                )
            );

            // Register Sidebar 5 on the Footer
            register_sidebar(
                array(
                    'name'            => 'Footer 5 Sidebar Widget Area',
                    'id'              => 'footer5sidebar',
                    'before_widget'   => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'    => '</div>',
                    'before_title'    => '<h3>',
                    'after_title'     => '</h3>'

                )
            );
        }
    }

    add_action("widgets_init", "custom_sidebars");

    function start_up_enqueue_scripts() {
        //filemtime(get_template_directory()."style.css")
        wp_enqueue_style( "bootstrap-icons", get_template_directory()."assets/bootstrap-icons.css", "", null, "all" );
        wp_enqueue_style( "bootstrap-css", get_template_directory()."assets/bootstrap.min.css", "", null, "all" );
        wp_enqueue_style( "start-up-css", get_stylesheet_uri(), "", null, "all" );
        //filemtime(get_template_directory()."script.js")
        wp_enqueue_script( "start-up-jscript", get_template_directory_uri()."/js/scripts.js", ['jquery'], '', true );
        wp_enqueue_script( "bootstrap-js", get_template_directory_uri()."/assets/bootstrap.bundle.min.js", ['jquery'], '', true );
    }

    add_action("wp_enqueue_scripts", "start_up_enqueue_scripts");

    function init_hooks() {
        // Adding actions when activating theme

    }

    add_action("init", "init_hooks");

    if ( ! isset( $content_width ) ) $content_width = 900;

?>