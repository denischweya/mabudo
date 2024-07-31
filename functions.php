<?php

/**
 * Theme setup.
 */
function tailpress_setup()
{
    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'tailpress'),
            'footer' => __('Footer Menu', 'tailpress'),
            'language-switcher' => __('Language Switcher', 'tailpress'),
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');

    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'tailpress_setup');

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts()
{
    $theme = wp_get_theme();

    wp_enqueue_style('tailpress', tailpress_asset('css/app.css'), array(), $theme->get('Version'));

    wp_enqueue_script('gsap', tailpress_asset('resources/js/gsap.js'), array(), $theme->get('Version'));
    wp_enqueue_script('scrolltrigger', tailpress_asset('resources/js/scrolltrigger.js'), array('jquery'), $theme->get('Version'));

    wp_enqueue_script('tailpress', tailpress_asset('js/app.js'), array('jquery','gsap','scrolltrigger'), $theme->get('Version'));

}

add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset($path)
{
    if (wp_get_environment_type() === 'production') {
        return get_stylesheet_directory_uri() . '/' . $path;
    }

    return add_query_arg('time', time(), get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class($classes, $item, $args, $depth)
{
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }

    if (isset($args->{"li_class_$depth"})) {
        $classes[] = $args->{"li_class_$depth"};
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class($classes, $args, $depth)
{
    if (isset($args->submenu_class)) {
        $classes[] = $args->submenu_class;
    }

    if (isset($args->{"submenu_class_$depth"})) {
        $classes[] = $args->{"submenu_class_$depth"};
    }

    return $classes;
}

add_filter('nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3);
// Allow SVG
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

    global $wp_version;
    if ($wp_version !== '4.7.1') {
        return $data;
    }

    $filetype = wp_check_filetype($filename, $mimes);

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];

}, 10, 4);

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action('admin_head', 'fix_svg');

add_action('acf/init', 'register_hero_block');
function register_hero_block()
{
    if(function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'Hero',
            'title'             => __('hero'),
            'description'       => __('A custom homepage hero block.'),
            'render_template'   => 'template-parts/blocks/hero/hero.php',
            'category'          => 'common',
            'icon'              => 'admin-home',
            'keywords'          => array( 'home', 'text' ),
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/hero/hero.css',
        ));
    }
    // Register the parent block
    acf_register_block_type(array(
      'name'              => 'slider',
      'title'             => __('Slider'),
      'description'       => __('A custom vertical slider.'),
      'render_template'   => 'template-parts/blocks/sldier/slider.php',
    //   'enqueue_assets'    => function () {
    //       wp_enqueue_script('acf-block-innerblocks', get_template_directory_uri() . '/template-parts/blocks/parent-block/innerblocks.js', array('wp-blocks', 'wp-editor'), '1.0.0', true);
    //   },
      'category'          => 'common',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'slider', 'vertical slider' ),
      'supports'          => array(
          'align' => false,
      ),
    ));
}

function mytheme_register_footer_widgets()
{
    // contact widget area
    register_sidebar(array(
        'name'          => __('Footer Contact', 'mytheme'),
        'id'            => 'contact-widget',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    // First Footer Widget Area
    register_sidebar(array(
        'name'          => __('Footer Widget Area 1', 'mytheme'),
        'id'            => 'footer-widget-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // Second Footer Widget Area
    register_sidebar(array(
        'name'          => __('Footer Widget Area 2', 'mytheme'),
        'id'            => 'footer-widget-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // Third Footer Widget Area
    register_sidebar(array(
        'name'          => __('Footer Widget Area 3', 'mytheme'),
        'id'            => 'footer-widget-3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    // 4th Footer Widget Area
    register_sidebar(array(
        'name'          => __('Footer Widget Area 4', 'mytheme'),
        'id'            => 'footer-widget-4',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // 5th Footer Widget Area
    register_sidebar(array(
        'name'          => __('Footer Widget Area 5', 'mytheme'),
        'id'            => 'footer-widget-5',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'mytheme_register_footer_widgets');

function enqueue_montserrat_font()
{
    wp_enqueue_style('montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'enqueue_montserrat_font');

function load_dashicons()
{
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'load_dashicons');
