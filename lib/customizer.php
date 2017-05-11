<?php

function wysdom_customizer_config() {
	
    $url  = get_stylesheet_directory_uri() . '/lib/kirki/';

    /**
     * If you need to include Kirki in your theme,
     * then you may want to consider adding the translations here
     * using your textdomain.
     * 
     * If you're using Kirki as a plugin then you can remove these.
     */

    $strings = array(
        'background-color' => __( 'Background Color', 'wysdom' ),
        'background-image' => __( 'Background Image', 'wysdom' ),
        'no-repeat' => __( 'No Repeat', 'wysdom' ),
        'repeat-all' => __( 'Repeat All', 'wysdom' ),
        'repeat-x' => __( 'Repeat Horizontally', 'wysdom' ),
        'repeat-y' => __( 'Repeat Vertically', 'wysdom' ),
        'inherit' => __( 'Inherit', 'wysdom' ),
        'background-repeat' => __( 'Background Repeat', 'wysdom' ),
        'cover' => __( 'Cover', 'wysdom' ),
        'contain' => __( 'Contain', 'wysdom' ),
        'background-size' => __( 'Background Size', 'wysdom' ),
        'fixed' => __( 'Fixed', 'wysdom' ),
        'scroll' => __( 'Scroll', 'wysdom' ),
        'background-attachment' => __( 'Background Attachment', 'wysdom' ),
        'left-top' => __( 'Left Top', 'wysdom' ),
        'left-center' => __( 'Left Center', 'wysdom' ),
        'left-bottom' => __( 'Left Bottom', 'wysdom' ),
        'right-top' => __( 'Right Top', 'wysdom' ),
        'right-center' => __( 'Right Center', 'wysdom' ),
        'right-bottom' => __( 'Right Bottom', 'wysdom' ),
        'center-top' => __( 'Center Top', 'wysdom' ),
        'center-center' => __( 'Center Center', 'wysdom' ),
        'center-bottom' => __( 'Center Bottom', 'wysdom' ),
        'background-position' => __( 'Background Position', 'wysdom' ),
        'background-opacity' => __( 'Background Opacity', 'wysdom' ),
        'ON' => __( 'ON', 'wysdom' ),
        'OFF' => __( 'OFF', 'wysdom' ),
        'all' => __( 'All', 'wysdom' ),
        'cyrillic' => __( 'Cyrillic', 'wysdom' ),
        'cyrillic-ext' => __( 'Cyrillic Extended', 'wysdom' ),
        'devanagari' => __( 'Devanagari', 'wysdom' ),
        'greek' => __( 'Greek', 'wysdom' ),
        'greek-ext' => __( 'Greek Extended', 'wysdom' ),
        'khmer' => __( 'Khmer', 'wysdom' ),
        'latin' => __( 'Latin', 'wysdom' ),
        'latin-ext' => __( 'Latin Extended', 'wysdom' ),
        'vietnamese' => __( 'Vietnamese', 'wysdom' ),
        'serif' => _x( 'Serif', 'font style', 'wysdom' ),
        'sans-serif' => _x( 'Sans Serif', 'font style', 'wysdom' ),
        'monospace' => _x( 'Monospace', 'font style', 'wysdom' ),
    );	

	$args = array(
  
        // Change the logo image. (URL) Point this to the path of the logo file in your theme directory
        // The developer recommends an image size of about 250 x 250
        // The color of active menu items, help bullets etc.
        'color_active' => '#95c837',
		
		// Color used on slider controls and image selects
		'color_accent' => '#e7e7e7',
	
        // Color used for secondary elements and desable/inactive controls
        'color_light'  => '#e7e7e7',
  
        // Color used for button-set controls and other elements
        'color_select' => '#34495e',
		 
        // For the parameter here, use the handle of your stylesheet you use in wp_enqueue
        'stylesheet_id' => 'customize-styles', 
		
        // Only use this if you are bundling the plugin with your theme (see above)
        'url_path'     => get_template_directory_uri() . '/lib/kirki/',

        'textdomain'   => 'wysdom',
		
        'i18n'         => $strings,		
	);
	return $args;
}
add_filter( 'kirki/config', 'wysdom_customizer_config' );


/**
 * Create the customizer panels and sections
 */
add_action( 'customize_register', 'wysdom_add_panels_and_sections' ); 
function wysdom_add_panels_and_sections( $wp_customize ) {
	
    // Add Sections

    $wp_customize->add_section('basic',   array('title' => __('Basic Settings', 'wysdom'),   'description' => '',    'priority' => 130,));

}


function wysdom_custom_setting( $controls ) {

     // Basic	 
	 
	 $controls[] = array('label' => __('Upload Logo Light', 'wysdom'),      'setting' => 'pwt_logo_upload_light',    'type' => 'upload',    'default' => '',                       'section' => 'basic',   'description' => __('', 'wysdom' ));
	 $controls[] = array('label' => __('Upload Logo Dark', 'wysdom'),       'setting' => 'pwt_logo_upload_dark',     'type' => 'upload',    'default' => '',                       'section' => 'basic',   'description' => __('', 'wysdom' ));

     $controls[] = array('label' => __('Upload Logo Footer', 'wysdom'),   'setting' => 'pwt_image_header',    'type' => 'upload',    'default' => '',                       'section' => 'basic',   'description' => __('', 'wysdom' ));	
    
	 $controls[] = array('label' => __('Title Subscribe', 'wysdom'),        'setting' => 'title_subscribe',       'type' => 'text',      'default' => __('', 'wysdom' ),   'section' => 'basic',   'description' => ''  );	 
	 $controls[] = array('label' => __('Content Subscribe', 'wysdom'),      'setting' => 'content_subscribe',       'type' => 'textarea',      'default' => __('', 'wysdom' ),   'section' => 'basic',   'description' => ''  );	 
		
	 $controls[] = array('label' => __('Copyrights Footer', 'wysdom'),      'setting' => 'pwt_copyrights',      'type' => 'text',      'default' => '© Copyright 2015 CrowdCare Corporation',  'section' => 'basic',   'description' => __('' , 'wysdom' ));

	 $controls[] = array('label' => __('Twitter', 'wysdom'),    'setting' => 'social_twitter',      'type' => 'text',      'default' => '',  'section' => 'basic',   'description' => __('' , 'wysdom' ));
	 $controls[] = array('label' => __('Facebook', 'wysdom'),   'setting' => 'social_facebook',      'type' => 'text',      'default' => '',  'section' => 'basic',   'description' => __('' , 'wysdom' ));
	 $controls[] = array('label' => __('Dribbble', 'wysdom'),   'setting' => 'social_dribbble',      'type' => 'text',      'default' => '',  'section' => 'basic',   'description' => __('' , 'wysdom' ));
	 $controls[] = array('label' => __('Vimeo', 'wysdom'),      'setting' => 'social_vimeo',      'type' => 'text',      'default' => '',  'section' => 'basic',   'description' => __('' , 'wysdom' ));	 
	 
	 $controls[] = array('label' => __('Title Follow Us', 'wysdom'),      'setting' => 'title_follow',      'type' => 'text',      'default' => '',  'section' => 'basic',   'description' => __('' , 'wysdom' ));	 
	 	 
     return $controls;
}
add_filter( 'kirki/controls', 'wysdom_custom_setting' );

