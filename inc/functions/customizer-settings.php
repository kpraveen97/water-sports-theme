<?php
$wp_customize->add_panel( 'event_listing_settings_panel', array(
    'priority' => 25,
    'capability' => 'edit_theme_options',
    'title' => __( 'Theme Options', 'event-listing-water-sports' ),
) );

//Header
$wp_customize->add_section('event_listing_header_section', array(
    'priority' => 20,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __('Header Setting', 'event-listing-water-sports'),
    'panel' => 'event_listing_settings_panel',
));
/*Header Phone*/
$wp_customize->add_setting('event_listing_options[event-listing-water-sports-header-phone]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-water-sports-header-phone'],
    'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('event_listing_options[event-listing-water-sports-header-phone]', array(
    'label' => __('Telephone Number', 'event-listing-water-sports'),
    'description' => __('Enter Telephone Number.', 'event-listing-water-sports'),
    'section' => 'event_listing_header_section',
    'settings' => 'event_listing_options[event-listing-water-sports-header-phone]',
    'type' => 'text',
    'priority' => 15,
));
/*Header Email*/
$wp_customize->add_setting('event_listing_options[event-listing-water-sports-header-email]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-water-sports-header-email'],
    'sanitize_callback' => 'sanitize_email'
));

$wp_customize->add_control('event_listing_options[event-listing-water-sports-header-email]', array(
    'label' => __('Email Address', 'event-listing-water-sports'),
    'description' => __('Enter Email.', 'event-listing-water-sports'),
    'section' => 'event_listing_header_section',
    'settings' => 'event_listing_options[event-listing-water-sports-header-email]',
    'type' => 'text',
    'priority' => 15,
));

/*Social Menu*/
$wp_customize->add_setting('event_listing_options[event-listing-water-sports-header-social]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-water-sports-header-social'],
    'sanitize_callback' => 'event_listing_sanitize_checkbox'
));

$wp_customize->add_control('event_listing_options[event-listing-water-sports-header-social]', array(
    'label' => __('Show Social Icons', 'event-listing-water-sports'),
    'description' => __('Go to Appearance > Menus and make the social menus using custom link and assign it to Social.', 'event-listing-water-sports'),
    'section' => 'event_listing_header_section',
    'settings' => 'event_listing_options[event-listing-water-sports-header-social]',
    'type' => 'checkbox',
    'priority' => 15,
));

/*Search*/
$wp_customize->add_setting('event_listing_options[event-listing-water-sports-header-search]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-water-sports-header-search'],
    'sanitize_callback' => 'event_listing_sanitize_checkbox'
));

$wp_customize->add_control('event_listing_options[event-listing-water-sports-header-search]', array(
    'label' => __('Show Search Icons', 'event-listing-water-sports'),
    'description' => __('Search Icon will appear in the menu section.', 'event-listing-water-sports'),
    'section' => 'event_listing_header_section',
    'settings' => 'event_listing_options[event-listing-water-sports-header-search]',
    'type' => 'checkbox',
    'priority' => 15,
));

//footer
$wp_customize->add_section('event_listing_footer_section', array(
    'priority' => 20,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __('Footer Setting', 'event-listing-water-sports'),
    'panel' => 'event_listing_settings_panel',
));
/*Copyright Setting*/
$wp_customize->add_setting('event_listing_options[event-listing-water-sports-footer-copyright]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-water-sports-footer-copyright'],
    'sanitize_callback' => 'wp_kses_post'
));

$wp_customize->add_control('event_listing_options[event-listing-water-sports-footer-copyright]', array(
    'label' => __('Copyright Text', 'event-listing-water-sports'),
    'description' => __('Enter your own copyright text.', 'event-listing-water-sports'),
    'section' => 'event_listing_footer_section',
    'settings' => 'event_listing_options[event-listing-water-sports-footer-copyright]',
    'type' => 'text',
    'priority' => 15,
));
$wp_customize->add_setting('event_listing_options[event-listing-water-sports-footer-row]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-water-sports-footer-row'],
    'sanitize_callback' => 'event_listing_sanitize_select'
));

$wp_customize->add_control('event_listing_options[event-listing-water-sports-footer-row]', array(
    'choices' => array(
        '1' => __('One Column', 'event-listing-water-sports'),
        '2' => __('Two Column', 'event-listing-water-sports'),
        '3' => __('Three Column', 'event-listing-water-sports'),
        '4' => __('Four Column', 'event-listing-water-sports'),
    ),
    'label' => __('Select Footer Widget Row', 'event-listing-water-sports'),
    'description' => __('You need to add the widgets on Appearance > Widgets', 'event-listing-water-sports'),
    'section' => 'event_listing_footer_section',
    'settings' => 'event_listing_options[event-listing-water-sports-footer-row]',
    'type' => 'select',
    'priority' => 15,
));
/*footer social*/
$wp_customize->add_setting('event_listing_options[event-listing-water-sports-footer-social]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-water-sports-footer-social'],
    'sanitize_callback' => 'event_listing_sanitize_checkbox'
));

