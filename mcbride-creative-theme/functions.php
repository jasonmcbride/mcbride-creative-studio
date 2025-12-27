<?php
/**
 * McBride Creative Theme Functions
 *
 * @package McBride_Creative
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup
 */
function mcbride_creative_setup() {
    // Add theme support for block styles
    add_theme_support( 'wp-block-styles' );

    // Add theme support for responsive embeds
    add_theme_support( 'responsive-embeds' );

    // Add theme support for editor styles
    add_theme_support( 'editor-styles' );

    // Add theme support for wide alignment
    add_theme_support( 'align-wide' );

    // Add theme support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Add theme support for post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Add theme support for HTML5 markup
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add theme support for title tag
    add_theme_support( 'title-tag' );

    // Load text domain for translations
    load_theme_textdomain( 'mcbride-creative', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'mcbride_creative_setup' );

/**
 * Enqueue theme styles and scripts
 */
function mcbride_creative_enqueue_assets() {
    // Get theme version
    $theme_version = wp_get_theme()->get( 'Version' );

    // Enqueue Google Fonts
    wp_enqueue_style(
        'mcbride-creative-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Enqueue main stylesheet
    wp_enqueue_style(
        'mcbride-creative-style',
        get_stylesheet_uri(),
        array( 'mcbride-creative-fonts' ),
        $theme_version
    );

    // Enqueue custom styles
    wp_enqueue_style(
        'mcbride-creative-custom',
        get_template_directory_uri() . '/assets/css/custom.css',
        array( 'mcbride-creative-style' ),
        $theme_version
    );

    // Enqueue main script
    wp_enqueue_script(
        'mcbride-creative-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        $theme_version,
        true
    );

    // Add inline script for smooth scroll
    wp_add_inline_script(
        'mcbride-creative-script',
        'document.documentElement.classList.add("js");'
    );
}
add_action( 'wp_enqueue_scripts', 'mcbride_creative_enqueue_assets' );

/**
 * Enqueue editor styles
 */
function mcbride_creative_editor_assets() {
    // Enqueue Google Fonts in editor
    add_editor_style( 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600;700&display=swap' );

    // Enqueue custom editor styles
    add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'mcbride_creative_editor_assets' );

/**
 * Register custom block categories
 */
function mcbride_creative_block_categories( $categories ) {
    return array_merge(
        array(
            array(
                'slug'  => 'mcbride-creative',
                'title' => __( 'McBride Creative', 'mcbride-creative' ),
                'icon'  => 'awards',
            ),
        ),
        $categories
    );
}
add_filter( 'block_categories_all', 'mcbride_creative_block_categories' );

/**
 * Register custom blocks
 */
function mcbride_creative_register_blocks() {
    // Register portfolio grid block
    if ( file_exists( get_template_directory() . '/blocks/portfolio-grid/block.json' ) ) {
        register_block_type( get_template_directory() . '/blocks/portfolio-grid' );
    }

    // Register service packages block
    if ( file_exists( get_template_directory() . '/blocks/service-packages/block.json' ) ) {
        register_block_type( get_template_directory() . '/blocks/service-packages' );
    }

    // Register testimonial carousel block
    if ( file_exists( get_template_directory() . '/blocks/testimonial-carousel/block.json' ) ) {
        register_block_type( get_template_directory() . '/blocks/testimonial-carousel' );
    }

    // Register CTA section block
    if ( file_exists( get_template_directory() . '/blocks/cta-section/block.json' ) ) {
        register_block_type( get_template_directory() . '/blocks/cta-section' );
    }

    // Register before/after block
    if ( file_exists( get_template_directory() . '/blocks/before-after/block.json' ) ) {
        register_block_type( get_template_directory() . '/blocks/before-after' );
    }

    // Register stats counter block
    if ( file_exists( get_template_directory() . '/blocks/stats-counter/block.json' ) ) {
        register_block_type( get_template_directory() . '/blocks/stats-counter' );
    }

    // Register process timeline block
    if ( file_exists( get_template_directory() . '/blocks/process-timeline/block.json' ) ) {
        register_block_type( get_template_directory() . '/blocks/process-timeline' );
    }
}
add_action( 'init', 'mcbride_creative_register_blocks' );

/**
 * Add custom image sizes
 */
function mcbride_creative_custom_image_sizes() {
    // Portfolio thumbnail
    add_image_size( 'portfolio-thumbnail', 600, 400, true );

    // Portfolio large
    add_image_size( 'portfolio-large', 1200, 800, true );

    // Hero image
    add_image_size( 'hero-image', 1920, 1080, true );

    // Testimonial avatar
    add_image_size( 'testimonial-avatar', 200, 200, true );
}
add_action( 'after_setup_theme', 'mcbride_creative_custom_image_sizes' );

/**
 * Custom excerpt length
 */
function mcbride_creative_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'mcbride_creative_excerpt_length' );

/**
 * Custom excerpt more string
 */
function mcbride_creative_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'mcbride_creative_excerpt_more' );

/**
 * Add async/defer to scripts
 */
function mcbride_creative_add_async_defer( $tag, $handle ) {
    // Scripts to defer
    $defer_scripts = array( 'mcbride-creative-script' );

    if ( in_array( $handle, $defer_scripts ) ) {
        return str_replace( ' src', ' defer src', $tag );
    }

    return $tag;
}
add_filter( 'script_loader_tag', 'mcbride_creative_add_async_defer', 10, 2 );

/**
 * Security headers
 */
function mcbride_creative_security_headers() {
    header( 'X-Content-Type-Options: nosniff' );
    header( 'X-Frame-Options: SAMEORIGIN' );
    header( 'X-XSS-Protection: 1; mode=block' );
    header( 'Referrer-Policy: strict-origin-when-cross-origin' );
}
add_action( 'send_headers', 'mcbride_creative_security_headers' );

/**
 * Disable WordPress emojis
 */
function mcbride_creative_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'mcbride_creative_disable_emojis' );

/**
 * Include custom post types if needed
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Include customizer settings
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Include helper functions
 */
require get_template_directory() . '/inc/helpers.php';

// Enqueue modern 2025 design CSS
add_action( 'wp_enqueue_scripts', 'mcbride_creative_enqueue_modern_css', 20 );
function mcbride_creative_enqueue_modern_css() {
    wp_enqueue_style(
        'mcbride-creative-modern',
        get_template_directory_uri() . '/assets/css/modern-2025.css',
        array( 'mcbride-creative-custom' ),
        '1.0.0'
    );
}
