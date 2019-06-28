<?php
/**
 * rmx Theme Customizer
 *
 * @package rmx
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function rmx_customize_register( $wp_customize ) {

    $wp_customize->add_section(
        'theme_section_one',
        array(
            'title' => 'Theme settings',
            'description' => 'Section',
            'priority' => 11,
        )
    );

    $wp_customize->add_setting(
	    'copyright_textbox',
	    array('default' => 'Site copyright')
	);

	$wp_customize->add_control(
        'copyright_textbox',
        array(
            'label' => 'Footer text',
            'section' => 'theme_section_one',
            'type' => 'text',
        )
    );


    $wp_customize->add_setting(
        'footer_layout',
        array('default' => 'item_2')
    );

    $wp_customize->add_control(
        'footer_layout',
        array(
            'type' => 'radio',
            'label' => 'Footer widgets sections',
            'section' => 'theme_section_one',
            'choices' => array(
                'item_2' => '2 sections',
                'item_3' => '3 sections',
                'item_4' => '4 sections',
            ),
        )
    );


}
add_action( 'customize_register', 'rmx_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
/*
function rmx_customize_preview_js() {
	wp_enqueue_script( 'rmx-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}*/
//add_action( 'customize_preview_init', 'rmx_customize_preview_js' );