$wp_customize->add_control('event_listing_options[event-listing-water-sports-footer-social]', array(
    'label' => __('Show Social Icons', 'event-listing-water-sports'),
    'description' => __('Show social icons in the footer.', 'event-listing-water-sports'),
    'section' => 'event_listing_footer_section',
    'settings' => 'event_listing_options[event-listing-water-sports-footer-social]',
    'type' => 'checkbox',
    'priority' => 15,
));

//site layout
$wp_customize->add_section('event_listing_site_layout_section', array(
    'priority' => 20,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __('Site Layout Setting', 'event-listing-water-sports'),
    'panel' => 'event_listing_settings_panel',
));
/*Boxed and full width*/
$wp_customize->add_setting('event_listing_options[event-listing-water-sports-full-boxed]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-water-sports-full-boxed'],
    'sanitize_callback' => 'event_listing_sanitize_select'
));

$wp_customize->add_control('event_listing_options[event-listing-water-sports-full-boxed]', array(
	'choices' => array(
        'full-width' => __('Full Width', 'event-listing-water-sports'),
        'boxed' => __('Boxed', 'event-listing-water-sports'),
    ),
    'label' => __('Full Width or Boxed', 'event-listing-water-sports'),
    'description' => __('Select the Site Layout.', 'event-listing-water-sports'),
    'section' => 'event_listing_site_layout_section',
    'settings' => 'event_listing_options[event-listing-water-sports-full-boxed]',
    'type' => 'select',
    'priority' => 15,
));

/*Site Sidebar*/
$wp_customize->add_setting('event_listing_options[event-listing-water-sports-site-sidebar]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-water-sports-site-sidebar'],
    'sanitize_callback' => 'event_listing_sanitize_select'
));

$wp_customize->add_control('event_listing_options[event-listing-water-sports-site-sidebar]', array(
	'choices' => array(
        'right-sidebar' => __('Right Sidebar', 'event-listing-water-sports'),
        'left-sidebar' => __('Left Sidebar', 'event-listing-water-sports'),
        'no-sidebar' => __('No Sidbear', 'event-listing-water-sports'),
    ),
    'label' => __('Global Sidebar Setting', 'event-listing-water-sports'),
    'description' => __('Select the Site Layout.', 'event-listing-water-sports'),
    'section' => 'event_listing_site_layout_section',
    'settings' => 'event_listing_options[event-listing-water-sports-site-sidebar]',
    'type' => 'select',
    'priority' => 15,
));


/*Mobile Sidebar*/
$wp_customize->add_setting('event_listing_options[event-listing-water-sports-mobile-sidebar]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-water-sports-mobile-sidebar'],
    'sanitize_callback' => 'event_listing_sanitize_select'
));

$wp_customize->add_control('event_listing_options[event-listing-water-sports-mobile-sidebar]', array(
	'choices' => array(
        'content-first' => __('Content First', 'event-listing-water-sports'),
        'sidebar-first' => __('Sidebar First', 'event-listing-water-sports'),
    ),
    'label' => __('Mobile - Sidebar first or content Setting', 'event-listing-water-sports'),
    'description' => __('Select the option for the sidebar in the mobile devices.', 'event-listing-water-sports'),
    'section' => 'event_listing_site_layout_section',
    'settings' => 'event_listing_options[event-listing-water-sports-mobile-sidebar]',
    'type' => 'select',
    'priority' => 15,
));

//Slider page selection
$wp_customize->add_section('event_listing_site_slider_section', array(
    'priority' => 20,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __('Slider Setting', 'event-listing-water-sports'),
    'panel' => 'event_listing_settings_panel',
));
/*slider one*/
$wp_customize->add_setting('event_listing_options[event-listing-water-sports-slider-page-one]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-water-sports-slider-page-one'],
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control('event_listing_options[event-listing-water-sports-slider-page-one]', array(
    'label' => __('Select Page', 'event-listing-water-sports'),
    'description' => __('First Page for the first Slider.', 'event-listing-water-sports'),
    'section' => 'event_listing_site_slider_section',
    'settings' => 'event_listing_options[event-listing-water-sports-slider-page-one]',
    'type' => 'dropdown-pages',
    'priority' => 15,
));
/*slider two*/
$wp_customize->add_setting('event_listing_options[event-listing-water-sports-slider-page-two]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-water-sports-slider-page-two'],
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control('event_listing_options[event-listing-water-sports-slider-page-two]', array(
    'label' => __('Select Page', 'event-listing-water-sports'),
    'description' => __('First Page for the second Slider.', 'event-listing-water-sports'),
    'section' => 'event_listing_site_slider_section',
    'settings' => 'event_listing_options[event-listing-water-sports-slider-page-two]',
    'type' => 'dropdown-pages',
    'priority' => 15,
));
/*slider three*/
$wp_customize->add_setting('event_listing_options[event-listing-water-sports-slider-page-three]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-water-sports-slider-page-three'],
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control('event_listing_options[event-listing-water-sports-slider-page-three]', array(
    'label' => __('Select Page', 'event-listing-water-sports'),
    'description' => __('First Page for the third Slider.', 'event-listing-water-sports'),
    'section' => 'event_listing_site_slider_section',
    'settings' => 'event_listing_options[event-listing-water-sports-slider-page-three]',
    'type' => 'dropdown-pages',
    'priority' => 15,
));