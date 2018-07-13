<?php

define('ASSETS_DIR', get_template_directory_uri());
/*
 * Add woocommerce to theme
 */

function abitwo_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'abitwo_add_woocommerce_support');

/*
 * Setup theme
 */
if (!function_exists('abitwo_setup')) :

    function abitwo_setup()
    {

        add_theme_support('title-tag');

        /*
         * Load theme styles
         */
        wp_enqueue_style('bootstrap', ASSETS_DIR . '/assets/css/bootstrap.min.css', array(), '3.3.7', 'all');
        wp_enqueue_style('style', ASSETS_DIR . '/style.css', array(), '1.0', 'all');

        /*
         * Load theme scripts
         */
        wp_enqueue_script('bootstrap', ASSETS_DIR . '/assets/js/bootstrap.min.js', array(), '3.3.7', true);
    }

endif; // abitwo setup
add_action('after_setup_theme', 'abitwo_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function abitwo_content_width()
{
    $content_width = $GLOBALS['content_width'];
    $page_layout = get_theme_mod('page_layout');
    if ('one-column' === $page_layout) {
        if (is_front_page()) {
            $content_width = 644;
        } elseif (is_page()) {
            $content_width = 740;
        }
    }
    if (is_single() && !is_active_sidebar('sidebar-1')) {
        $content_width = 740;
    }
    $GLOBALS['content_width'] = apply_filters('abitwo_content_width', $content_width);
}

add_action('template_redirect', 'abitwo_content_width', 0);

/*
 * Site Logo
 */

function abitwo_custom_logo_setup()
{
    $defaults = array(
        'height' => 200,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'abitwo_custom_logo_setup');

/*
 * Navigation bar (menu)
 */

function register_my_menus()
{
    register_nav_menus(
            array(
                'header-menu' => __('Header Menu'),
                'extra-menu' => __('Extra Menu')
            )
    );
}

add_action('init', 'register_my_menus');
