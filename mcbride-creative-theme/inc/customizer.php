<?php
/**
 * Customizer Settings
 *
 * @package McBride_Creative
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register customizer settings
 */
function mcbride_creative_customize_register( $wp_customize ) {

    // Add McBride Creative section
    $wp_customize->add_section( 'mcbride_creative_options', array(
        'title'    => __( 'McBride Creative Options', 'mcbride-creative' ),
        'priority' => 30,
    ) );

    // Contact Email
    $wp_customize->add_setting( 'mcbride_creative_contact_email', array(
        'default'           => 'hello@mcbridecreative.com',
        'sanitize_callback' => 'sanitize_email',
    ) );

    $wp_customize->add_control( 'mcbride_creative_contact_email', array(
        'label'   => __( 'Contact Email', 'mcbride-creative' ),
        'section' => 'mcbride_creative_options',
        'type'    => 'email',
    ) );

    // Location
    $wp_customize->add_setting( 'mcbride_creative_location', array(
        'default'           => 'Sault Ste. Marie, Ontario, Canada',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'mcbride_creative_location', array(
        'label'   => __( 'Location', 'mcbride-creative' ),
        'section' => 'mcbride_creative_options',
        'type'    => 'text',
    ) );

    // Instagram Handle
    $wp_customize->add_setting( 'mcbride_creative_instagram', array(
        'default'           => '@mcbridecreative',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'mcbride_creative_instagram', array(
        'label'   => __( 'Instagram Handle', 'mcbride-creative' ),
        'section' => 'mcbride_creative_options',
        'type'    => 'text',
    ) );

    // LinkedIn URL
    $wp_customize->add_setting( 'mcbride_creative_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'mcbride_creative_linkedin', array(
        'label'   => __( 'LinkedIn URL', 'mcbride-creative' ),
        'section' => 'mcbride_creative_options',
        'type'    => 'url',
    ) );

    // Facebook URL
    $wp_customize->add_setting( 'mcbride_creative_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'mcbride_creative_facebook', array(
        'label'   => __( 'Facebook URL', 'mcbride-creative' ),
        'section' => 'mcbride_creative_options',
        'type'    => 'url',
    ) );

    // CTA Button Text
    $wp_customize->add_setting( 'mcbride_creative_cta_text', array(
        'default'           => 'Get Started',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'mcbride_creative_cta_text', array(
        'label'   => __( 'Primary CTA Button Text', 'mcbride-creative' ),
        'section' => 'mcbride_creative_options',
        'type'    => 'text',
    ) );

    // CTA Button URL
    $wp_customize->add_setting( 'mcbride_creative_cta_url', array(
        'default'           => '/contact',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'mcbride_creative_cta_url', array(
        'label'   => __( 'Primary CTA Button URL', 'mcbride-creative' ),
        'section' => 'mcbride_creative_options',
        'type'    => 'url',
    ) );
}
add_action( 'customize_register', 'mcbride_creative_customize_register' );
