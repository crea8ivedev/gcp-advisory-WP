<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (!file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

try {
    \Roots\bootloader();
} catch (Throwable $e) {
    wp_die(__('You need to install Acorn to use this theme.', 'sage'), '', [
        'link_url' => 'https://docs.roots.io/acorn/2.x/installation/',
        'link_text' => __('Acorn Docs: Installation', 'sage'),
    ]);
}

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])->each(function ($file) {
    if (!locate_template($file = "app/{$file}.php", true, true)) {
        wp_die(
            /* translators: %s is replaced with the relative file path */
            sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file),
        );
    }
});

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support('sage');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => __('Theme Options', 'sage'),
        'capability' => 'manage_options',
        'position' => '81',
    ]);
}

add_action('wp_enqueue_scripts', function () {
    // Enqueue JS files
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', [], null, true);
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js', [], null, true);
    wp_enqueue_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js', [], null, true);
    // Enqueue CSS files
});

/*** Admin Login ***/
function login_logo()
{
    echo '<style type="text/css">
        #login { padding: 10% 0 0; position: relative; z-index: 9;}
        body{background-image: url(' .
        get_bloginfo('template_directory') .
        '/resources/images/login-img.jpg) !important;background-size: cover !important; position: relative; background-position: 45%; background-repeat: no-repeat; }
        body::before { content: ""; position: absolute; left: 0; top: 0; width: 100%; height: 100%;background: rgb(222 222 222 / 80%); opacity: 0.8; }
        p a{color:#1A4D2E;}
        .privacy-policy-page-link a{color:#1A4D2E;}
        h1 a{background-image: url(' .
        get_bloginfo('template_directory') .
        '/resources/images/logo.svg) !important;background-size: 95% !important; width:80% !important;margin: 0 auto !important; box-shadow: none !important; height: 140px !important; margin: 20px auto !important; box-shadow: none !important;height: 98px !important; background-size: contain !important;}
        #nav a{color:#3c434a !important;}
        #backtoblog a{color:#3c434a !important;}
        .wp-core-ui .button-primary {
            background: #1A4D2E;
            border-color: #1A4D2E;
            color: #ffffff;
            text-decoration: none;
            text-shadow: none;
        }.wp-core-ui .button-secondary {
            color: #ffffff;}
        .wp-core-ui .button-primary:hover {
            background: #4E6F52;
            border-color: #4E6F52;
            color: #fff;
        }input[type=password]:focus,input[type=text]:focus,input[type=checkbox]:focus{border-color: #1A4D2E;
            box-shadow: 0 0 0 1px #1A4D2E;
            outline: 2px solid transparent;}
            .login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
    color: #1A4D2E !important;
}
        </style>';
}
add_action('login_head', 'login_logo');

function my_login_logo_url()
{
    return esc_url(home_url('/'));
}
add_filter('login_headerurl', 'my_login_logo_url');

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point($path)
{
    $path = get_template_directory() . '/resources/acf-json';

    // Check if the directory exists, if not, create it
    if (!file_exists($path)) {
        mkdir($path, 0755, true);
    }

    return $path;
}

// Custom post type "Peoples"
add_action('init', 'register_cpt_peoples');

function register_cpt_peoples()
{
    // Register the custom post type "Peoples"
    register_post_type('peoples', [
        'labels' => [
            'name' => _x('Peoples', 'peoples'),
            'singular_name' => _x('People', 'peoples'),
            'add_new' => _x('Add New', 'peoples'),
            'add_new_item' => _x('Add New People', 'peoples'),
            'edit_item' => _x('Edit People', 'peoples'),
            'new_item' => _x('New People', 'peoples'),
            'view_item' => _x('View People', 'peoples'),
            'search_items' => _x('Search Peoples', 'peoples'),
            'not_found' => _x('No People items found', 'peoples'),
            'not_found_in_trash' => _x('No People items found in Trash', 'peoples'),
            'parent_item_colon' => _x('Parent People:', 'peoples'),
            'menu_name' => _x('Peoples', 'peoples'),
        ],
        'hierarchical' => false,
        'description' => 'Post type for managing peoples.',
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'revisions'],
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-admin-users', // Icon for the "Peoples" post type
        'menu_position' => 7,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'capability_type' => 'post',
        'rewrite' => ['slug' => 'peoples', 'with_front' => true],
        'show_in_rest' => true,
    ]);
}

// Custom post type "Career"
add_action('init', 'register_cpt_career');
function register_cpt_career()
{
    // Register the custom post type "Career"
    register_post_type('career', [
        'labels' => [
            'name' => _x('Careers', 'career'),
            'singular_name' => _x('Career', 'career'),
            'add_new' => _x('Add New', 'career'),
            'add_new_item' => _x('Add New Career', 'career'),
            'edit_item' => _x('Edit Career', 'career'),
            'new_item' => _x('New Career', 'career'),
            'view_item' => _x('View Career', 'career'),
            'search_items' => _x('Search Careers', 'career'),
            'not_found' => _x('No Career items found', 'career'),
            'not_found_in_trash' => _x('No Career items found in Trash', 'career'),
            'parent_item_colon' => _x('Parent Career:', 'career'),
            'menu_name' => _x('Careers', 'career'),
        ],
        'hierarchical' => false,
        'description' => 'Post type for managing career opportunities.',
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'revisions'],
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-businessman', // Icon for the "Career" post type
        'menu_position' => 8,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'capability_type' => 'post',
        'rewrite' => ['slug' => 'career', 'with_front' => true],
        'show_in_rest' => true,
    ]);
}

// Custom post type "Service"
add_action('init', 'register_cpt_service');

function register_cpt_service()
{
    // Register the custom post type "Service"
    register_post_type('service', [
        'labels' => [
            'name' => _x('Services', 'service'),
            'singular_name' => _x('Service', 'service'),
            'add_new' => _x('Add New', 'service'),
            'add_new_item' => _x('Add New Service', 'service'),
            'edit_item' => _x('Edit Service', 'service'),
            'new_item' => _x('New Service', 'service'),
            'view_item' => _x('View Service', 'service'),
            'search_items' => _x('Search Services', 'service'),
            'not_found' => _x('No Service items found', 'service'),
            'not_found_in_trash' => _x('No Service items found in Trash', 'service'),
            'parent_item_colon' => _x('Parent Service:', 'service'),
            'menu_name' => _x('Services', 'service'),
        ],
        'hierarchical' => false,
        'description' => 'Post type for managing services.',
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'revisions'],
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-admin-tools', // Icon for the "Service" post type
        'menu_position' => 9,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'capability_type' => 'post',
        'rewrite' => ['slug' => 'service', 'with_front' => true],
        'show_in_rest' => true,
    ]);
}

// Custom post type "Industry"
add_action('init', 'register_cpt_industry');

function register_cpt_industry()
{
    // Register the custom post type "Industry"
    register_post_type('industry', [
        'labels' => [
            'name' => _x('Industries', 'industry'),
            'singular_name' => _x('Industry', 'industry'),
            'add_new' => _x('Add New', 'industry'),
            'add_new_item' => _x('Add New Industry', 'industry'),
            'edit_item' => _x('Edit Industry', 'industry'),
            'new_item' => _x('New Industry', 'industry'),
            'view_item' => _x('View Industry', 'industry'),
            'search_items' => _x('Search Industries', 'industry'),
            'not_found' => _x('No Industry items found', 'industry'),
            'not_found_in_trash' => _x('No Industry items found in Trash', 'industry'),
            'parent_item_colon' => _x('Parent Industry:', 'industry'),
            'menu_name' => _x('Industries', 'industry'),
        ],
        'hierarchical' => false,
        'description' => 'Post type for managing industries.',
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'revisions'],
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-building', // Icon for the "Industry" post type
        'menu_position' => 10,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'capability_type' => 'post',
        'rewrite' => ['slug' => 'industry', 'with_front' => true],
        'show_in_rest' => true,
    ]);
}
