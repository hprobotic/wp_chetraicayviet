<?php
/**
 * Che trai cay Viet Theme Customizer
 *
 * @package Che trai cay Viet
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function neomasterial_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'neomasterial_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function neomasterial_customize_preview_js() {
	wp_enqueue_script( 'neomasterial_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'neomasterial_customize_preview_js' );


function my_site_settings_register() {

    // Main Settings
    Site_Settings_Admin_Screen::add_field( 'copyright', __( 'Copyright' ) );

    // Contact Details
    Site_Settings_Admin_Screen::add_section( 'contact', __( 'Contact Details' ) );
    Site_Settings_Admin_Screen::add_field( 'email', __( 'Email' ), array(
        'section' => 'contact'
    ) );
    Site_Settings_Admin_Screen::add_field( 'phone_number', __( 'Phone Number' ), array(
        'section' => 'contact'
    ) );
    Site_Settings_Admin_Screen::add_field( 'ship_number', __( 'Ship Number' ), array(
        'section' => 'contact'
    ) );
    Site_Settings_Admin_Screen::add_field( 'address', __( 'Address' ), array(
        'section' => 'contact',
        'input'   => 'textarea',
        'rows'    => 5
    ) );

}
add_action( 'site_settings_register', 'my_site_settings_register' );